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
        Schema::create('vehicles_brands_models', function (Blueprint $table) {
            $table->id();
            $table->string('vehicles_brands_model_code', 20)->unique();
            $table->string('vehicles_brand_code', 20);
            $table->string('model');
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
        Schema::dropIfExists('vehicles_brands_models');
    }
};
