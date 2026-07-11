@extends('layouts.app')

@section('title', 'Contact JDBS Institute | Career Counseling')

@section(
    'meta_description',
    'Contact JDBS Institute for career counseling, course information, work-integrated learning and professional training programs.'
)

@section('content')

{{-- Page Hero --}}
<section class="inner-page-hero contact-page-hero">

    <div class="container">

        <div class="inner-hero-content">

            <span class="inner-label">
                Career Counseling
            </span>

            <h1>Contact Us</h1>

            <p>
                Let's Build Your Career Together
            </p>

            <div class="hero-breadcrumb">

                <a href="{{ route('home') }}">
                    Home
                </a>

                <i class="fa-solid fa-chevron-right"></i>

                <span>Contact Us</span>

            </div>

        </div>

    </div>

</section>


{{-- Contact Section --}}
<section class="section-padding contact-section">

    <div class="container">

        <div class="row g-5">

            {{-- Left Content --}}
            <div class="col-lg-5">

                <div class="contact-content">

                    <span class="section-label">
                        Start Your Journey
                    </span>

                    <h2 class="section-heading">
                        Let's Build Your
                        <span>Career Together</span>
                    </h2>

                    <p>
                        Have questions about our programs, practical training,
                        paid internship opportunities or career support?
                    </p>

                    <p>
                        Submit your enquiry and our career counseling team will
                        contact you to help you understand the program options.
                    </p>


                    <div class="contact-benefits">

                        <div class="contact-benefit-item">

                            <div class="contact-benefit-icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>

                            <div>
                                <h3>Career Counseling</h3>

                                <p>
                                    Understand the program options based on
                                    your career goals.
                                </p>
                            </div>

                        </div>


                        <div class="contact-benefit-item">

                            <div class="contact-benefit-icon">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>

                            <div>
                                <h3>Practical Learning</h3>

                                <p>
                                    Learn about our work-integrated learning
                                    and practical training model.
                                </p>
                            </div>

                        </div>


                        <div class="contact-benefit-item">

                            <div class="contact-benefit-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>

                            <div>
                                <h3>Career Support</h3>

                                <p>
                                    Discover our professional grooming,
                                    interview preparation and placement support.
                                </p>
                            </div>

                        </div>

                    </div>


                    <div class="contact-brand-message">

                        <img
                            src="{{ asset('assets/images/logo/jdbs-logo.jpeg') }}"
                            alt="JDBS Institute Logo"
                        >

                        <div>
                            <span>Learn While You Earn</span>

                            <strong>
                                Build Skills. Build Your Career.
                            </strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Contact Form --}}
            <div class="col-lg-7">

                <div class="contact-form-card">

                    <div class="contact-form-header">

                        <span>Admissions Open</span>

                        <h2>Book Career Counseling</h2>

                        <p>
                            Fill in the form and our team will contact you.
                        </p>

                    </div>


                    {{-- Success Message --}}
                    @if(session('success'))

                        <div
                            class="alert alert-success contact-success-alert"
                            role="alert"
                        >

                            <i class="fa-solid fa-circle-check"></i>

                            <div>
                                {{ session('success') }}
                            </div>

                        </div>

                    @endif


                    {{-- Validation Errors --}}
                    @if($errors->any())

                        <div
                            class="alert alert-danger contact-error-alert"
                            role="alert"
                        >

                            <div class="error-alert-heading">

                                <i class="fa-solid fa-circle-exclamation"></i>

                                <strong>
                                    Please check the form details.
                                </strong>

                            </div>

                            <ul>

                                @foreach($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <form
                        action="{{ route('contact.store') }}"
                        method="POST"
                        id="contactEnquiryForm"
                    >

                        @csrf


                        <div class="row g-4">

                            {{-- Name --}}
                            <div class="col-md-6">

                                <label
                                    for="name"
                                    class="form-label"
                                >
                                    Full Name
                                    <span>*</span>
                                </label>

                                <div class="contact-input-wrapper">

                                    <i class="fa-solid fa-user"></i>

                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}"
                                        placeholder="Enter your full name"
                                        maxlength="100"
                                        autocomplete="name"
                                        required
                                    >

                                </div>

                                @error('name')

                                    <div class="contact-field-error">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Mobile --}}
                            <div class="col-md-6">

                                <label
                                    for="mobile"
                                    class="form-label"
                                >
                                    Mobile Number
                                    <span>*</span>
                                </label>

                                <div class="contact-input-wrapper">

                                    <i class="fa-solid fa-phone"></i>

                                    <input
                                        type="tel"
                                        name="mobile"
                                        id="mobile"
                                        class="form-control @error('mobile') is-invalid @enderror"
                                        value="{{ old('mobile') }}"
                                        placeholder="Enter mobile number"
                                        minlength="10"
                                        maxlength="15"
                                        inputmode="numeric"
                                        autocomplete="tel"
                                        required
                                    >

                                </div>

                                @error('mobile')

                                    <div class="contact-field-error">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Email --}}
                            <div class="col-md-6">

                                <label
                                    for="email"
                                    class="form-label"
                                >
                                    Email Address
                                </label>

                                <div class="contact-input-wrapper">

                                    <i class="fa-solid fa-envelope"></i>

                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}"
                                        placeholder="Enter email address"
                                        maxlength="255"
                                        autocomplete="email"
                                    >

                                </div>

                                @error('email')

                                    <div class="contact-field-error">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Course --}}
                            <div class="col-md-6">

                                <label
                                    for="course_duration"
                                    class="form-label"
                                >
                                    Course Duration
                                </label>

                                <div class="contact-input-wrapper">

                                    <i class="fa-solid fa-graduation-cap"></i>

                                    <select
                                        name="course_duration"
                                        id="course_duration"
                                        class="form-select @error('course_duration') is-invalid @enderror"
                                    >

                                        <option value="">
                                            Select course duration
                                        </option>

                                        @foreach([
                                            '3 Months',
                                            '6 Months',
                                            '9 Months',
                                            '1 Year',
                                            '2 Years',
                                            '3 Years'
                                        ] as $duration)

                                            <option
                                                value="{{ $duration }}"
                                                @selected(old('course_duration') === $duration)
                                            >
                                                {{ $duration }}
                                            </option>

                                        @endforeach

                                    </select>

                                </div>

                                @error('course_duration')

                                    <div class="contact-field-error">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Message --}}
                            <div class="col-12">

                                <label
                                    for="message"
                                    class="form-label"
                                >
                                    Message
                                </label>

                                <div class="contact-input-wrapper textarea-wrapper">

                                    <i class="fa-solid fa-message"></i>

                                    <textarea
                                        name="message"
                                        id="message"
                                        class="form-control @error('message') is-invalid @enderror"
                                        rows="5"
                                        maxlength="2000"
                                        placeholder="Tell us how we can help you"
                                    >{{ old('message') }}</textarea>

                                </div>

                                <div class="message-counter">
                                    <span id="messageCharacterCount">0</span>
                                    / 2000
                                </div>

                                @error('message')

                                    <div class="contact-field-error">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Submit --}}
                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="btn contact-submit-btn"
                                    id="contactSubmitButton"
                                >

                                    <span class="submit-button-text">

                                        Submit Enquiry

                                        <i class="fa-solid fa-arrow-right"></i>

                                    </span>

                                    <span
                                        class="submit-button-loading d-none"
                                    >

                                        <span
                                            class="spinner-border spinner-border-sm"
                                            aria-hidden="true"
                                        ></span>

                                        Submitting...

                                    </span>

                                </button>


                                <p class="contact-form-note">

                                    <i class="fa-solid fa-shield-halved"></i>

                                    Your information will only be used to
                                    respond to your career enquiry.

                                </p>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- Career Steps --}}
<section class="section-padding contact-steps-section">

    <div class="container">

        <div class="section-title text-center">

            <span class="section-label">
                Start Your Journey
            </span>

            <h2 class="section-heading">
                Your Career Journey
                <span>Starts Here</span>
            </h2>

        </div>


        <div class="row g-4">

            @php
                $steps = [
                    [
                        'number' => '01',
                        'icon' => 'fa-file-pen',
                        'title' => 'Submit Enquiry',
                        'text' => 'Share your basic details and preferred program duration.'
                    ],
                    [
                        'number' => '02',
                        'icon' => 'fa-comments',
                        'title' => 'Career Counseling',
                        'text' => 'Our team helps you understand the learning and career model.'
                    ],
                    [
                        'number' => '03',
                        'icon' => 'fa-graduation-cap',
                        'title' => 'Choose Your Program',
                        'text' => 'Select a program aligned with your career goals.'
                    ],
                    [
                        'number' => '04',
                        'icon' => 'fa-rocket',
                        'title' => 'Start Your Journey',
                        'text' => 'Begin practical learning and professional development.'
                    ],
                ];
            @endphp


            @foreach($steps as $step)

                <div class="col-md-6 col-lg-3">

                    <div class="contact-step-card">

                        <div class="contact-step-number">
                            {{ $step['number'] }}
                        </div>

                        <div class="contact-step-icon">
                            <i class="fa-solid {{ $step['icon'] }}"></i>
                        </div>

                        <h3>
                            {{ $step['title'] }}
                        </h3>

                        <p>
                            {{ $step['text'] }}
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="career-cta">

    <div class="container">

        <div class="career-cta-content text-center">

            <span>
                Learn. Work. Earn. Grow.
            </span>

            <h2>
                Build Skills. Build Your Career.
            </h2>

            <p>
                Take the first step towards practical learning and
                professional growth.
            </p>

        </div>

    </div>

</section>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('contactEnquiryForm');

    const submitButton =
        document.getElementById('contactSubmitButton');

    const buttonText =
        submitButton?.querySelector('.submit-button-text');

    const buttonLoading =
        submitButton?.querySelector('.submit-button-loading');

    const mobileInput =
        document.getElementById('mobile');

    const messageInput =
        document.getElementById('message');

    const characterCount =
        document.getElementById('messageCharacterCount');


    /*
    |--------------------------------------------------------------------------
    | Mobile Number
    |--------------------------------------------------------------------------
    */

    if (mobileInput) {

        mobileInput.addEventListener('input', function () {

            this.value = this.value
                .replace(/\D/g, '')
                .slice(0, 15);

        });

    }


    /*
    |--------------------------------------------------------------------------
    | Message Counter
    |--------------------------------------------------------------------------
    */

    function updateCharacterCount() {

        if (!messageInput || !characterCount) {
            return;
        }

        characterCount.textContent =
            messageInput.value.length;

    }


    if (messageInput) {

        updateCharacterCount();

        messageInput.addEventListener(
            'input',
            updateCharacterCount
        );

    }


    /*
    |--------------------------------------------------------------------------
    | Prevent Double Submit
    |--------------------------------------------------------------------------
    */

    if (form && submitButton) {

        form.addEventListener('submit', function () {

            if (submitButton.disabled) {
                return;
            }

            submitButton.disabled = true;

            buttonText?.classList.add('d-none');

            buttonLoading?.classList.remove('d-none');

        });

    }

});
</script>

@endpush