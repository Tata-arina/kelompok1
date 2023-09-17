<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('namasiswa', 30);
            $table->string('nisn', 15);
            $table->text('tempatlahir');
            $table->date('tanggallahir');
            $table->string('agama', 30);
            $table->string('jeniskelamin', 30);
            $table->string('kewarganegaraan', 20);
            $table->text('alamat');
            $table->string('namaayah', 30);
            $table->string('nikayah', 15);
            $table->string('pendidikanayah', 20);
            $table->string('pekerjaanayah', 20);
            $table->string('agamaayah', 30);
            $table->text('alamatayah');
            $table->string('namaibu', 30);
            $table->string('nikibu', 15);
            $table->string('pendidikanibu', 20);
            $table->string('pekerjaanibu', 20);
            $table->string('agamaibu', 30);
            $table->text('alamatibu');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
