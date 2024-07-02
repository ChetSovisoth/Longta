@extends('layout.layout')
@section('content')
    {{-- <a class="btn btn-danger" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form> --}}
    <div class="d-flex justify-content-center mt-5">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/020/765/399/small_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg" alt="Profile Pic"
             style="width: 100px; height:100px; border-radius: 100px;" />
    </div>
    <div class="d-flex justify-content-center  pt-4">
        <h5>{{ Auth::user()->name }}</h5>
    </div>
    <div class="d-flex justify-content-center ">{{ Auth::user()->email }}</div>

    <hr class="text-gray border-2 w-100 my-4" />

    <div class="d-flex">
        <div class="flex-grow-1">
            <div>
                <h3>Education Information</h3>
                <p class="m-0 mb-2"><strong>University:</strong> {{ $education->university }}</p>
                <p class="m-0 mb-2"><strong>Period:</strong> {{ $education->university_period }}</p>
                <p class="m-0 mb-2"><strong>High School:</strong> {{ $education->highschool }}</p>
                <p class="m-0 mb-2"><strong>Period:</strong> {{ $education->highschool_period }}</p>
            </div>
            <div>
                <h3>Language Information</h3>
                <p class="m-0 mb-2"><strong>Language:</strong> {{ $language->language }}</p>
                <p class="m-0 mb-2"><strong>Proficiency:</strong> {{ $language->proficiency }}/5</p>
            </div>
        </div>
        <div class="flex-grow-1">
            <div>
                <h3>Experience Information</h3>
                <p class="m-0 mb-2"><strong>Title:</strong> {{ $experience->title }}</p>
                <p class="m-0 mb-2"><strong>Description:</strong> {{ $experience->description }}</p>
                <p class="m-0 mb-2"><strong>Period:</strong> {{ $experience->experience_period }}</p>
            </div>
            <div>
                <h3>Contact Information</h3>
                <p class="m-0 mb-2"><strong>Phone:</strong> {{ $contact->phone }}</p>
                <p class="m-0 mb-2"><strong>Address:</strong> {{ $contact->address }}</p>
                <div class="d-flex mb-2">
                    <a href="{{ $contact->github }}" target="_blank">
                        <i class="fa-brands fa-github fa-2x text-center me-4"></i>
                    </a>
                    <a href="{{ $contact->linkedin }}" target="_blank" >
                        <i class="fa-brands fa-linkedin fa-2x text-center me-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
@endsection