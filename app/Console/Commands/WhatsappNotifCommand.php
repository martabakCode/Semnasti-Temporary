<?php

namespace App\Console\Commands;

use App\Models\Registrant;
use Carbon\Carbon;
use Facades\App\Services\WhatsappService;
use Illuminate\Console\Command;

class WhatsappNotifCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'whatsapp:notif';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notifikasi jumlah peserta (s)';

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
        $registrant = Registrant::get();
        $count = $registrant->count();
        $success_payment = $registrant->where('payment_status', 'success')->count();
        $pending_payment = $registrant->where('payment_status', 'pending')->count();
        $arrival_confirmation = $registrant->where('arrival_confirmation', 1)->count();
        $date = Carbon::now()->format('d M Y H:i');
        WhatsappService::message("6281334429348", "=============================\nInfo Pendaftar $date\n=============================\n\nJumlah Semua: $count\nLunas: $success_payment\nNunggak: $pending_payment\nKonfirmasi Kedatangan: $arrival_confirmation");

        return 0;
    }
}
