<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        return view('dashboard');
    }


    public function getAllUsers(){

        try{

			
			$employee = new Employee();
           
		   $employees 	= $employee->getAllUsersWithLogs();
            $view 	= view("partials\users\getall",compact('employees'))->render();

             return response()->json(['html' => $view]);
			
		}catch(\Exception $e){
			return response()->json($e->getMessage());
		}        
        
      
    }
}
