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
        Schema::create('rent_coverage_areas', function (Blueprint $table) {
            $table->id();
            $table->string('rent_coverage_area_code', 20)->unique();
            $table->string('coverage_area');
            $table->text('description');
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
        Schema::dropIfExists('rent_coverage_areas');
    }
};
