<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('no_id');
            $table->string('nama');
            $table->text('alamat')->nullable();
            $table->string('phone', 15)->unique();
            $table->timestamps();
        });

        Schema::create('member_upline', function (Blueprint $table) {
            $table->id();
            $table->string('upline_id')->nullable();
            $table->string('member_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
        Schema::dropIfExists('member_upline');
    }
}
