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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('reservation_code', 20)->unique();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->string('agent_vehicle_code', 20);
            $table->string('rent_period_type_code', 20);
            $table->string('rent_coverage_area_code', 20);
            $table->string('rent_type_code', 20);
            $table->string('customer_code', 20);
            $table->timestamp('pick_up_time')->nullable();
            $table->text('pick_up_location');
            $table->text('drop_location');
            $table->string('driver_code', 20);
            $table->string('term_condition_code', 20);
            $table->string('emergency_contact', 20);
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('reservations');
    }
};
