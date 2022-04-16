<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registration_id');
            $table->string('nomor_pembayaran'); // digenerate di DB
            $table->integer('kode_unik');
            $table->integer('total');
            $table->text('bukti_pembayaran')->nullable();

            $table->boolean('is_verified')->default(false);
            $table->unsignedBigInteger('verified_by')->nullable();
            $table->timestamps();

            // constraints
            // $table->foreign('registration_id')->references('registrations')->on('id');
            // $table->foreign('verified_by')->references('users')->on('id');
        });

        DB::unprepared("CREATE TRIGGER `auto_nomor_pembayaran` BEFORE INSERT ON `payments` FOR EACH ROW 
            BEGIN
             SELECT SUBSTRING((MAX(`nomor_pembayaran`)),4,4) INTO @total FROM payments;
                IF (@total >= 1) THEN
                    SET new.nomor_pembayaran = CONCAT('PAY',LPAD(@total+1,4,'0'));
                ELSE
                    SET new.nomor_pembayaran = CONCAT('PAY',LPAD(1,4,'0'));
                END IF;
            END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
