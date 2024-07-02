<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\SavedJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaveJobController extends Controller
{
    public function index(){
        $user = Auth::user();
        $saved_jobs = SavedJob::where("user_id", $user->id)->get();
        $jobs = Job::whereIn("id", $saved_jobs->pluck('job_id'))->get();
        return view('job.saved_job', compact('jobs'));
    }
    public function unsave($job){
        SavedJob::where('job_id', $job)->delete();
        return redirect()->back()->with('danger','Job Unsaved!');
    }
}
