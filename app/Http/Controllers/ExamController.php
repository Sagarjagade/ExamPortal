<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\AssignEmpToExam;
use DB;
use Redirect;
use Session;

class ExamController extends Controller
{
    public function createexam()
    {
    	$question_list = DB::table('questions')->get();
//dd($question_list);
    	return view('Question.Exam',compact('question_list'));
    }

     public function createStoreExam(Request $request)
    {
    	
//dd($request);
 
	

	$last_id = DB::select('select max(Exam_id)  as last_id from exam');

    	if($last_id[0]->last_id == '')
    	{
    			$data_id = 101;
    	}else
    	{
    			$data_id = $last_id[0]->last_id + 1;
    	}


    	//Question Store
$array_Value = array($request->Question_name);

    	 $Exams = new Exam;
    	  $Exams->Exam_name = $request->Exam_name;
    	 $Exams->Question_name = serialize($array_Value[0]);
    	  $Exams->Exam_id = $data_id;
    	 $Exams->save();

           Session::put('message_Exam','Exam Create  SuccessFully');
    	   return Redirect::back()->withErrors(['msg' => 'The Message']); 

    }


    public function Viewexam()
    {
        $ExamList = DB::table('exam')->get();
    	return view('Question.view',compact('ExamList'));
    }

    public function Viewexamlist(Request $request)
    {


        $list = DB::table('exam')->where('Exam_id',$request->Exam_id)->get();
//dd($list);

        if(!empty($list))
        {
            $data = unserialize($list[0]->Question_name);
            foreach ($data as $key => $value) {
             
                 $list_records[] = DB::table('questions')->where('id',$value)->select('question')->get();
                 $option_list[] = DB::table('quiz_options')->where('qid',$value)->select('options')->get();

                 $data_list_records= json_decode(json_encode($list_records), true);
                 $data_option_list= json_decode(json_encode($option_list), true);
                 
            }

            $getData = $this->my_array_merge($data_list_records, $data_option_list);

            $html ='';
            foreach ($getData as $key => $records) {
                
                        $num = $key+1;
                  $html  .= '<ul>

                                     <li>' .$num.')            '  .$records[0]['question'].'</li><br>
                                     <li>A)           '.$records[1]['options'].'</li>
                                     <li>B)           '.$records[2]['options'].'</li>
                                     <li>C)           '.$records[3]['options'].'</li>
                                     <li>D)           '.$records[4]['options'].'</li>
                                </ul>
                  ';
        
        }
 
            return json_encode(array('msg'=>$html));

        }else
        {
            return json_encode(101);
        }

    }


    function my_array_merge(&$data_list_records, &$data_option_list) {
    $result = Array();
    foreach($data_list_records as $key => &$value) {
        $result[$key] = array_merge($value, $data_option_list[$key]);
    }
    return $result;
}




    // Assign Exam To Employee

    public function AssignExam()
    {
        $getEmpname = DB::table('user')->get();
         $ExamList = DB::table('exam')->get();
        return view('Question.Assign_exam',compact('getEmpname','ExamList'));
    }



    public function AssignStoreExam(Request $request)
    {
       //  dd($request);

         $AlreadyAssignExam = DB::table('assignemptoexam')->where('Emp_id',$request->empname)->count();

            if($AlreadyAssignExam == 1)
            {
                    return Redirect::back()->withErrors(['msg' => 'The Message']);      
            }else
            { 
                 $AssignEmpToExams = new AssignEmpToExam;
                    $AssignEmpToExams->Emp_id = $request->empname;
                   $AssignEmpToExams->ExamAssign = $request->ExamAssign;
                   $AssignEmpToExams->save();

                     Session::put('message_Assign','Assign Exam To Students  SuccessFully');
                      return Redirect::back()->withErrors(['msg' => 'The Message']); 
            }
        

    }


    public function ListAssignExam()
    {
      $emp_Code = Session::get('employee_code');
        $assignemptoexam = DB::table('assignemptoexam')->join('user','user.emp_code','=','assignemptoexam.Emp_id')->join('exam','exam.Exam_id','=','assignemptoexam.ExamAssign')->orderBy('user.emp_code','ASC')->get();

       
        return view('Question.List_assign_exam',compact('assignemptoexam'));
    }


    public function delete_assign_exam($id)
    {
      //dd($id);


      $delete_exam = DB::table('assignemptoexam')->where('Emp_id',$id)->delete();
      $finalResult = DB::table('empfinalresults')->where('emp_code',$id)->delete();

      Session::put('message_delete','Delete Assign Exam To Students  SuccessFully');
                      return Redirect::back()->withErrors(['msg' => 'The Message']); 
    }



}
