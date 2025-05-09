<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //$table->id();
        Schema::table('users', function (Blueprint $table) {
            $table->string('province_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('ward_id')->nullable();
            $table->integer('role_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('province_id');
            $table->dropColumn('district_id');
            $table->dropColumn('ward_id');
            $table->dropColumn('role_id');
        });
    }
};
