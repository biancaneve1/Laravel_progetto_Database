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
        Schema::table('sweets', function (Blueprint $table){
            //creo il vincolo
            $table->unsignedBigInteger('user_id')->after('description')->nullable();
            //creo la colonna
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sweets', function (Blueprint $table){
            //scioglie il vincolo della chiave esterna
            $table->dropForeign(['user_id']);
            //elimino la colonna user_id
            $table->dropColumn('user_id');
        });
    }
};
