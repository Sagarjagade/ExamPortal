<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Emp_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo');
            $table->string('emp_code');
            $table->string('emp_fname');
            $table->string('emp_lname');
            $table->string('emp_email');
             $table->date('date_of_joining');
             $table->string('emp_designation');
             $table->tinyInteger('gender');
             $table->tinyInteger('status');
            $table->string('emp_number1');
            $table->string('emp_number2');
            $table->string('emp_role');
            $table->string('emp_qualification');
            $table->string('shift');
            $table->string('Manager_id');
            $table->date('birth_date');
            $table->string('Annual_leave');
            $table->string('Department');
            $table->string('current_address');
            $table->string('Manager_status');
            $table->date('last_working_day');
            $table->string('Employee_type');
            $table->timestamps();

             // $table->tinyInteger('status');
            
            // $table->date('date_of_birth');
           
            // $table->string('number');
            // $table->string('qualification');
            // $table->string('emergency_number');
            // $table->string('pan_number');
            // $table->string('father_name');
            // $table->string('current_address');
            // $table->string('permanent_address');
            // $table->tinyInteger('formalities');
            // $table->tinyInteger('offer_acceptance');
            // $table->string('probation_period');
            // $table->date('date_of_confirmation');
            // $table->string('department');
            // $table->string('salary');
            // $table->string('account_number');
            // $table->string('bank_name');
            // $table->string('ifsc_code');
            // $table->string('pf_account_number');
            // $table->string('un_number');
            // $table->tinyInteger('pf_status');
            // $table->date('date_of_resignation');
            // $table->string('notice_period');
            // $table->date('last_working_day');
            // $table->tinyInteger('full_final');
            // $table->integer('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Emp_details');
    }
}
