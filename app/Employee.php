<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    /**
     * Get the Conversion logs for the Employee.
     */
    public function conversionLog()
    {
        return $this->hasMany(ConversionLog::class,'employee_id');
    }
	
	 /**
     * Get the Conversion logs for the Employee.
     */
    public function impressionLog()
    {
        return $this->hasMany(ImpressionLog::class,'employee_id');
    }


    public function getAllUsersWithLogs(){
		
		return \DB::table('employees')->select(\DB::raw(
							'employees.name,
							 employees.avatar,
							 employees.occupation, 
							 SUM(cl.revenue) AS totalConversions,
							 GROUP_CONCAT(revenue)  AS revenue,
							 (SELECT COUNT(id) FROM `impression_logs` WHERE employee_id = employees.id ) AS totalImpressions,
							 MIN(cl.time) AS minTime,
							 MAX(cl.time) AS maxTime'
							)
					)
			 ->leftJoin('conversion_logs AS cl','cl.employee_id','=','employees.id')
             ->groupBy('employees.id')
             ->get();
    }
}
