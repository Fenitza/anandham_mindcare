@extends('layouts.app')

@section('content')

<section class="hero-split ultra-hero">

<!-- LEFT -->
<div class="hero-panel parallax-container">

    <div class="overlay left-overlay"></div>

    <img class="bg-img" src="{{ asset('assets/bg/slide1.png') }}"/>

    <div class="content parallax-content">

        <h2 class="title">Anandham Mindcare Foundation</h2>

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
            <a href="{{ route('hospital') }}" class="btn-secondary magnetic">
                Learn More
            </a>
            <a href="{{ route('hospital') }}" class="btn-primary magnetic">Contact Us</a>
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

    <img class="bg-img" src="{{ asset('assets/bg/slide2.png') }}"/>

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
            <a href="{{ route('courses') }}" class="btn-secondary magnetic">Explore Courses</a>
            <a href="{{ route('courses') }}" class="btn-primary magnetic">Admissions</a>
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