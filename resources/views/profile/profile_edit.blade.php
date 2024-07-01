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
                        <h3 class="mt-2">Personal Information</h3>
                        <img class="rounded-circle mt-4 mb-2"
                            width="150px"
                            src="https://static.vecteezy.com/system/resources/thumbnails/020/765/399/small_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg"><span
                            class="font-weight-bold">{{ Auth::user()->name }}</span><span class="text-black-50">{{ Auth::user()->email }}</span><span>
                        </span>
                    </div>
                </div>
                <hr class="text-white border-2 h-100 my-4" />
                <div class="col-md-5 border-right">
                    <div class="p-3">
                        <div class="row mt-2">
                            <h3  class="">Contact Information</h3>
                            <div class="col-md-6">
                                <label class="labels">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone number" value="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                                    class="form-control" placeholder="enter phone number" value=""></div>
                            <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text"
                                    class="form-control" placeholder="enter address line 1" value=""></div>
                            <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text"
                                    class="form-control" placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">Postcode</label><input type="text"
                                    class="form-control" placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control"
                                    placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control"
                                    placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">Email ID</label><input type="text"
                                    class="form-control" placeholder="enter email id" value=""></div>
                            <div class="col-md-12"><label class="labels">Education</label><input type="text"
                                    class="form-control" placeholder="education" value=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input type="text"
                                    class="form-control" placeholder="country" value=""></div>
                            <div class="col-md-6"><label class="labels">State/Region</label><input type="text"
                                    class="form-control" value="" placeholder="state"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save
                                Profile</button></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                                Experience</span><span class="border px-3 p-1 add-experience"><i
                                    class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                        <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text"
                                class="form-control" placeholder="experience" value=""></div> <br>
                        <div class="col-md-12"><label class="labels">Additional Details</label><input type="text"
                                class="form-control" placeholder="additional details" value=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
