@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center mt-5">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/020/765/399/small_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg" alt="Profile Pic"
             style="width: 100px; height:100px; border-radius: 100px;" />
    </div>
    <div class="d-flex justify-content-center  pt-4">
        <h5>{{ $user->name }}</h5>
    </div>
    <div class="d-flex justify-content-center mb-4">{{ $user->email }}</div>
    <div class="d-flex justify-content-center align-items-center flex-grow-1">
        <a class="btn btn-success" href="{{ route('cv.create') }}">
            Create
        </a>
    </div>

    <hr class="text-gray border-2 w-100 my-4" />


    @foreach ($totalCv as $index => $cv)
        <a href="{{ route('cv.show', $cv) }}">CV {{ $index + 1 }}</a>
    @endforeach   
@endsection