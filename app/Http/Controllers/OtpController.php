<?php

namespace App\Http\Controllers;

use App\Models\Registrant;
use App\Models\WaOtp;
use Facades\App\Services\WhatsappService;
use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function request(Request $request, $phone_number) {
        /** Validasi phone number */

        /** Proccess otp */
        $otp = WaOtp::create([
            'phone_number' => $phone_number
        ]);

        // dd($otp);

        WhatsappService::message($otp->phone_number, "[{$otp->number}] adalah kode otp anda.");

        return response()->json(['status' => 'success', 'phone_number' => $otp->phone_number], 200);
    }

    // public function validate(Request $request, $phone_number) {
    //     Registrant::create([

    //     ]);
    // }

    public function validateRegistrant(Request $request, $phone_number, $number) {

        $otp = WaOtp::select('id')
        ->where([
            'phone_number' => $phone_number,
            'number' => $number,
        ]);

        if($otp->count() == 0) {
            return response()->json(['status' => 'failed'.$otp->count()], 433);
        }

        $otp->delete();

        Registrant::create($request->all());

        WhatsappService::message($phone_number, "Pendaftaran anda telah berhasil. Anda akan mendapatkan pemberitahuan lebih lanjut melalui whatsapp ini, anda juga dapat mengajukan pertanyaan melalui whatsapp ini\nTerimakasih.");

        return response()->json(['status' => 'success'], 200);
    }
}
