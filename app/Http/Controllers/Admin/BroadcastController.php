<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Broadcast;
use App\Models\Registrant;
use App\Models\WaMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BroadcastController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Broadcast Whatsapp';
        $page_description = '';
        $action = 'broadcast';

        $registrants = Registrant::get();

        return view('admin.broadcast.main', compact('registrants', 'page_title', 'page_description', 'action'));
    }

    /**
     * List of resource data
     */
    public function data(Request $request)
    {
        $search = $request->search['value'];

        $data = Broadcast::with('message')->when($search, function ($q, $search) {
            return $q->where('type', 'like', "%$search%")
                ->orWhere('title', 'like', "%$search%");
        })->skip($request->start)->take($request->length)->get();

        return [
            "draw" => $request->draw,
            "recordsFiltered" => Registrant::count(),
            "recordsTotal" => $request->length,
            "data" => $data
        ];
    }

    /**
     * List of resource data detail
     */
    public function detail(Request $request)
    {
        $broadcast_id = $request->broadcast_id;
        $search = $request->search['value'];

        $data = WaMessage::where('broadcast_id', $broadcast_id)
        ->with('registrant')
        ->skip($request->start)
        ->take($request->length)
        ->get();

        return [
            "draw" => $request->draw,
            "recordsFiltered" => Registrant::count(),
            "recordsTotal" => $request->length,
            "data" => $data
        ];
    }

    /**
     * List of resource data
     */
    public function store(Request $request)
    {
        $broadcast = Broadcast::create([
            'title' => $request->title,
            'type' => $request->message_template
        ]);
        
        $waMessage = [];
        foreach ($request->registrant_id as $key => $id) {
            $registrant = Registrant::findOrFail($id);
            $textValues = [
                'code' => $registrant->code,
                'name' => $registrant->name,
                'origin' => $registrant->origin,
                'phone_number' => $registrant->phone_number,
                'payment_status' => $registrant->payment_status
            ];

            $message = $request->message_format;
            $list = $request->list;

            array_push($waMessage, [
                'broadcast_id'  => $broadcast->id,
                'registrant_id' => $id,
                'phone_number'  => $registrant->phone_number,
                'message'       => $message,
                'footer'        => config('event.name'),
                'lists'        => json_encode($list)
            ]);
        }

        WaMessage::insert($waMessage);

        return redirect()->back()->with('success', 'Broadcast telah masuk queue, dan akan terkirim minimal 5 menit kedepan');
        
    }

}
