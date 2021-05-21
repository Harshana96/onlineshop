<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_name',
        'employee_email',
        'employee_address',
        'employee_contact_no',
        'employee_nic'
    ];


    public static function EmployeeCreate($request)
    {
        $employee =self::create([
            'employee_name' => $request->employee_name,
            'employee_email' => $request->employee_email,
            'employee_address' => $request->employee_address,
            'employee_contact_no' => $request->employee_contact_no,
            'employee_nic' => $request->employee_nic
        ]);
        return $employee;

    }
}
