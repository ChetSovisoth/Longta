@extends('layout.layout') {{-- Assuming you have a layout --}}

@section('content')
    <div class="container">
        <h1>Saved Jobs</h1>

        @if ($jobs->isEmpty())
            <p>You haven't saved any jobs yet.</p>
        @else
            @foreach ($jobs as $job)
                <div class="card mb-4">
                    <div class="d-flex">
                        <div class="card-body">
                            <h3 class="card-title">{{ $job->title }}</h3>
                            <p class="text-muted">{{ $job->company_name }}</p>
                            <p class="card-text pe-5">{{ $job->description }}</p>
                            <div class="mt-3">
                                <p class="m-0"><strong>Experience:</strong> {{ $job->experience }}</p>
                                <p class="m-0"><strong>Employment Type:</strong> {{ $job->employment_type }}</p>
                                <p class="m-0"><strong>Address:</strong> {{ $job->location }}</p>
                                <p class="m-0"><strong>Salary:</strong> {{ $job->salary }}</p>
                                <p class="m-0"><strong>Contact:</strong> {{ $job->contact_phone }}, {{ $job->contact_email }}</p>
                                <p class="m-0"><strong>Listed:</strong> {{ $job->created_at->diffForHumans() }} ago by {{ (new App\Models\Job())->getJobLister($job->user_id) }}</p>
                            </div>
                        </div>
                        <div class="ms-3 d-flex flex-column justify-content-between">
                            <form action="{{ route('unsave.job', $job) }}" method="POST">
                                @csrf
                                @method('POST')
                                <button class="btn btn-primary btn-block mt-3 me-5 w-75 d-flex align-items-center justify-content-center" type="submit">
                                    Unsave <i class="fa-solid fa-heart text-danger ms-2"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
