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
        $jobs = SavedJob::where("user_id", $user->id)->get();
        return view('job.saved_job', compact('jobs'));
    }
    public function save($job){
        $user = Auth::user();

        SavedJob::create(['user_id' => $user->id, 'job_id' => $job]);
        return redirect()->route('jobs.index');
    }
    public function unsave($job){
        $user = Auth::user();

        SavedJob::where('job_id', $job)->delete();
        return redirect()->route('jobs.index');
    }
}
