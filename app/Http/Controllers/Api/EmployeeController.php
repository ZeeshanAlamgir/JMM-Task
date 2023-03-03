<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $employees = (new Employee())->all();
        $employee_counts = (new Employee())->count();
        $data = 
        [
            'employees'         => $employees,
            'employee_counts'   => $employee_counts
        ];
        if($employees)
        {
            return response()->json(
                [
                    'status' => true,
                    'message' => "Data Found",
                    'data' => $data,
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

    public function search($name)
    {
        $employee = (new Employee())->where('name','like','%'.$name.'%')->get();
        if($employee)
        {
            return response()->json([
                'status'=> true,
                'data'  => $employee,
                'status_code' => 200,
                'message' => "Data Found",
                'employee_count'=>count($employee)
            ]);

        }
        else
        {
            return response()->json(
                [
                    'status' => false,
                    'data'  => '',
                    'message'=> "Data Not Found",
                    'status_code' => 401
                ]
            );
        }
    }
}
