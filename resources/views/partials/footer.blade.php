<footer class="main-footer">

    <div class="container">

        <div class="row g-5">

            <div class="col-lg-5">

                <div class="footer-brand">

                    <img
                        src="{{ asset('assets/images/logo/jdbs-logo.jpeg') }}"
                        alt="JDBS Institute Logo"
                    >

                    <div>

                        <h3>
                            JDBS Institute
                        </h3>

                        <span>
                            Institute of Professional Studies
                        </span>

                    </div>

                </div>

                <p class="footer-description">
                    Learn While You Earn.
                    Build Skills. Build Your Career.
                </p>

                <div class="admission-status">
                    <i class="fa-solid fa-circle"></i>
                    Admissions Open
                </div>

            </div>


            <div class="col-6 col-lg-3">

                <h4>
                    Quick Links
                </h4>

                <ul class="footer-links">

                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}">About Us</a>
                    </li>

                    <li>
                        <a href="{{ route('mentor') }}">Mentor's Message</a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>

                </ul>

            </div>


            <div class="col-6 col-lg-4">

                <h4>
                    Programs
                </h4>

                <div class="footer-programs">

                    <span>3 Months</span>
                    <span>6 Months</span>
                    <span>9 Months</span>
                    <span>1 Year</span>
                    <span>2 Years</span>
                    <span>3 Years</span>

                </div>

                <p class="footer-terms">
                    *Terms & Conditions Apply.
                </p>

            </div>

        </div>


        <div class="footer-bottom">

            <p>
                © {{ date('Y') }} JDBS Institute of Professional Studies.
                All Rights Reserved.
            </p>

        </div>

    </div>

</footer>