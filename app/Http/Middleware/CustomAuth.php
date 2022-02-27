<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  View_exam$,'next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $path = $request->path();
        //dd($path);
        $DifferentPath = array('welcome','employee-manager','add-employee','Create-question','Create_exam','View_exam','Assign_exam','List_Assign_exam','FinalAllEmpRecords');
     

        if($path == 'login' && Session::get('employee_code')  && Session::get('employee_Role') )
        {
             return redirect('welcome');
         }
         else
         {
            if(in_array($path, $DifferentPath) && !Session::get('employee_code')  && !Session::get('employee_Role') )
            {
                return redirect('login');
            }
        }
        
        return $next($request);
    }
}
