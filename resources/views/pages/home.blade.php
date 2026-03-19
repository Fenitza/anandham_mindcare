@extends('layouts.app')

@section('content')

<section class="hero-split ultra-hero">

<!-- LEFT -->
<div class="hero-panel parallax-container">

    <div class="overlay left-overlay"></div>

    <img class="bg-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmwNCf3YecUCIM4zj17Kuh8YBAqIeID9rXEPqepkx7SlvhSrKSWYcGGIHYjEQB8_W_ChJQ03rYQuuzujHd5CBX0s9VRdZulKyuWsvQ7VDHUzEVjhm1jLrJA3DpH7XE7oYN8pPIQLCuPhgtvKkg7q3iGUiE4VZIGKhubO0WK5LvTzeT4Roc8SJMkYq8M0hM8f7E2h3LvYVKU15ZByIRUwjjH76Juvsn41-S-tr7mh2vEHr0Lq5fEij7ILqv3oPmSxeKr5KvyZ8u-4Ix"/>

    <div class="content parallax-content">

        <h2 class="title">Anandham Mindcare Hospital</h2>

        <p class="subtitle">Advanced Psychiatric & Mental Health Care</p>

        <div class="logo-glass-wrap">
            <div class="logo-glass-ring outer"></div>
            <div class="logo-glass-ring inner"></div>

            <div class="logo-core">
                <img src="{{ asset('assets/logo/hosp_logo.jpeg') }}">
            </div>
        </div>

        <p class="desc">
            Delivering compassionate, evidence-based care with a commitment to patient well-being and recovery.
        </p>

        <div class="btn-group">
            <a href="{{ route('hospital') }}" class="btn-primary magnetic">
                Learn More
            </a>
            <button class="btn-outline magnetic">Contact Us</button>
        </div>

    </div>

    <div class="mini-logo">
        <div class="ripple r1"></div>
        <div class="ripple r2"></div>
        <div class="ripple r3"></div>
        <img src="{{ asset('assets/logo/hosp_logo.jpeg') }}">
    </div>

</div>

<!-- RIGHT -->
<div class="hero-panel parallax-container">

    <div class="overlay right-overlay"></div>

    <img class="bg-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBfi9ada7-8snaSzgUzP9zm-IFaE_bJO-tcVoidEaHR4l-l4fg2CL0PIOnzBq26kmdTrEppEnPcM0IvuOGkx_NV0bkkCWIlMKyqezv39UF4xiQGQyIvCixSRUhnJuA74AQKW8wMUCl7ZUeWZcEs4Kl2u1redI_XPRnhB3I-cMuN7B1k4RlQtztfZIEw3qOCslzRByPS_0k5Ujbyra4URsxacTdWG-ZTZYJidtacr3ZQgJ2DaZRkeEkAQyyfbf7OqO9U18xcZ8V0fCjQ"/>

    <div class="content parallax-content">

        <h2 class="title">Anandham Academy</h2>

        <p class="subtitle">Training Future Mental Health Professionals</p>

        <div class="logo-glass-wrap">
            <div class="logo-glass-ring outer"></div>
            <div class="logo-glass-ring inner"></div>

            <div class="logo-core">
                <img src="{{ asset('assets/logo/academy_logo.jpeg') }}">
            </div>
        </div>

        <p class="desc">
            Empowering students and professionals through high-quality education, research, and clinical training.
        </p>

        <div class="btn-group">
            <button class="btn-secondary magnetic">Explore Courses</button>
            <button class="btn-outline magnetic">Admissions</button>
        </div>

    </div>

    <div class="mini-logo">
        <div class="ripple r1"></div>
        <div class="ripple r2"></div>
        <div class="ripple r3"></div>
        <img src="{{ asset('assets/logo/academy_logo.jpeg') }}">
    </div>

</div>

<div class="cursor-glow"></div>

</section>

@endsection