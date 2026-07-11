@extends('layouts.app')

@section('title', "Mentor's Message | JDBS Institute")

@section(
    'meta_description',
    "Read the Mentor's Message from JDBS Institute about practical learning, real industry experience and building successful professional careers."
)

@section('content')

{{-- Hero --}}
<section class="inner-page-hero mentor-page-hero">

    <div class="container">

        <div class="inner-hero-content">

            <span class="inner-label">
                Leadership & Guidance
            </span>

            <h1>Mentor's Message</h1>

            <p>
                Empowering Careers Through Real Industry Experience
            </p>

            <div class="hero-breadcrumb">

                <a href="{{ route('home') }}">
                    Home
                </a>

                <i class="fa-solid fa-chevron-right"></i>

                <span>Mentor's Message</span>

            </div>

        </div>

    </div>

</section>


{{-- Mentor Message --}}
<section class="section-padding mentor-message-section">

    <div class="container">

        <div class="row g-5 align-items-start">

            {{-- Mentor Image --}}
            <div class="col-lg-5">

                <div class="mentor-image-wrapper">

                    <div class="mentor-image-border">

                        <img
                            src="{{ asset('assets/images/mentor/jdbs-mentor.jpeg') }}"
                            alt="Mentor addressing a professional industry session"
                            class="mentor-image"
                        >

                    </div>

                    <div class="mentor-name-card">

                        <span>Mentor</span>

                        <h2>JDBS Institute</h2>

                        <p>
                            Guiding Learners Towards Professional Excellence
                        </p>

                    </div>

                </div>


                <div class="mentor-philosophy">

                    <i class="fa-solid fa-quote-left"></i>

                    <p>
                        Success is never achieved by chance; it is built through
                        continuous learning, discipline and hard work.
                    </p>

                </div>

            </div>


            {{-- Message --}}
            <div class="col-lg-7">

                <div class="mentor-message-content">

                    <span class="section-label">
                        Empowering Careers
                    </span>

                    <h2>
                        Through Real
                        <span>Industry Experience</span>
                    </h2>

                    <div class="message-greeting">
                        Dear Students,
                    </div>

                    <p>
                        Welcome to <strong>JDBS Institute.</strong>
                    </p>

                    <p>
                        In today's competitive world, earning a qualification
                        alone is no longer enough. Employers are looking for
                        professionals who possess practical skills, workplace
                        experience, confidence, and the ability to perform in
                        real business environments.
                    </p>

                    <p>
                        At JDBS Institute, we have redefined the traditional
                        approach to education by introducing a
                        <strong>Work-Integrated Learning Model</strong> that
                        focuses on practical exposure rather than classroom-only
                        learning.
                    </p>

                    <p>
                        Our goal is to ensure that every student gains valuable
                        industry experience from the very beginning of their
                        journey.
                    </p>


                    <div class="mentor-message-highlight">

                        <div class="message-highlight-icon">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>

                        <p>
                            From the first month of the program, eligible
                            candidates receive the opportunity to work in
                            companies through Paid Practical Training/Internships,
                            allowing them to learn, earn, and grow simultaneously.
                        </p>

                    </div>


                    <p>
                        This approach not only develops technical and professional
                        skills but also helps students understand corporate
                        culture, workplace responsibilities, and industry
                        expectations.
                    </p>

                    <p>
                        Our mission is simple—to bridge the gap between education
                        and employment by preparing students for
                        <strong>real careers, not just examinations.</strong>
                    </p>

                    <p>
                        Every program at JDBS Institute is designed to help
                        students build confidence, strengthen their employability,
                        and become industry-ready professionals.
                    </p>

                    <p>
                        Through practical learning, career guidance, personality
                        development, interview preparation, and placement support,
                        we strive to create opportunities that lead to long-term
                        career success.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- Success Quote --}}
<section class="mentor-quote-section">

    <div class="container">

        <div class="mentor-main-quote">

            <div class="quote-mark">
                “
            </div>

            <blockquote>
                Success is never achieved by chance; it is built through
                continuous learning, discipline, hard work, and the willingness
                to embrace new challenges.
            </blockquote>

            <div class="quote-line"></div>

            <span>Mentor, JDBS Institute</span>

        </div>

    </div>

</section>


{{-- Final Message --}}
<section class="section-padding mentor-final-section">

    <div class="container">

        <div class="mentor-final-content">

            <div class="row align-items-center g-5">

                <div class="col-lg-8">

                    <span class="section-label">
                        A Message To Every Learner
                    </span>

                    <h2>
                        Believe In Your
                        <span>Potential</span>
                    </h2>

                    <p>
                        I encourage every student to make the most of every
                        opportunity, stay committed to personal growth, and
                        believe in their potential.
                    </p>

                    <p>
                        On behalf of the entire JDBS Institute family, I welcome
                        you to begin a journey of learning, practical experience,
                        and professional excellence.
                    </p>

                    <h3>
                        Together, let us build a brighter future.
                    </h3>

                    <div class="mentor-signature">

                        <span>Best Wishes,</span>

                        <strong>Mentor</strong>

                        <p>JDBS Institute</p>

                    </div>

                </div>


                <div class="col-lg-4">

                    <div class="final-logo-card">

                        <img
                            src="{{ asset('assets/images/logo/jdbs-logo.jpeg') }}"
                            alt="JDBS Institute Logo"
                        >

                        <p>
                            Learn Today
                        </p>

                        <i class="fa-solid fa-circle"></i>

                        <p>
                            Intern Today
                        </p>

                        <i class="fa-solid fa-circle"></i>

                        <p>
                            Lead Tomorrow
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="career-cta">

    <div class="container">

        <div class="career-cta-content text-center">

            <span>Learn. Work. Earn. Grow.</span>

            <h2>Ready To Build Your Career?</h2>

            <p>
                Start your journey of practical learning and professional growth.
            </p>

            <div class="cta-buttons">

                <a
                    href="{{ route('contact') }}"
                    class="btn gold-btn"
                >
                    Book Career Counseling
                </a>

                <a
                    href="{{ route('about') }}"
                    class="btn outline-light-btn"
                >
                    Discover JDBS
                </a>

            </div>

        </div>

    </div>

</section>

@endsection