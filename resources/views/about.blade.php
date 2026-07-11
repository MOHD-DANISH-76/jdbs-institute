@extends('layouts.app')

@section('title', 'About JDBS Institute | Work-Integrated Learning')

@section(
    'meta_description',
    'Learn about JDBS Institute, our work-integrated learning model, paid practical training, mission, vision and commitment to career-focused education.'
)

@section('content')

{{-- Page Hero --}}
<section class="inner-page-hero">
    <div class="container">
        <div class="inner-hero-content">
            <span class="inner-label">Who We Are</span>

            <h1>About JDBS Institute</h1>

            <p>
                Transforming Education Into Real Industry Experience
            </p>

            <div class="hero-breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>About Us</span>
            </div>
        </div>
    </div>
</section>


{{-- About Introduction --}}
<section class="section-padding about-intro-section">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="section-label">
                    The JDBS Advantage
                </span>

                <h2 class="section-heading">
                    Learn While You Earn –
                    <span>The JDBS Institute Advantage</span>
                </h2>

                <p>
                    At JDBS Institute, we believe that true learning happens
                    in the workplace, not just inside a classroom.
                </p>

                <p>
                    Unlike traditional training institutes that focus primarily
                    on classroom lectures, we follow a unique
                    <strong>Work-Integrated Learning Model</strong>, where
                    students gain real industry exposure from the very beginning
                    of their journey.
                </p>

                <p>
                    From the first month of the program, eligible candidates
                    are placed in companies or industries for paid practical
                    training (Paid Internship).
                </p>

                <p>
                    This allows them to develop real-world skills while working
                    in a professional environment and earning a monthly stipend.
                </p>

            </div>


            <div class="col-lg-6">

                <div class="about-highlight-card">

                    <div class="about-highlight-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>

                    <span>Our Philosophy</span>

                    <h2>
                        Learn.<br>
                        Work.<br>
                        <strong>Earn. Grow.</strong>
                    </h2>

                    <p>
                        Education should prepare students for the real
                        professional world through practical experience,
                        industry exposure and continuous career development.
                    </p>

                </div>

            </div>

        </div>


        <div class="about-experience-box">

            <i class="fa-solid fa-quote-left"></i>

            <p>
                Our approach ensures that students don't just learn theory—they
                experience how businesses operate, understand workplace culture,
                solve real challenges, and build practical confidence that
                employers value.
            </p>

        </div>

    </div>
</section>


{{-- Learning Model --}}
<section class="section-padding about-learning-section">
    <div class="container">

        <div class="section-title text-center">

            <span class="section-label">
                Our Unique Learning Model
            </span>

            <h2 class="section-heading">
                Learn. Work. Earn. <span>Grow.</span>
            </h2>

            <p>
                Instead of spending months only in classrooms, our students
                begin gaining practical industry experience early in their course.
            </p>

        </div>


        @php
            $learningPoints = [
                [
                    'icon' => 'fa-building',
                    'title' => 'Real Industry Learning',
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
                    'text' => 'Develop job-ready skills through live work environments.'
                ],
                [
                    'icon' => 'fa-indian-rupee-sign',
                    'title' => 'Monthly Stipend',
                    'text' => 'Earn a monthly stipend during practical training.'
                ],
                [
                    'icon' => 'fa-briefcase',
                    'title' => 'Early Work Experience',
                    'text' => 'Build valuable work experience even before completing the course.'
                ],
                [
                    'icon' => 'fa-chart-line',
                    'title' => 'Career Confidence',
                    'text' => 'Become more confident, skilled and employable.'
                ],
            ];
        @endphp


        <div class="row g-4">

            @foreach($learningPoints as $point)

                <div class="col-md-6 col-lg-4">

                    <div class="about-learning-card">

                        <div class="about-learning-number">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </div>

                        <div class="about-learning-icon">
                            <i class="fa-solid {{ $point['icon'] }}"></i>
                        </div>

                        <h3>{{ $point['title'] }}</h3>

                        <p>{{ $point['text'] }}</p>

                    </div>

                </div>

            @endforeach

        </div>


        <div class="stipend-highlight">

            <div class="stipend-icon">
                <i class="fa-solid fa-wallet"></i>
            </div>

            <div>
                <h3>Making Career-Focused Education More Affordable</h3>

                <p>
                    One of the biggest advantages of our model is that many
                    candidates are able to recover a significant portion—or
                    even the entire cost—of their course through the stipend
                    they receive during their paid internship, making
                    career-focused education more affordable and outcome-driven.
                </p>
            </div>

        </div>

    </div>
</section>


{{-- Why Different --}}
<section class="section-padding different-section">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">

                <span class="section-label gold-section-label">
                    Why JDBS Is Different
                </span>

                <h2>
                    Most Institutes Prepare Students for Jobs.
                </h2>

                <h3>
                    We Prepare Students While They Are Already Working.
                </h3>

                <p>
                    Our industry-integrated training model bridges the gap
                    between education and employment.
                </p>

            </div>


            <div class="col-lg-7">

                @php
                    $differences = [
                        ['icon' => 'fa-book-open', 'title' => 'Practical Learning'],
                        ['icon' => 'fa-money-bill-wave', 'title' => 'Paid Internship Opportunities'],
                        ['icon' => 'fa-industry', 'title' => 'Real Industry Experience'],
                        ['icon' => 'fa-gears', 'title' => 'Skill Development'],
                        ['icon' => 'fa-user-tie', 'title' => 'Professional Grooming'],
                        ['icon' => 'fa-compass', 'title' => 'Career Guidance'],
                        ['icon' => 'fa-comments', 'title' => 'Interview Preparation'],
                        ['icon' => 'fa-handshake', 'title' => 'Placement Assistance'],
                    ];
                @endphp


                <div class="row g-3">

                    @foreach($differences as $difference)

                        <div class="col-md-6">

                            <div class="difference-item">

                                <div class="difference-icon">
                                    <i class="fa-solid {{ $difference['icon'] }}"></i>
                                </div>

                                <span>{{ $difference['title'] }}</span>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>
</section>


{{-- Advantage Statement --}}
<section class="career-advantage-section">
    <div class="container">

        <div class="career-advantage-content">

            <i class="fa-solid fa-award"></i>

            <p>
                This combination enables our students to graduate with both
                knowledge and practical work experience—an advantage that
                significantly strengthens their career prospects.
            </p>

        </div>

    </div>
</section>


{{-- Mission Vision Commitment --}}
<section class="section-padding values-section">
    <div class="container">

        <div class="section-title text-center">

            <span class="section-label">
                Our Purpose
            </span>

            <h2 class="section-heading">
                Building Careers Through
                <span>Practical Education</span>
            </h2>

        </div>


        <div class="row g-4">

            <div class="col-lg-4">

                <div class="value-card">

                    <div class="value-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>

                    <span>01</span>

                    <h3>Our Mission</h3>

                    <p>
                        To bridge the gap between education and employment
                        by providing practical, industry-based learning
                        experiences that help individuals build successful
                        and sustainable careers.
                    </p>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="value-card featured-value-card">

                    <div class="value-icon">
                        <i class="fa-solid fa-eye"></i>
                    </div>

                    <span>02</span>

                    <h3>Our Vision</h3>

                    <p>
                        To become India's most trusted institute for
                        work-integrated education, where every learner gains
                        practical skills, professional experience, and financial
                        support while preparing for a successful career.
                    </p>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="value-card">

                    <div class="value-icon">
                        <i class="fa-solid fa-handshake-angle"></i>
                    </div>

                    <span>03</span>

                    <h3>Our Commitment</h3>

                    <p>
                        At JDBS Institute, we are committed to transforming
                        education into experience and helping candidates graduate
                        with confidence, practical exposure, and a stronger
                        foundation for long-term career success.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>


{{-- Commitment --}}
<section class="section-padding commitment-section">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-7">

                <span class="section-label">
                    Our Commitment
                </span>

                <h2 class="section-heading">
                    Transforming Education
                    <span>Into Experience</span>
                </h2>

                <p>
                    We believe students should not have to wait until after
                    completing a course to enter the professional world.
                </p>

                <p>
                    Instead, they should begin learning, working, and growing
                    from the very start.
                </p>

                <p>
                    By combining practical training with paid industry exposure,
                    we help candidates graduate with confidence, experience,
                    and a stronger foundation for long-term career success.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="commitment-brand-box">

                    <img
                        src="{{ asset('assets/images/logo/jdbs-logo.jpeg') }}"
                        alt="JDBS Institute of Professional Studies Logo"
                    >

                    <h3>JDBS Institute</h3>

                    <p>Learn While You Earn.</p>

                    <strong>
                        Build Skills. Build Your Career.
                    </strong>

                </div>

            </div>

        </div>

    </div>
</section>


{{-- CTA --}}
<section class="career-cta">
    <div class="container">

        <div class="career-cta-content text-center">

            <span>Your Future. Our Commitment.</span>

            <h2>Begin Your Professional Journey</h2>

            <p>
                Gain practical skills, industry exposure and career confidence.
            </p>

            <div class="cta-buttons">

                <a href="{{ route('contact') }}" class="btn gold-btn">
                    Contact Us
                </a>

                <a href="{{ route('mentor') }}" class="btn outline-light-btn">
                    Mentor's Message
                </a>

            </div>

        </div>

    </div>
</section>

@endsection