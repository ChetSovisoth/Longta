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
        $user = Auth::user();
        
        $totalCv = Experience::where('user_id', $user->id)->get();
        return view("profile.profile", compact("totalCv", "user"));
    }

    public function show($cv) {
        $user = Auth::user();

        $experience = Experience::where('id', $cv)->first();
        $language = Language::where('id', $cv)->first();
        $education = Education::where('id', $cv)->first();
        $contact = Contact::where("id", $cv)->first();

        // dd(Education::where('id', $cv)->get());
        return view("profile.profile_show", compact("experience", "user", 'language', 'education', 'contact', 'cv'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            "phone"=> "required",
            "address"=> "required",
            "github"=> "required|active_url",
            "linkedin"=> "required|active_url",
            "university"=> "required",
            "uni_start_year"=> "required",
            "uni_end_year"=> "required",
            "highschool"=> "required",
            "hs_start_year"=> "required",
            "hs_end_year"=> "required",
            "language"=> "required",
            "proficiency"=> "required",
            "title"=> "required",
            "description"=> "required",
            "experience_start_year"=> "required",
            "experience_end_year"=> "required",
        ]);
        $user_id = Auth::user()->id;

        Experience::create([
            "user_id"=> $user_id,
            'title' => $validated['title'],
            'description' => $validated['description'],
            'experience_period' => $validated['experience_start_year'] . ' - ' .$validated['experience_end_year'],
        ]);

        Language::create([
            "user_id"=> $user_id,
            'language' =>  $validated['language'],
            'proficiency' => $validated['proficiency'],
        ]);

        Contact::create([
            'user_id'=> $user_id,
            'phone'=> $validated['phone'],
            'address'=> $validated['address'],
            'github'=> $validated['github'],
            'linkedin'=> $validated['linkedin'],
        ]);

        Education::create([
            'user_id'=> $user_id,
            'university'=> $validated['university'],
            'university_period'=> $validated['uni_start_year'] . ' - ' .$validated['uni_end_year'],
            'highschool'=> $validated['highschool'],
            'highschool_period'=> $validated['hs_start_year'] . ' - ' .$validated['hs_end_year'],
        ]);

        return redirect()->route('cv')->with('success','CV Saved!');
    }

    public function edit($cv) {
        $user = Auth::user();
        
        $experience = Experience::where("id", $cv)->first();
        $language = Language::where("id", $cv)->first();
        $education = Education::where("id", $cv)->first();
        $contact = Contact::where("id", $cv)->first();

        return view("profile.profile_edit", compact("experience","language","education","contact", "user", "cv"));
    }

    public function update(Request $request, $cv) {
        $validated = $request->validate([
            "phone"=> "required",
            "address"=> "required",
            "github"=> "required|active_url",
            "linkedin"=> "required|active_url",
            "university"=> "required",
            "uni_start_year"=> "required",
            "uni_end_year"=> "required",
            "highschool"=> "required",
            "hs_start_year"=> "required",
            "hs_end_year"=> "required",
            "language"=> "required",
            "proficiency"=> "required",
            "title"=> "required",
            "description"=> "required",
            "experience_start_year"=> "required",
            "experience_end_year"=> "required",
        ]);
        $user = Auth::user();

        Contact::where("user_id", $user->id)->update([
            'phone'=> $validated['phone'],
            'address'=> $validated['address'],
            'github'=> $validated['github'],
            'linkedin'=> $validated['linkedin'],
        ]);

        Education::where("user_id", $user->id)->update([
            'university'=> $validated['university'],
            'university_period'=> $validated['uni_start_year'] . ' - ' .$validated['uni_end_year'],
            'highschool'=> $validated['highschool'],
            'highschool_period'=> $validated['hs_start_year'] . ' - ' .$validated['hs_end_year'],
        ]);

        Language::where('user_id', $user->id)->update([
            'language' =>  $validated['language'],
            'proficiency' => $validated['proficiency'],
        ]);  

        Experience::where('user_id', $user->id)->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'experience_period' => $validated['experience_start_year'] . ' - ' .$validated['experience_end_year'],
        ]);

        return redirect()->back()->with('success', 'Update Completed');
    }
    public function destroy(){
        $user_id = Auth::user()->id;

        Experience::where("user_id", $user_id)->first()->delete();
        Language::where("user_id", $user_id)->first()->delete();
        Education::where("user_id", $user_id)->first()->delete();
        Contact::where("user_id", $user_id)->first()->delete();

        return redirect()->route("cv.create")->with("danger","CV Deleted!");
    }
} 