<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpFinalResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('EmpFinalResults', function (Blueprint $table) {
            $table->increments('id');
            $table->int('emp_code');
            $table->int('FinalRecords');
            $table->int('QuestionCount');
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
        Schema::dropIfExists('EmpFinalResults');
    }
}
