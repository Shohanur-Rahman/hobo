<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedMediumInteger('user_id');
            $table->string('avatar')->nullable();
            $table->string('secondary_email')->nullable();
            $table->string('dob')->nullable();
            $table->string('nid')->nullable();
            $table->string('nid_image')->nullable();
            $table->string('phone')->nullable();
            $table->string('house')->nullable();
            $table->string('road')->nullable();
            $table->string('line1')->nullable();
            $table->string('line2')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->text('describe_address')->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
