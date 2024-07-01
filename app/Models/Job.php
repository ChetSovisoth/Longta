<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\SavedJob;
class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "company_name",
        "title",
        "description",
        "location",
        "salary",
        "employment_type",
        "experience",
        "contact_email",
        "contact_phone"
    ];
    public function getJobLister($user_id){
        return User::where("id", $user_id)->first()->name;
    }
    public function userSaveJob($job){
        return SavedJob::where('user_id', Auth::user()->id)->where('job_id', $job)->exists();
    }
}
