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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->foreign('country_id') -> constrained() -> cascadeOnDelete();
            $table->foreign('state_id') -> constrained() -> cascadeOnDelete();
            $table->foreign('city_id') -> constrained() -> cascadeOnDelete();
            $table->foreign('department_id') -> constrained() -> cascadeOnDelete();
            $table->string('last_name');
            $table->strom('middle_name');
            $table->string('address');
            $table->char('zip.code');
            $table->date("birth_of_date");
            $table->date('date_hired');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
