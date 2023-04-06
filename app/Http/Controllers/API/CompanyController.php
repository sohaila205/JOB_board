<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'name' => ['required','string'],
            'email' => ['required','string','email','unique:companies'],
            'image'=>['nullable','image','mimes:jpeg,jpg,png,gif'],
            'address' => ['required','string','min:9'],
            'phone'=>['required','min:10','max:12']
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors(), 'code' => 400], 400);
        }

            $company =Company::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'image' =>$request->image,
                'phone'=>$request->phone,
            ]);


        return response()->json([
            'message' => 'Successfully added',
            'company'=>$company,
            'code'=>200
        ], 200);
    }


    public function show(Request $request)
    {
       $company=company::findOrFail($request->id);


        return response()->json([
            'company'=>$company,
            'code'=>200
        ], 200);
    }

}
