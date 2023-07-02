<?php
namespace App\Services;

use App\Models\job;

class JobService
{
    public function index()
    {
        return job::all();
    }
    
}
