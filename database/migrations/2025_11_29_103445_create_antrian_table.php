<?php
// database/migrations/xxxx_xx_xx_create_antrian_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntrianTable extends Migration
{
    public function up()
    {
        Schema::create('antrian', function (Blueprint $table) {
            $table->id();
            $table->string('layanan');                 // nama layanan (misal: "Pendaftaran Umum")
            $table->string('prefix', 5)->nullable();   // optional: prefix seperti 'A', 'B' -> untuk custom layanan
            $table->string('nama_lengkap');
            $table->string('nik', 20)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_hp', 20);
            $table->string('nomor_antrian')->unique(); // format 'A-1'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('antrian');
    }
}
