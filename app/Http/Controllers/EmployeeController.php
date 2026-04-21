<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
        //Display all employee
    public function empindex()
    {

$employees = Employee::all();

return view('employee.empindex', [
    'emps' => $employees
]);

    }

    public function empstore(Request $request)
    {
        Employee::create([
            'first_name' => $request->f_name,
            'last_name' => $request->l_name,
            'job' => $request->j_job,
            'salary' => $request->s_salary
        ]);
        return redirect('/employee');
    }
}
