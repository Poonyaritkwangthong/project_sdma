<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('center_table', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('general_information_id');
            $table->bigInteger('finding_facts_id');
            $table->bigInteger('social_informations_id');
            $table->bigInteger('problem_id');
            $table->bigInteger('assess_patient_risk_id');
            $table->bigInteger('social_support_id');
            $table->bigInteger('monitor_and_evaluate_id');
            $table->bigInteger('termination_of_service_id');
            $table->bigInteger('family_assessments_id');
            $table->bigInteger('family_tree_and_house_map_id');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('center_table');
    }
};
