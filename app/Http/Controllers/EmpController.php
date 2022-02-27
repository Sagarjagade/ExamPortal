<?php
namespace App\Http\Controllers;

use App\Jobs\ExportData;
use App\Models\Employee;
use App\Models\EmployeeUpload;
use App\Models\Role;
use App\Models\UserRole;
use App\Employee_details;
use App\Employee_detail;
use App\Promotion;
use App\Models\Users;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use DateTime;
use DB;
use Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Redirect;
use Session;

class EmpController extends Controller
{
    public function addEmployee()
    {
        
        $status = DB::select('select * from status');
       

        return view('hrms.employee.add', compact('status'));
    }

    public function processEmployee(Request $request)
    {

   //dd($request);
     
   $empid = DB::select('select max(emp_code) as emp_Code from user');
  


   if(!empty($empid))
   {
                $emp_code = $empid[0]->emp_Code + 1;
 
                  $Emp_name = $request->emp_fname.'.'.$request->emp_lname;

         
   //create new User
         $user           = new Users;
         $user->name     = $Emp_name;
         $user->emp_code     = $emp_code;
         $user->role    = $request->Role;
         $user->remember_token    = $request->status;
         $user->password = md5('password');
          $user->save();

        Session::put('message','Create User SuccessFully');
         return Redirect::back()->withErrors(['msg' => 'The Message']); 
   }
       


    }

    public function showEmployee()
    {
        //$emps   = User::with('employee', 'role.role')->paginate(15);

        $emps = DB::select('select * from user');
       // dd($emps);
        $column = '';
        $string = '';
        return view('hrms.employee.show_emp', compact('emps', 'column', 'string'));
    }

}
