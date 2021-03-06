<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConversionLog extends Model
{
   /**
     * Get the employee that owns the Log.
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
