<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wa_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('broadcast_id');
            $table->foreignId('registrant_id');
            $table->string('phone_number');
            $table->text('message'); // Isi pesan whatsapp
            $table->text('footer')->nullable(); // Isi pesan whatsapp
            $table->json('lists')->nullable(); // Custom list message
            $table->enum('status', ['unproccessed', 'need_resend', 'success_send', 'failed_send'])->default('unproccessed'); // 0 = Gagal Terkirim, 1 = Terkirim
            $table->text('failed_reason')->nullable(); // Alasan gagal terkirim
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wa_messages');
    }
}
