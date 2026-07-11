<header class="main-header">

    <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container">

            <a class="navbar-brand d-flex align-items-center"
               href="{{ route('home') }}">

                <img
                    src="{{ asset('assets/images/logo/jdbs-logo.jpeg') }}"
                    alt="JDBS Institute Logo"
                    class="header-logo"
                >

                <div class="brand-content">
                    <span class="brand-name">JDBS</span>

                    <span class="brand-subtitle">
                        Institute of Professional Studies
                    </span>
                </div>

            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse"
                id="mainNavbar"
            >

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">

                        <a
                            class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}"
                        >
                            Home
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}"
                        >
                            About Us
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            class="nav-link {{ request()->routeIs('mentor') ? 'active' : '' }}"
                            href="{{ route('mentor') }}"
                        >
                            Mentor's Message
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}"
                        >
                            Contact Us
                        </a>

                    </li>

                    <li class="nav-item ms-lg-3">

                        <a
                            href="{{ route('contact') }}"
                            class="btn admission-btn"
                        >
                            Admissions Open
                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

</header>