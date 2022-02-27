<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questions;
use App\Models\quiz_answer;
use App\Models\quiz_options;
use DB;
use Redirect;
use Session;

class questionController extends Controller
{
    //

    public function createquestion()
    {
    	return view('Question.create');
    }

    public function createStoreQuestion(Request $request)
    {
    	
//dd($request);
 	$Records = array($request->Question_answer_1,$request->Question_answer_2,$request->Question_answer_3,$request->Question_answer_4);
	

	$last_id = DB::select('select max(id)  as last_id from questions');

    	if($last_id[0]->last_id == '')
    	{
    			$data_id = 1;
    	}else
    	{
    			$data_id = $last_id[0]->last_id + 1;
    	}


    	//Question Store

    	 $Questions = new questions;
    	 $Questions->question = $request->Question_name;
    	 $Questions->save();



    	 //Question Option Store

			foreach ($Records as $key => $value) {

//echo '<pre>';print_r($value);
//echo '<pre>';print_r($key +1);
				 $quiz_options = new quiz_options;
			    	  $quiz_options->qid = $data_id;
			    	  $quiz_options->options = $value;
			    	  $quiz_options->is_enabled = $key +1;
			    	   $quiz_options->save();
				
			}


    	  //Question answer
    	

    	  $quiz_option = new quiz_answer;
    	  $quiz_option->qid = $data_id;
    	   $quiz_option->option_number = $request->option_answer;
    	   $quiz_option->save();


           Session::put('message_question','Question Create  SuccessFully');

    	   return Redirect::back()->withErrors(['msg' => 'The Message']); 

    }

    
}
