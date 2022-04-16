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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nomor_registrasi')->nullable(); // digenerate lewat DB
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('tim');
            $table->string('kelas');
            $table->string('email');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('rt_rw');
            $table->string('jalan');
            $table->integer('no_wa');
            $table->text('kartu_identitas');
            $table->timestamps();

            // constraints
            // $table->foreign('user_id')->references('users')->on('id');
        });

        DB::unprepared("CREATE TRIGGER `auto_nomor_registrasi` BEFORE INSERT ON `registrations` FOR EACH ROW 
            BEGIN
             SELECT SUBSTRING((MAX(`nomor_registrasi`)),6,4) INTO @total FROM registrations;
                IF (@total >= 1) THEN
                    SET new.nomor_registrasi = CONCAT('MLC',LPAD(@total+1,4,'0'));
                ELSE
                    SET new.nomor_registrasi = CONCAT('MLC',LPAD(1,4,'0'));
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
        Schema::dropIfExists('registrations');
    }
};
