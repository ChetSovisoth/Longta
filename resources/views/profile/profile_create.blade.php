@extends('layout.layout')
@section('content')
    <div class="container rounded mt-5 mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="text-right">CV Settings</h1>
        </div>
        <form class="row" action="{{ route('cv.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="d-flex">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3">
                        <img class="rounded-circle mt-4 mb-2" width="150px"
                            src="https://static.vecteezy.com/system/resources/thumbnails/020/765/399/small_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg"><span
                            class="font-weight-bold">{{ Auth::user()->name }}</span><span
                            class="text-black-50">{{ Auth::user()->email }}</span><span>
                        </span>
                    </div>
                </div>
                <hr class="text-white border-2 h-100 my-4" />
                <div class="col-md-5 border-right mx-3">
                    <div class="p-3">
                        <div class="row mt-2">
                            <h3>Contact Section</h3>
                            <div class="col-md-12 mb-2">
                                <label class="labels">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone number" name="phone">
                                @error('phone')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-4">
                                <label class="labels">Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address">
                                @error('address')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 d-flex justify-content-center align-items-center mb-4">
                                <i class="fa-brands fa-github fa-2x text-center me-4"></i>
                                <input type="text" class="form-control" placeholder="Github link" name="github">
                            </div>
                            @error('github')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <i class="fa-brands fa-linkedin fa-2x text-center me-4"></i>
                                <input type="text" class="form-control" placeholder="LinkedIn link" name="linkedin">
                            </div>
                            @error('linkedin')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <hr class="text-gray border-2 w-100 my-4" />

                        <div class="row mt-3">
                            <h3>Education Section</h3>
                            <div class="col-md-12 mb-2">
                                <label class="labels">University</label>
                                <input type="text" class="form-control" placeholder="university" name="university">   
                                @error('university')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror 
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <label for="uni_start_year" class="my-1">Start Year:</label>
                                <select name="uni_start_year" id="uni_start_year" class="w-25">
                                    @for ($year = date('Y'); $year >= 1950; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                                @error('uni_start_year')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror

                                <label for="uni_end_year" class="my-1">End Year:</label>
                                <select name="uni_end_year" id="uni_end_year" class="w-25">
                                    @for ($year = date('Y'); $year >= 1950; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                                @error('uni_end_year')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-2">
                                <label class="labels">High School</label>
                                <input type="text" class="form-control" placeholder="highschool" name="highschool">
                                @error('highschool')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-between">
                                <label for="hs_start_year" class="my-1">Start Year:</label>
                                <select name="hs_start_year" id="hs_start_year" class="w-25">
                                    @for ($year = date('Y'); $year >= 1950; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                                @error('hs_start_year')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror

                                <label for="hs_end_year" class="my-1">End Year:</label>
                                <select name="hs_end_year" id="hs_end_year" class="w-25">
                                    @for ($year = date('Y'); $year >= 1950; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                                @error('hs_end_year')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ms-2">
                    <div class="p-3">
                        <div class="d-flex mb-3">
                            <h2 class="flex-grow-1">Experience Section</h2>
                        </div>
                        <div id="experience-section">
                            <div class="form-group d-flex justify-content-center align-items-center flex-column" id="experience-section">
                                <div class="col-md-12 mb-2">
                                    <label class="labels">Title</label>
                                    <input type="text" class="form-control" placeholder="Job Experience Title" name="title">
                                    @error('title')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="labels">Description</label>
                                    <input type="text" class="form-control" placeholder="Job Experience Description" name="description">
                                    @error('description')
                                        <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-100">
                                    <label for="experience_start_year" class="my-1">Start Year:</label>
                                    <select name="experience_start_year" id="experience_start_year" class="w-25 me-3">
                                        @for ($year = date('Y'); $year >= 1950; $year--)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                    </select>
                                    @error('experience_start_year')
                                        <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                    @enderror
                                    <label for="experience_end_year" class="my-1 align-self-end">End Year:</label>
                                    <select name="experience_end_year" id="experience_end_year" class="w-25 align-self-end">
                                        @for ($year = date('Y'); $year >= 1950; $year--)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                    </select>
                                    @error('experience_end_year')
                                        <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>                          
                        </div>

                        <hr class="text-gray border-2 w-100 my-4" />

                        <div class="container mt-3">
                            <div class="d-flex mb-3">
                                <h2 class="flex-grow-1">Language Section</h2>
                            </div>
                            <div id="language-section">
                                <div class="form-group d-flex justify-content-center align-items-center">
                                    <label for="language" class="d-block my-1 me-3">Language:</label>
                                    <input type="text" name="language" id="language" class="d-block w-25 h-25 align-self-center">
                                    <div class="rating-container d-flex justify-content-center align-items-center">
                                        <label class="my-1 mx-3">Proficiency:</label>
                                        <div>
                                            @for ($i = 1; $i <= 5; $i++)
                                                <input type="radio" name="proficiency" id="proficiency" value="{{ $i }}" class="me-3 align-self-center mb-2 pb-1">
                                            @endfor
                                        </div>                                        
                                    </div>
                                </div>    
                                <div class="d-flex">
                                    @error('language')
                                        <span class="d-block fs-6 text-danger me-3">{{ $message }}</span>
                                    @enderror 
                                    @error('proficiency')
                                        <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                    @enderror   
                                </div>                            
                            </div>
                        </div>
                    </div>

                    <hr class="text-gray border-2 w-100 my-4" />

                </div>
            </div>
            <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
            </div>
        </form>
    </div>
@endsection