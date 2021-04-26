<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('tax_identification_number')->nullable();
            $table->string('nationality');
            $table->string('religion');
            $table->string('place_of_birth');
            $table->text('home_address');
            $table->string('baranggay');
            $table->string('district');
            $table->string('locality');
            $table->integer('zip_code');
            $table->string('mobile_number')->nullable();
            $table->string('telephone_number')->nullable();
            $table->unsignedBigInteger('father_id')->nullable();
            $table->unsignedBigInteger('mother_id')->nullable();
            $table->unsignedBigInteger('spouse_id')->nullable();
            $table->unsignedBigInteger('other_id')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('father_id')
                ->references('id')
                ->on('fathers')
                ->nullOnDelete();

            $table->foreign('mother_id')
                ->references('id')
                ->on('mothers')
                ->nullOnDelete();

            $table->foreign('spouse_id')
                ->references('id')
                ->on('spouses')
                ->nullOnDelete();

            $table->foreign('other_id')
                ->references('id')
                ->on('others')
                ->nullOnDelete();

        });
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
