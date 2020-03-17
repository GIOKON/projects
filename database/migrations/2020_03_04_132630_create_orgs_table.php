<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('org_name')->unique();
          $table->string('email')->unique();
          $table->string('username')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->string('country');
          $table->string('org_type');
          $table->string('depart')->nullable();
          $table->rememberToken();

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
        Schema::dropIfExists('orgs');
    }
}
