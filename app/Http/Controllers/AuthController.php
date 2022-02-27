<?php

    namespace App\Http\Controllers;

    use App\Models\Event;
    use App\Models\Meeting;
    use App\Models\Role;
    use App\User;
    use App\Models\Users;
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    use Illuminate\Contracts\Mail\Mailer;
    use App\Http\Requests;
    use Illuminate\Support\Facades\Hash;
    use Session;
    use DB;
    use Cookie;
    use DateTime;
    use App\Models\EmpFinalResult;
    use Redirect;

    class AuthController extends Controller
    {
        public function __construct(Mailer $mailer)
        {
            $this->mailer = $mailer;
        }

        public function showLogin()
        {
            return view('hrms.auth.login');
        }



        public function doLogin(Request $request)
        {
             
            $name = ucwords($request->name);
            $password = md5($request->password);
  
             $match_user = Users::where([    
          ['name' ,'=', $name ],
          ['password', '=', $password]
            ])->count();


             //Active and deactive account key
             $ActiveORDeactive = DB::table('user')->where([    
          ['name' ,'=', $name ],
          ['password', '=', $password]
            ])->get()->toArray();

           $user = Users::where('name', $name)->first();
       
//dd($match_user);
if(!empty($ActiveORDeactive))
{

             if ($ActiveORDeactive[0]->remember_token != 'Deactive') {
                
                                        if ($match_user != 0) {
                                            $username = DB::table('user')->where('emp_code',$user->emp_code)->get();
                                             $combine_name = $username[0]->name;
                                           
                                          
                                            Session::put('employee_code',$user->emp_code);
                                            Session::put('employee_name',$combine_name);
                                            Session::put('employee_Role',$username[0]->role);

                                                    

                                     return redirect()->to('welcome')->with('message','Welcome To Dashboard');
                                    
                                        } else {
                                            Session::put('message','Username or password does not match!');
                                           
                                        }
                        }
                        else
                        {
                             
                            Session::put('message','This account is currently not available.');
                        }
                }
                else
                {
                     Session::put('message','Username or password does not match!');
                } 
           return redirect()->to('login');
        }

        public function doLogout()
        {
            \Auth::logout();
             Session::flush();

            return redirect()->to('login');
        }

        // public function dashboard()
        // {
        //     $events   = $this->convertToArray(Event::where('date', '>', Carbon::now())->orderBy('date', 'desc')->take(3)->get());
        //     $meetings = $this->convertToArray(Meeting::where('date', '>', Carbon::now())->orderBy('date', 'desc')->take(3)->get());

        //     return view('hrms.dashboard', compact('events', 'meetings'));
        // }

        public function welcome()
        {   
          //exit;
           // $emp_code = Session::get('employee_code');
           $emp_code =Session::get('employee_code');

           $role = DB::table('user')->where('emp_code',$emp_code)->select('role')->get();

            $examData = DB::table('assignemptoexam')->where('Emp_id',$emp_code)->select('ExamAssign')->get();

            //check emp final list
            $finalresult = DB::table('empfinalresults')->where('emp_code',$emp_code)->count();
//echo '<pre>';print_r($finalresult);exit;
            if($finalresult == 1)
            {

                  
                              $finalresult_emp = DB::table('empfinalresults')->where('emp_code',$emp_code)->get();
                    
                  
                     return view('Question.FinalResult',compact('finalresult_emp'));
            }else
            {

                if(!empty($examData[0]))
                {
                    $examlist = DB::table('exam')->where('Exam_id',$examData[0]->ExamAssign)->get();
                }else
                {
                    $examlist ='';
                }
                   


                          if(!empty($examlist))
                        {
                            $data = unserialize($examlist[0]->Question_name);
                            foreach ($data as $key => $value) {
                             
                                 $list_records[] = DB::table('questions')->where('id',$value)->select('id','question')->get();
                                 $option_list[] = DB::table('quiz_options')->where('qid',$value)->select('is_enabled','options')->get();

                                 $data_list_records= json_decode(json_encode($list_records), true);
                                 $data_option_list= json_decode(json_encode($option_list), true);
                                 
                            }
                            $getData = $this->my_array_merge($data_list_records, $data_option_list);
                           return view('Question.Student_exam',compact('getData'));
                      }else
                      {
                        
                        $getData = "";
                         return view('Question.Student_exam',compact('getData'));
                      }

                       
                         
                           
                          
            }
            
         
        }

         function my_array_merge(&$data_list_records, &$data_option_list) {
    $result = Array();
    foreach($data_list_records as $key => &$value) {
        $result[$key] = array_merge($value, $data_option_list[$key]);
    }
    return $result;
}



    public function storeExamRightAnswer(Request $request)
    {
     
     $Result_request= $request->all();
       

        if(!empty($Result_request))
        {
                 $emp_Code = Session::get('employee_code');

       
                    $oneRecords = array_slice($Result_request, 1);
                    $splitArrayChunk = array_chunk($oneRecords, 2);
                    $Result = [];
                     
                    foreach($splitArrayChunk as $records)
                    {
                         
                            if(count($records) == 2)
                            {
                                
                                  $countRecords = DB::table('quiz_answer')->where('qid',$records[0])->where('option_number',$records[1])->count();
                            array_push($Result,$countRecords);
                            }
                           
                    }

                    $empFinalResult = array_sum($Result);
                    $question_count = count($splitArrayChunk);


                    //Store The Final result on database 

                    $ResultEmp = new EmpFinalResult;
                    $ResultEmp->emp_code = $emp_Code;
                    $ResultEmp->FinalRecords = $empFinalResult;
                    $ResultEmp->QuestionCount = $question_count;
                    $ResultEmp->save();

                    return Redirect::back()->withErrors(['msg' => 'The Message']); 

        }else
        {
            return Redirect::back()->withErrors(['msg' => 'The Message']); 
        }

       
    }


    public function FinalPoints()
    {
          $emp_code =Session::get('employee_code');

           $role = DB::table('user')->where('emp_code',$emp_code)->select('role')->get();

            if($role[0]->role == 'Admin')
                    {
                              $finalresult_emp = DB::table('empfinalresults')->join('user','user.emp_code','=','empfinalresults.emp_code')->get();
                             // echo '<pre>';print_r($finalresult_emp);exit;
                    }
                  
                     return view('Question.finalpoint',compact('finalresult_emp'));
    }

        public function notFound()
        {
            return view('hrms.auth.not_found');
        }

        public function PageNotfound()
        {
            return view('hrms.404Page');
        }


        

    }
