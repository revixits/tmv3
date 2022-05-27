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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('profile_code', 20)->unique();
            $table->string('id_number', 20)->unique();
            $table->string('salutation', 20)->nullable();
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('phone', 20)->unique();
            $table->text('address');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->text('profile_picture')->nullable();
            $table->text('id_card_image');
            $table->enum('profile_type', ['PERSONAL', 'COMPANY'])->default('PERSONAL');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_archived')->default(false);
            $table->string('created_by', 100)->nullable();
            $table->string('updated_by', 100)->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
