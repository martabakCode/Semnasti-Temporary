<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Registrant;
use App\Models\WaMessage;
use Facades\App\Services\WhatsappService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class RegistrantController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Data Registrasi Peserta';
        $page_description = 'isinya data registrasi peserta';
        $action = 'registrant';


        return view('admin.registrant.main', compact('page_title', 'page_description', 'action'));
    }

    /**
     * List of resource data
     */
    public function data(Request $request)
    {
        $search = $request->search['value'];

        $data = Registrant::when($search, function ($q, $search) {
            return $q->where('name', 'like', "%$search%")
                ->orWhere('code', 'like', "%$search%")
                ->orWhere('origin', 'like', "%$search%")
                ->orWhere('phone_number', 'like', "%$search%");
        })->skip($request->start)->take($request->length)->get();

        return [
            "draw" => $request->draw,
            "recordsFiltered" => Registrant::count(),
            "recordsTotal" => $request->length,
            "data" => $data
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'origin' => 'required|max:255',
            'phone_number' => 'required|min:10|max:13',
        ]);

        if ($validator->fails()) {
            return Response::json($validator->errors(), 400);
        }

        $resource = Registrant::create([
            'name' => $request->name,
            'origin' => $request->origin,
            'phone_number' => $request->phone_number
        ]);

        return $resource;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'origin' => 'required|max:255',
            'phone_number' => 'required|min:10|max:13',
        ]);

        if ($validator->fails()) {
            return Response::json($validator->errors(), 400);
        }

        $data = [
            'name' => $request->name,
            'origin' => $request->origin,
            'phone_number' => $request->phone_number
        ];

        $resource = Registrant::find($id)->update($data);

        return $resource;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Registrant::find($id)->delete();
        return true;
    }

    public function customUpdate(Request $request, $id) {
        $registrant = Registrant::find($id);
        
        $data[$request->field] = $request->value;

        if($request->field == 'payment_status') {
            /** Send Invoice & Notif */
            WhatsappService::message($registrant->phone_number, "Halo kak {$registrant->name},\nPembayaran anda sudah dikonfirmasi oleh panitia\nTerimakasih.");
        }
        if($request->field == 'arrival_confirmation') {
            /** Send Notif */
            WhatsappService::message($registrant->phone_number, "Halo kak {$registrant->name},\nKedatangan anda sudah dikonfirmasi oleh panitia\nTerimakasih.");
        }
        if($request->field == 'arrival_status') {
            /** Send Notif */
            WhatsappService::message($registrant->phone_number, "Halo kak {$registrant->name},\nTerimakasih telah datang di acara kami, mohon untuk mengisi feedback setelah acara selesai untuk mendapatkan 1 unit mobil ya kak\n\nLink feedback: https://forms.gle/8trD6muuQ6NnR1jc8\n\nTerimakasih.");
        }

        $registrant->update($data);

        return response()->json([
            'status' => 'berhasil, berhasil, hore hore'
        ], 200);
    }
}
