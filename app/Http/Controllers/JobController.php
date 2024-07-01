<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;


class JobController extends Controller
{
    public function index() {
        $jobs = Job::all();
        return view('job.job', compact('jobs'));
    }
    public function store(Request $request) {

    }
}
