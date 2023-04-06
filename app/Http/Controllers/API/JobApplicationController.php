<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\job_application;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [

            'job_id'=>['required'],
            'candidate_id' =>['required']
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors(), 'code' => 400], 400);
        }

            $company =job_application::create([

                'candidate_id'=>$request->candidate_id,
                'job_id'=>$request->job_id,
            ]);


        return response()->json([
            'message' => 'Successfully added',
            'company'=>$company,
            'code'=>200
        ], 200);
    }


    public function show(Request $request)
    {
       $job=job_application::findOrFail($request->id);


        return response()->json([
            'job'=>$job,
            'code'=>200
        ], 200);
    }

}
