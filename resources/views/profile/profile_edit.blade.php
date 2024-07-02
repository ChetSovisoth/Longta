@extends('layout.layout')
@section('content')
    <div class="container rounded mt-5 mb-5">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="text-right">CV Settings</h1>
            </div>
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
                <div class="col-md-5 border-right">
                    <div class="p-3">
                        <div class="row mt-2">
                            <h3>Contact Information</h3>
                            <div class="col-md-12 mb-2">
                                <label class="labels">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone number" name="phone">
                            </div>
                            <div class="col-md-12 mb-4">
                                <label class="labels">Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address">
                            </div>
                            <div class="col-md-12 d-flex justify-content-center align-items-center mb-4">
                                <i class="fa-brands fa-github fa-2x text-center me-4"></i>
                                <input type="text" class="form-control" placeholder="Github link" name="github">
                            </div>
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <i class="fa-brands fa-linkedin fa-2x text-center me-4"></i>
                                <input type="text" class="form-control" placeholder="LinkedIn link" name="linkedin">
                            </div>
                        </div>

                        <hr class="text-gray border-2 w-100 my-4" />

                        <div class="row mt-3">
                            <h3>Education Information</h3>
                            <div class="col-md-12 mb-2">
                                <label class="labels">University</label>
                                <input type="text" class="form-control" placeholder="university" name="university">    
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <label for="uni_start_year" class="my-1">Start Year:</label>
                                <select name="uni_start_year" id="uni_start_year" class="w-25">
                                    @for ($year = date('Y'); $year >= 1950; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>

                                {{-- @error('shift_start_time')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror --}}

                                <label for="uni_end_year" class="my-1">End Year:</label>
                                <select name="uni_end_year" id="uni_end_year" class="w-25">
                                    @for ($year = date('Y'); $year >= 1950; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                                {{-- @error('shift_end_time')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>

                            <div class="col-md-12 mb-2">
                                <label class="labels">High School</label>
                                <input type="text" class="form-control" placeholder="highschool" name="highschool">    
                            </div>
                            <div class="d-flex justify-content-between">
                                <label for="hs_start_year" class="my-1">Start Year:</label>
                                <select name="hs_start_year" id="hs_start_year" class="w-25">
                                    @for ($year = date('Y'); $year >= 1950; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>

                                {{-- @error('shift_start_time')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror --}}

                                <label for="hs_end_year" class="my-1">End Year:</label>
                                <select name="hs_end_year" id="hs_end_year" class="w-25">
                                    @for ($year = date('Y'); $year >= 1950; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                                {{-- @error('shift_end_time')
                                    <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>

                        </div>
                        <hr class="text-gray border-2 w-100 my-4" />

                        <div class="container mt-3">
                            <div class="d-flex mb-3">
                                <h2 class="flex-grow-1">Language Section</h2>
                                <a class="text-decoration-none" type="button" id='add-language-btn'>
                                    <div class="d-flex justify-content-between align-items-center experience">
                                        <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Language</span>
                                    </div>
                                </a>
                            </div>
                            <div id="language-section">
                                <div class="form-group d-flex justify-content-center align-items-center">
                                    <label for="language_1" class="d-block my-1 me-3">Language:</label>
                                    <input type="text" name="languages[]" id="language_1" class="d-block w-25 h-25 me-5 align-self-center">
                                    <div class="rating-container d-flex justify-content-center align-items-center">
                                        <label class="my-1 me-3">Proficiency:</label>
                                        <div>
                                            @for ($i = 1; $i <= 5; $i++)
                                                <input type="radio" name="ratings[0]" id="rating_1_{{ $i }}" value="{{ $i }}" class="me-4 align-self-center mb-2 pb-1">
                                            @endfor
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex mb-3">
                            <h2 class="flex-grow-1">Experience Section</h2>
                            <a class="text-decoration-none" type="button" id='add-experience-btn'>
                                <div class="d-flex justify-content-between align-items-center experience">
                                    <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span>
                                </div>
                            </a>
                        </div>
                        <div id="experience-section">
                            <div class="form-group d-flex justify-content-center align-items-center">
                                <label for="language_1" class="my-1 me-3">Experience:</label>
                                <input type="text" name="languages[]" id="language_1" class="d-block w-25 h-25 me-5 align-self-center">
                            </div>                                
                        </div>
                    </div>

                    <hr class="text-gray border-2 w-100 my-4" />

                </div>
            </div>
            <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="button">Save Profile</button>
            </div>
        </div>
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let languageIndex = 1;

        document.getElementById('add-language-btn').addEventListener('click', function () {
            languageIndex++;

            const languageSection = document.getElementById('language-section');
            const newLanguageEntry = document.createElement('div');
            newLanguageEntry.classList.add('form-group', 'd-flex', 'justify-content-center', 'align-items-center');
            newLanguageEntry.innerHTML = `
                <label for="language_${languageIndex}" class="d-block my-1 me-3">Language:</label>
                <input type="text" name="languages[]" id="language_${languageIndex}" class="d-block w-25 h-25 me-5 align-self-center">
                <div class="rating-container d-flex justify-content-center align-items-center">
                    <label class="my-1 me-3">Proficiency:</label>
                    <div>
                        ${Array.from({ length: 5 }, (_, i) => `
                            <input type="radio" name="ratings[${languageIndex - 1}]" id="rating_${languageIndex}_${i + 1}" value="${i + 1}" class="me-4 align-self-center mb-2 pb-1">
                        `).join('')}
                    </div>                                        
                </div>
            `;
            languageSection.appendChild(newLanguageEntry);
        });
    });
</script>
