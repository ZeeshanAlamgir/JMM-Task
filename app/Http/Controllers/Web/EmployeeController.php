<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = (new Employee())->all();
        if($employees)
        {
            return response()->json(
                [
                    'status' => true,
                    'message' => "Data Found",
                    'data' => $employees,
                    'status_code' => 200
                ]
            );
        }
        else
        {
            return response()->json(
                [
                    'status' => false,
                    'message'=> "Data Not Found",
                    'data' => [],
                    'status_code' => 401
                ]
            );
        }
    }

    public function show(Request $request, $id)
    {
        $validator = \Validator::make($request->all(),[
            'id'    => 'exists:employees,id'
        ]);
        if($validator->fails())
        {
            return response()->json(
                [
                    'status' => false,
                    'message'=> "Such Employee Does not Exists",
                    'status_code' => 401
                ]
            );
        }
        if(isset($id))
        {
            $employee = (new Employee())->where('id',$id)->first();
            if($employee)
            {
                return response()->json(
                    [
                        'status' => true,
                        'message' => "Data Found",
                        'data' => $employee,
                        'status_code' => 200
                    ]
                );
            }
            else
            {
                return response()->json(
                    [
                        'status' => false,
                        'message'=> "Data Not Found",
                        'status_code' => 401
                    ]
                );
            }
        }
        else
        {
            return "Employee Not Found";
        }
        
    }
}
