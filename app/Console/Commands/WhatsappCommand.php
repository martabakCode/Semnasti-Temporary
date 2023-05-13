<?php

namespace App\Console\Commands;

use App\Models\Broadcast;
use App\Models\WaMessage;
use Facades\App\Services\WhatsappService;
use Illuminate\Console\Command;

class WhatsappCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'whatsapp:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ngirim pesan dari table wa_messages (BROADCAST)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $whatsapps = WaMessage::where(function ($query) {
            $query->where('status', 'unproccessed')
                ->orWhere('status', 'need_resend');
        })->get();

        foreach ($whatsapps as $whatsapp) {
            try {
                if ($whatsapp->phone_number) {

                    if(isset($whatsapp->list[0])) {
                        $proccess = WhatsappService::messageList($whatsapp->registrant->code, $whatsapp->phone_number, "Hi,",$whatsapp->message, $whatsapp->lists[0]);
                    } else {
                        $proccess = WhatsappService::message($whatsapp->phone_number, $whatsapp->message);
                    }

                    if (isset($proccess['error']) || $proccess == false) {
                        $whatsapp->update([
                            'status'        => 'failed_send',
                            'failed_reason' => $proccess['message']
                        ]);
                    } else {
                        $whatsapp->update([
                            'status'        => 'success_send'
                        ]);
                    }
                }
            } catch (\Throwable $th) {
                $whatsapp->update([
                    'status'        => 'failed_send',
                    'failed_reason' => $th->getMessage()
                ]);
            }

            sleep(rand(15, 20));
        }

        return 0;
    }
}
