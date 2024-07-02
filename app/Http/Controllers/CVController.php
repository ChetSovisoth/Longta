<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CVController extends Controller
{
    public function index() {
        $user_id = Auth::user()->id;
        
        $experience = Experience::where("user_id", $user_id)->first();
        $language = Language::where("user_id", $user_id)->first();
        $education = Education::where("user_id", $user_id)->first();
        $contact = Contact::where("user_id", $user_id)->first();

        return view("profile.profile", compact("experience","language","education","contact"));

    }
    public function store(Request $request){
        // $validated = $request->validate([
        //     "phone"=> "required",
        //     "address"=> "required",
        //     "github"=> "required|active_url",
        //     "linkedin"=> "required|active_url",
        //     "university"=> "required",
        //     "uni_start_year"=> "required",
        //     "uni_end_year"=> "required",
        //     "highschool"=> "required",
        //     "hs_start_year"=> "required",
        //     "hs_end_year"=> "required",
        //     "language"=> "required|array",
        //     "proficiency"=> "required|array",
        //     "title"=> "required|array",
        //     "description"=> "required|array",
        //     "experience_start_year"=> "required|array",
        //     "experience_end_year"=> "required|array",
        // ]);
        // dd($validated);
        $user_id = Auth::user()->id;

        Experience::create([
            "user_id"=> $user_id,
            'title' => $request->title,
            'description' => $request->description,
            'experience_period' => $request->experience_start_year . ' - ' . $request->experience_end_year,
        ]);

        Language::create([
            "user_id"=> $user_id,
            'language' =>  $request->language,
            'proficiency' => $request->proficiency,
        ]);

        Contact::create([
            'user_id'=> $user_id,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'github'=> $request->github,
            'linkedin'=> $request->linkedin,
        ]);

        Education::create([
            'user_id'=> $user_id,
            'university'=> $request->university,
            'university_period'=> $request->uni_start_year . ' - ' . $request->uni_end_year,
            'highschool'=> $request->highschool,
            'highschool_period'=> $request->hs_start_year . ' - ' . $request->hs_end_year,
        ]);

        return redirect()->back()->with('success','CV Saved!');
    }
}
