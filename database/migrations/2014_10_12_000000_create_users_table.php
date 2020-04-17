<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;

class CreateUsersTable extends Migration
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
            $table->commonFields();

            $table->string('avatar')->nullable();
            $table->string('name');
            $table->string('seoname');
            $table->string('email')->unique();
            $table->string('firstname')->nullable();
            $table->string('lastname1')->nullable();
            $table->string('lastname2')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->text('description')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('language')->nullable();
            $table->string('social_login')->nullable();
            $table->string('social_id')->nullable();

        });

        $user           = new User();
        $user->name     = 'config';
        $user->email    = 'config';
        $user->password = 'qw5e78jn125f9·$"&%1hdvsasvz,1a3';
        $user->status   = 0;
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
