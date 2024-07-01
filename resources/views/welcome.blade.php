@extends('layout.layout')

@section('content')
    <div class="text-dark d-flex flex-column align-items-center justify-content-center mt-5 main-container">
        <h1 class="fw-bold">Job Board</h1>
        <p class="lead w-50 text-center">
            Find your dream job with Job Board. We connect job seekers with top companies across various industries. 
            Create your profile, upload your resume, and start applying to the best job opportunities today. 
            Let us help you navigate your career path with ease.
        </p>
        <div class="d-flex align-items-center justify-content-center mt-4">
            @if (Route::has('login'))
                <nav class="flex flex-1 justify-end">
                    @auth
                        <a href="{{ route('jobs.index') }}"
                           class="btn btn-primary btn-lg px-5 py-2 rounded-5 me-3">
                            Get Started
                        </a>   
                    @else
                        <a href="{{ route('login') }}"
                           class="btn btn-primary btn-lg px-5 py-2 rounded-5 ms-3">
                            Log in
                        </a>
                        <a href="{{ route('register') }}"
                           class="btn btn-secondary btn-lg px-5 py-2 rounded-5 ms-3">
                            Sign Up
                        </a>
                    @endauth
                </nav>
            @endif
        </div>
    </div>
    <div class='d-flex align-items-center flex-column my-3 text-dark'>
        <h2 class='text-center mt-0 mb-2' style="width: 500px; margin-top: 3rem;">
            Explore Opportunities, Elevate Your Career.
        </h2>
        <p class="lead text-center w-50 mt-1">
            Our platform provides you with a seamless job search experience. With thousands of job listings across 
            various sectors, we are committed to helping you find the perfect match for your skills and ambitions.
        </p>
    </div>
    <div class='d-flex flex-column flex-md-row justify-content-around align-items-center'>
        <div class='text-dark text-center mb-4 mb-md-0'>
            <h2 class='mb-5' style="max-width: 500px;">
                Connect with Top Employers.
            </h2>
            <p class="lead" style="max-width: 500px;">
                Build a professional profile that stands out. Our platform allows you to showcase your skills and 
                experience to a vast network of top employers. Receive job alerts, apply with a single click, and 
                get noticed by the best in the industry.
            </p>
        </div>
        <div class='text-center'>
            <div class='bg-warning-subtle rounded-5'>
                <img src="https://img.freepik.com/free-vector/happy-woman-chatting-with-friends-online_74855-14073.jpg" alt="Networking" 
                     style="width: 350px; height: 350px; border-radius: 20px; object-fit: cover;" 
                     class='m-4' />
            </div>
        </div>
    </div>
    <div class='d-flex flex-column flex-md-row justify-content-around align-items-center pt-5'>
        <div class='text-center'>
            <div class='bg-success-subtle rounded-5'>
                <img src="https://cdn1.vectorstock.com/i/1000x1000/57/40/career-growth-to-success-vector-29065740.jpg" alt="Career Growth" 
                     style="width: 350px; height: 350px; border-radius: 20px; object-fit: cover;" 
                     class='m-4' />
            </div>
        </div>
        <div class='text-dark text-center mb-4 mb-md-0'>
            <h2 class='mb-5' style="max-width: 500px;">
                Achieve Your Career Goals.
            </h2>
            <p class="lead" style="max-width: 500px;">
                With our extensive resources and tools, you can advance your career with confidence. 
                Access career advice, resume building tips, and interview preparation guides. Let Job Board 
                be your partner in professional success.
            </p>
        </div>
    </div>
    <div class='d-flex flex-column flex-md-row justify-content-around align-items-center pt-5'>
        <div class='text-dark text-center mb-4 mb-md-0'>
            <h2 class='mb-5' style="max-width: 500px;">
                Your Future Starts Here.
            </h2>
            <p class="lead" style="max-width: 500px;">
                Join thousands of job seekers who have successfully found their dream jobs through Job Board. 
                Start your journey today and take the first step towards a fulfilling career.
            </p>
        </div>
        <div class='bg-info-subtle rounded-5'>
            <img src="https://img.freepik.com/free-vector/successful-business-man-holding-trophy_1150-35042.jpg?size=626&ext=jpg&ga=GA1.1.2116175301.1719705600&semt=ais_user" alt="Success" 
                 style="width: 400px; height: 350px; border-radius: 20px; object-fit: cover;" 
                 class='m-4' />
        </div>
    </div>
    <div class='d-flex align-items-center flex-column my-5 text-dark pt-5'>
        <h2 class='text-center m-4' style="width: 600px">
            Sign Up Today and Unlock Your Potential.
        </h2>
        <p class="lead text-center w-50">
            Take the first step towards your dream job with Job Board. Sign up for free, create a professional profile, 
            and start exploring thousands of job opportunities tailored to your skills and aspirations. Your future is waiting.
        </p>
    </div>
    @include('layout.footer')
@endsection
