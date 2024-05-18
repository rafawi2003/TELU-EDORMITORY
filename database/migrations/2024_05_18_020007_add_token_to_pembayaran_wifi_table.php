<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTokenToPembayaranWifiTable extends Migration
{
    public function up()
    {
        Schema::table('pembayaran_wifi', function (Blueprint $table) {
            $table->string('token')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pembayaran_wifi', function (Blueprint $table) {
            $table->dropColumn('token');
        });
    }
}
