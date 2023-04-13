<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('registrants', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('email');
            $table->string('name');
            $table->string('origin')->comment('Asal (sekolah/instansi)');
            $table->string('phone_number')->comment('Dimulai dengan 62');
            $table->enum('payment_status', ['pending', 'success'])->default('pending');
            $table->dateTime('payment_at')->nullable();
            $table->foreignId('payment_confirm_by')->nullable();
            $table->boolean('arrival_confirmation')->nullable()->comment('Konfirmasi kedatangan');
            $table->boolean('arrival_status')->nullable()->comment('Status kedatangan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrants');
    }
}
