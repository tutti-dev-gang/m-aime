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
        Schema::create('admin_type_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_type_id');
            $table->foreign('admin_type_id')->references('id')->on('admin_types');
            $table->unsignedBigInteger('permission_type_id');
            $table->foreign('permission_type_id')->references('id')->on('permission_types');
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
        Schema::dropIfExists('admin_type_permissions');
    }
};
