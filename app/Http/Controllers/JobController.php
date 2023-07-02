<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Services\JobService;
use Illuminate\Http\Request;

class JobController extends Controller
{

    protected $JobService;

    public function __construct(JobService $JobService)
    {
        $this->JobService = $JobService;
    }
    public function index()
    {
        $jobs = $this->JobService->index();
        return view('index', compact('jobs'));
    }



    public function approvePost($id)
    {
        $job = job::findOrFail($id);
        $job->update([
            'is_approved' => '1',
        ]);
        $job->save();

        return redirect()->route('index', ['id' => $job->store_id]);
    }

    public function deletepost($id)
    {
        $job = job::findOrFail($id);
        $job->delete();
        return redirect()->back();
    }



}
