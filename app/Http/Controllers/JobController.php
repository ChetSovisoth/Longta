<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\SavedJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index() {
        $jobs = Job::all();
        return view('job.job', compact('jobs'));
    }
    public function save($job){
        $user = Auth::user();

        SavedJob::create(['user_id' => $user->id, 'job_id' => $job]);
        return redirect()->route('jobs.index')->with('success','Job Saved!');
    }
    public function unsave($job){
        SavedJob::where('job_id', $job)->delete();
        return redirect()->route('jobs.index')->with('danger','Job Unsaved!');
    }
}
