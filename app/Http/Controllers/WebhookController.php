<?php

namespace App\Http\Controllers;

use App\Models\Registrant;
use Facades\App\Services\WhatsappService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class WebhookController extends Controller
{
    private $notif_id;
    private $koor_semnas_id;

    public function __construct()
    {
        /**
         * ID Grup Notifikasi : 120363034921154513@g.us
         */
        $this->notif_id = "120363034921154513@g.us";
        $this->koor_semnas_id = "120363049795763820@g.us";
    }

    public function autoReplay(Request $request) {

        $body = $request->body;
        
        
        // Log::info($request->all());
        
        
        if(!isset($body['key'])) {
            Log::info("Body key not found");
            die();
            return;
        }
        
        $key = $body['key'];
        
        $remoteJid = $key['remoteJid'];
        $phone_number = explode('@', $remoteJid)[0];
        
        Log::info($phone_number);
        if($phone_number == '6289506373551') {
            if(isset($body['message']['conversation'])) {
                $message = $body['message']['conversation'];
                
                die();
                return;
            }
            Log::info($body);
        }
        
        Log::info("JDId: $remoteJid");
        if($remoteJid == $this->notif_id || $remoteJid == $this->koor_semnas_id) {
            if(isset($body['message']['conversation'])) {
                $message = $body['message']['conversation'];
                Log::info("Pesan: $message");
                if($message == '/info-pendaftar') {
                    $registrant = Registrant::get();
                    $count = $registrant->count();
                    $success_payment = $registrant->where('payment_status', 'success')->count();
                    $pending_payment = $registrant->where('payment_status', 'pending')->count();
                    $arrival_confirmation = $registrant->where('arrival_confirmation', 1)->count();
                    WhatsappService::message($remoteJid, "======================\nInfo Pendaftar\n======================\n\nJumlah Semua: $count\nLunas: $success_payment\nNunggak: $pending_payment\nKonfirmasi Kedatangan: $arrival_confirmation");
                }
                
                die();
                return;
            }
        }
        
        if(!isset($body['message']['listResponseMessage']['singleSelectReply']['selectedRowId'])) {
            Log::info("Message Invalid #1000");
            die();
            return;
        }
        
        $contents = $body['message']['listResponseMessage']['singleSelectReply']['selectedRowId'];
        Log::info("Webhook $phone_number for $contents");
        
        $content = explode('&', $contents);
        
        $data_content = [];
        foreach($content as $item) {
            $data = explode(':', $item);
            if(!isset($data[0]) || !isset($data[1])) {
                Log::info("Message Invalid #1001");
                die();
                return;
            }
            
            $data_content[$data[0]] = $data[1];
        }
        
        /**
         * $data_content["code"] = code
         * $data_content["type"] = type
         * $data_content["value"] = value
         * 
         */
         Log::info("Data Content");
         Log::info($data_content);
        
        $registrant = Registrant::where('code', $data_content["code"])->first();

        if(!$registrant) {
            Log::info("Code registrasi {$data_content["code"]} tidak ditemukan");
            die();
            return;
        }

        if($registrant->phone_number != $phone_number) {
            Log::info("Orang iseng tidak dikenal dari nomor $phone_number, mencoba untuk mengirimkan : ");
            die();
            return;
        }
        
        

        if($data_content["type"] == "arrival_confirmation") {
            /**
             * Arrival Confirmation current status validation
             */
             if($registrant->arrival_confirmation === 0 || $registrant->arrival_confirmation === 1) {
                 WhatsappService::message($registrant->phone_number, "Kedatangan anda sudah terkonfirmasi, apakah anda ingin mengganti konfirmasi kedatangan?");
                die();
                return;
             }else {
                 $status = "";
                 if($data_content['value'] == '1') {
                     $status = "datang";
                 }else {
                     $status = "berhalangan hadir";
                 }
                 
                // $registrant->update([
                //     'arrival_confirmation' => $data_content['value']
                // ]);
                 
                // WhatsappService::message($registrant->phone_number, "Anda telah terkonfirmasi untuk $status, hubungi panitia untuk merubah status kedatangan anda.");
                
                $this->arrivalConfirmation($registrant->id, $data_content["value"]);
                
                die();
                return;
             }
             
            
        } else if ($data_content["type"] == "payment_confirmation") {
            /**
             * Payment Confirmation current status validation
             */
            if($registrant->payment_status == "success") {
                WhatsappService::message($registrant->phone_number, "Pembayaran anda sudah terkonfirmasi.");
                die();
                return;
            }
             
            $this->paymentConfirmation($registrant->id, $data_content["value"]);
        }else {
            Log::info("Message Code : {$data_content['type']}");
        }

        return response()->json([
            "status" => "success"
        ], 200);

        //return General::rAPI(200, $insert_transaction, "Request pembayaran berhasil dibuat.");
    }

    private function arrivalConfirmation(Int $registrant_id, $value) {
        try {
            Registrant::find($registrant_id)->update([
                'arrival_confirmation' => $value
            ]);

            $registrant = Registrant::find($registrant_id);
            
            if($value == "1") {
                WhatsappService::message($registrant->phone_number, "*Teriakasih,*\n\nKedatangan anda telah kami konfirmasi.");    
            } else {
                WhatsappService::message($registrant->phone_number, "*Teriakasih,*\n\nAnda telah mengkonfirmasi bahwa berhalangan hadir pada event.");
            }
            

            WhatsappService::message($this->notif_id, "*[Konfirmasi Kedatangan]* $registrant->name telah mengkonfirmasi kedatangan");
            
            return true;
        } catch (\Throwable $th) {
            Log::info("arrivalConfirmation failed : ".$th->getMessage());
            Log:info($th);
            die();
            return false;
        }
    }
    
    private function paymentConfirmation(Int $registrant_id, $value) {
        try {

            $registrant = Registrant::find($registrant_id);
            
            if($registrant->payment_status == "success") {
                WhatsappService::message($registrant->phone_number, "*Teriakasih,*\n\nPembayaran anda telah kami konfirmasi.");    
                die();
                return;
            } else {
                WhatsappService::message($registrant->phone_number, "*Teriakasih,*\n\nSilahkan kirim bukti TF/pembayaran untuk kami verifikasi lebih lanjut.");
                WhatsappService::message($this->notif_id, "*[Konfirmasi Pembayaran][$registrant->code]* $registrant->name mengirimkan permintaan pembayaran, tolong segera di cek pembayarannya ya ges.");   
            }
            
            return true;
        } catch (\Throwable $th) {
            Log::info("arrivalConfirmation failed : ".$th->getMessage());
            Log:info($th);
            die();
            return false;
        }
    }
}
