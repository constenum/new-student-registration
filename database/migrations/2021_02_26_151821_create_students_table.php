<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedMediumInteger('student_number')->unique();
            $table->string('first_name', 40);
            $table->string('preferred_name', 40)->nullable();
            $table->string('middle_name', 40)->nullable();
            $table->string('last_name', 40);
            $table->date('dob');
            $table->string('street', 10);
            $table->string('unit_number', 10)->nullable();
            $table->string('city');
            $table->char('state', 2);
            $table->string('zip', 10);
            $table->string('mailing_street', 10);
            $table->string('mailing_unit_number', 10);
            $table->string('mailing_city', 40);
            $table->char('mailing_state', 2);
            $table->string('mailing_zip', 10);
            $table->char('cell_phone', 10)->nullable();
            $table->string('does_live_with_biological_parent');
            $table->string('parent_status', 40);
            $table->string('primary_household_street', 10);
            $table->string('primary_household_unit_number', 10)->nullable();
            $table->string('primary_household_city', 10);
            $table->char('primary_household_state', 2);
            $table->string('primary_household_zip', 10);
            $table->char('primary_household_phone', 10)->nullable();
            $table->string('contact_1_title', 10);
            $table->string('contact_1_first_name', 40);
            $table->string('contact_1_last_name', 40);
            $table->string('contact_1_relation', 40);
            $table->string('contact_1_email', 10);
            $table->char('contact_1_cell', 10);
            $table->char('contact_1_work_phone', 10)->nullable();
            $table->string('contact_2_title', 10)->nullable();
            $table->string('contact_2_first_name', 40)->nullable();
            $table->string('contact_2_last_name', 40)->nullable();
            $table->string('contact_2_relation', 40)->nullable();
            $table->string('contact_2_email', 10)->nullable();
            $table->char('contact_2_cell', 10)->nullable();
            $table->char('contact_2_work_phone', 10)->nullable();
            $table->string('secondary_household_street', 10)->nullable();
            $table->string('secondary_household_unit_number', 10)->nullable();
            $table->string('secondary_household_city', 10)->nullable();
            $table->char('secondary_household_state', 2)->nullable();
            $table->string('secondary_household_zip', 10)->nullable();
            $table->char('secondary_household_phone', 10)->nullable();
            $table->string('contact_3_title', 10)->nullable();
            $table->string('contact_3_first_name', 40)->nullable();
            $table->string('contact_3_last_name', 40)->nullable();
            $table->string('contact_3_relation', 40)->nullable();
            $table->string('contact_3_email', 10)->nullable();
            $table->char('contact_3_cell', 10)->nullable();
            $table->char('contact_3_work_phone', 10)->nullable();
            $table->string('contact_4_title', 10)->nullable();
            $table->string('contact_4_first_name', 40)->nullable();
            $table->string('contact_4_last_name', 40)->nullable();
            $table->string('contact_4_relation', 40)->nullable();
            $table->string('contact_4_email', 10)->nullable();
            $table->char('contact_4_cell', 10)->nullable();
            $table->char('contact_4_work_phone', 10)->nullable();
            $table->boolean('photo_publication');
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
        Schema::dropIfExists('students');
    }
}
