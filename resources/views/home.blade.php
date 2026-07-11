@extends('layouts.app')

@section('title', 'JDBS Institute of Professional Studies | Learn While You Earn')

@section(
    'meta_description',
    'JDBS Institute provides work-integrated learning, paid practical training, industry exposure and career support.'
)

@section('content')

{{-- Hero Banner --}}
<section class="hero-section">

    <div
        id="jdbsHeroSlider"
        class="carousel slide"
        data-bs-ride="carousel"
    >

        <div class="carousel-indicators">

            <button
                type="button"
                data-bs-target="#jdbsHeroSlider"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="JDBS Programs Banner"
            ></button>

            <button
                type="button"
                data-bs-target="#jdbsHeroSlider"
                data-bs-slide-to="1"
                aria-label="JDBS Job Guarantee Banner"
            ></button>

        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">

                <img
                    src="{{ asset('assets/images/banners/jdbs-programs-banner.jpeg') }}"
                    class="d-block w-100 hero-banner"
                    alt="JDBS Institute professional education and training programs"
                >

            </div>

            <div class="carousel-item">

                <img
                    src="{{ asset('assets/images/banners/jdbs-job-guarantee-banner.jpeg') }}"
                    class="d-block w-100 hero-banner"
                    alt="JDBS Institute career training and job guarantee card"
                >

            </div>

        </div>

        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#jdbsHeroSlider"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon"></span>

            <span class="visually-hidden">
                Previous
            </span>
        </button>

        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#jdbsHeroSlider"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon"></span>

            <span class="visually-hidden">
                Next
            </span>
        </button>

    </div>

</section>


{{-- Introduction --}}
<section class="section-padding introduction-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="section-label">
                    Welcome To JDBS
                </span>

                <h1 class="section-heading">
                    Learn While You Earn –
                    <span>The JDBS Institute Advantage</span>
                </h1>

                <p>
                    At JDBS Institute, we believe that true learning
                    happens in the workplace, not just inside a classroom.
                </p>

                <p>
                    Unlike traditional training institutes that focus
                    primarily on classroom lectures, we follow a unique
                    <strong>Work-Integrated Learning Model</strong>,
                    where students gain real industry exposure from the
                    very beginning of their journey.
                </p>

                <p>
                    From the first month of the program, eligible candidates
                    are placed in companies or industries for paid practical
                    training (Paid Internship).
                </p>

                <p>
                    This allows students to develop real-world skills while
                    working in a professional environment and earning a
                    monthly stipend.
                </p>

                <div class="learning-highlight">
                    Learn. Work. Earn. Grow.
                </div>

                <a
                    href="{{ route('about') }}"
                    class="btn primary-btn mt-4"
                >
                    Discover JDBS

                    <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>

            </div>


            <div class="col-lg-6">

                <div class="intro-card">

                    <div class="intro-logo-wrapper">

                        <img
                            src="{{ asset('assets/images/logo/jdbs-logo.jpeg') }}"
                            alt="JDBS Institute of Professional Studies"
                            class="intro-logo"
                        >

                    </div>

                    <h3>
                        Professional Education.
                    </h3>

                    <h3 class="gold-text">
                        Practical Training.
                    </h3>

                    <h3>
                        Career Focused.
                    </h3>

                    <p>
                        Build practical skills, gain industry experience
                        and prepare for professional opportunities.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- Learning Model --}}
<section class="section-padding learning-model-section">

    <div class="container">

        <div class="section-title text-center">

            <span class="section-label">
                Our Learning Model
            </span>

            <h2 class="section-heading">
                Learn. Work. Earn. <span>Grow.</span>
            </h2>

            <p>
                Gain practical industry experience early in your course
                through our work-integrated learning model.
            </p>

        </div>


        @php

            $learningFeatures = [

                [
                    'icon' => 'fa-building',
                    'title' => 'Real Companies',
                    'text' => 'Learn directly in real companies and industries.'
                ],

                [
                    'icon' => 'fa-user-tie',
                    'title' => 'Industry Professionals',
                    'text' => 'Gain hands-on practical experience from industry professionals.'
                ],

                [
                    'icon' => 'fa-laptop-code',
                    'title' => 'Job-Ready Skills',
                    'text' => 'Develop professional skills through live work environments.'
                ],

                [
                    'icon' => 'fa-indian-rupee-sign',
                    'title' => 'Earn a Stipend',
                    'text' => 'Eligible candidates can earn a monthly stipend during practical training.'
                ],

                [
                    'icon' => 'fa-briefcase',
                    'title' => 'Work Experience',
                    'text' => 'Build valuable work experience before completing your course.'
                ],

                [
                    'icon' => 'fa-chart-line',
                    'title' => 'Career Confidence',
                    'text' => 'Become more confident, skilled and employable.'
                ],

            ];

        @endphp


        <div class="row g-4">

            @foreach($learningFeatures as $feature)

                <div class="col-md-6 col-lg-4">

                    <div class="feature-card">

                        <div class="feature-icon">

                            <i class="fa-solid {{ $feature['icon'] }}"></i>

                        </div>

                        <h3>
                            {{ $feature['title'] }}
                        </h3>

                        <p>
                            {{ $feature['text'] }}
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- Why JDBS --}}
<section class="section-padding why-jdbs-section">

    <div class="container">

        <div class="section-title text-center">

            <span class="section-label">
                Why Choose JDBS?
            </span>

            <h2 class="section-heading text-white">
                Most Institutes Prepare Students for Jobs.
            </h2>

            <p class="why-highlight">
                We Prepare Students While They Are Already Working.
            </p>

        </div>


        @php

            $benefits = [
                'Practical Learning',
                'Paid Internship Opportunities',
                'Real Industry Experience',
                'Skill Development',
                'Professional Grooming',
                'Career Guidance',
                'Interview Preparation',
                'Placement Assistance',
            ];

        @endphp


        <div class="row g-3">

            @foreach($benefits as $benefit)

                <div class="col-md-6 col-lg-3">

                    <div class="benefit-card">

                        <i class="fa-solid fa-circle-check"></i>

                        <span>
                            {{ $benefit }}
                        </span>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- Job Guarantee --}}
<section class="section-padding guarantee-section">

    <div class="container">

        <div class="guarantee-wrapper">

            <div class="row align-items-center g-5">

                <div class="col-lg-5">

                    <div class="guarantee-content">

                        <span class="gold-label">
                            Your Career. Our Commitment.
                        </span>

                        <h2>
                            JDBS Job
                            <span>Guarantee Card*</span>
                        </h2>

                        <p>
                            At JDBS Institute, we are committed to helping
                            our students build successful careers.
                        </p>

                        <p>
                            The Job Guarantee Card reflects our confidence
                            in our training methodology, industry partnerships
                            and career support system.
                        </p>

                        <a
                            href="{{ route('contact') }}"
                            class="btn gold-btn"
                        >
                            Book Career Counseling
                        </a>

                    </div>

                </div>


                <div class="col-lg-7">

                    <div class="guarantee-features">

                        @php

                            $guaranteeFeatures = [
                                'Job Guarantee Card for eligible candidates*',
                                'Work-Integrated Learning Model',
                                'Paid Practical Training / Internship from the First Month*',
                                'Real Industry Exposure',
                                'Career Guidance & Professional Mentorship',
                                'Resume Building & Interview Preparation',
                                'Placement Assistance with Hiring Companies',
                            ];

                        @endphp

                        @foreach($guaranteeFeatures as $item)

                            <div class="guarantee-item">

                                <i class="fa-solid fa-shield-halved"></i>

                                <span>
                                    {{ $item }}
                                </span>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>


            <div class="terms-box">

                <strong>
                    *Terms & Conditions Apply
                </strong>

                <p>
                    The Job Guarantee Card is subject to the institute's
                    Job Guarantee Policy. Eligibility depends on successful
                    course completion, minimum attendance requirements,
                    satisfactory performance during training and internship,
                    professional conduct, participation in interviews, and
                    compliance with institute rules and placement guidelines.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- Programs --}}
<section class="section-padding programs-section">

    <div class="container">

        <div class="section-title text-center">

            <span class="section-label">
                Course Duration
            </span>

            <h2 class="section-heading">
                Choose a Program That Matches
                <span>Your Career Goals</span>
            </h2>

        </div>


        @php

            $programs = [

                [
                    'duration' => '3 Months',
                    'title' => 'Fast-Track Skill Development Program'
                ],

                [
                    'duration' => '6 Months',
                    'title' => 'Professional Skill Enhancement Program'
                ],

                [
                    'duration' => '9 Months',
                    'title' => 'Advanced Career Development Program'
                ],

                [
                    'duration' => '1 Year',
                    'title' => 'Comprehensive Industry-Integrated Program'
                ],

                [
                    'duration' => '2 Years',
                    'title' => 'Advanced Professional Certification Program'
                ],

                [
                    'duration' => '3 Years',
                    'title' => 'Complete Career & Industry Excellence Program'
                ],

            ];

        @endphp


        <div class="row g-4">

            @foreach($programs as $program)

                <div class="col-md-6 col-lg-4">

                    <div class="program-card">

                        <div class="program-duration">
                            {{ $program['duration'] }}
                        </div>

                        <h3>
                            {{ $program['title'] }}
                        </h3>

                        <ul>

                            <li>Work-Integrated Learning</li>

                            <li>Paid Practical Training / Internship*</li>

                            <li>Real Industry Exposure</li>

                            <li>Professional Grooming</li>

                            <li>Interview Preparation</li>

                            <li>Placement Assistance</li>

                        </ul>

                        <a
                            href="{{ route('contact') }}"
                            class="program-link"
                        >
                            Enquire Now

                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            @endforeach

        </div>


        <p class="text-center program-terms">
            *Terms & Conditions Apply.
        </p>

    </div>

</section>


{{-- Mission Vision --}}
<section class="section-padding mission-section">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-6">

                <div class="mission-card">

                    <div class="mission-icon">

                        <i class="fa-solid fa-bullseye"></i>

                    </div>

                    <h2>
                        Our Mission
                    </h2>

                    <p>
                        To bridge the gap between education and employment
                        by providing practical, industry-based learning
                        experiences that help individuals build successful
                        and sustainable careers.
                    </p>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="mission-card vision-card">

                    <div class="mission-icon">

                        <i class="fa-solid fa-eye"></i>

                    </div>

                    <h2>
                        Our Vision
                    </h2>

                    <p>
                        To become India's most trusted institute for
                        work-integrated education, where every learner gains
                        practical skills, professional experience, and
                        financial support while preparing for a successful
                        career.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="career-cta">

    <div class="container">

        <div class="career-cta-content text-center">

            <span>
                Your Future. Our Commitment.
            </span>

            <h2>
                Start Your Career Journey With JDBS
            </h2>

            <p>
                Learn While You Earn. Build Skills. Build Your Career.
            </p>

            <div class="cta-buttons">

                <a
                    href="{{ route('contact') }}"
                    class="btn gold-btn"
                >
                    Contact Us
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="btn outline-light-btn"
                >
                    Admissions Open
                </a>

            </div>

        </div>

    </div>

</section>

@endsection