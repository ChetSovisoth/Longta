<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SavedJob extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "job_id",
    ];
    public function userSaveJob($job){
        return SavedJob::where('user_id', Auth::user()->id)->where('job_id', $job)->exists();
    }
}
