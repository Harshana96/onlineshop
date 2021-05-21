<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeCreateRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employee;


    public function createEmployee(EmployeeCreateRequest $request)
    {
        $employee = employee::EmployeeCreate($request);
        return redirect()->back();
    }
}
