<?php

namespace App\Http\Controllers\API;

use App\Models\job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'name' => ['required','string'],
            'description' => ['required','string'],
            'image'=>['nullable','image','mimes:jpeg,jpg,png,gif'],
            'address' => ['required','string','min:9'],
            'salary'=>['required'],
            'is_approved'=>['required'],
            'company_id'=>['required'],
            'employer_id' =>['required']
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors(), 'code' => 400], 400);
        }

            $company =job::create([
                'name' => $request->name,
                'description' => $request->description,
                'address' => $request->address,
                'image' =>$request->image,
                'salary'=>$request->salary,
                'is_approved'=>$request->is_approved,
                'company_id'=>$request->company_id,
                'employer_id'=>$request->employer_id,
            ]);


        return response()->json([
            'message' => 'Successfully added',
            'company'=>$company,
            'code'=>200
        ], 200);
    }


    public function show(Request $request)
    {
       $job=job::findOrFail($request->id);


        return response()->json([
            'job'=>$job,
            'code'=>200
        ], 200);
    }

}
