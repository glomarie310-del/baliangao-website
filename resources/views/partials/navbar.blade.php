<style>
.topbar {
    background-color: #f7941d;
    font-size: 14px;
}

.topbar-right {
    gap: 15px;
}

.navbar-brand img {
    height: 90px;
    width: auto;
}

.nav-link {
    font-size: 14px;
    letter-spacing: .5px;
}

@media (max-width: 991px) {

    .topbar .container {
        flex-direction: column;
        text-align: center;
        gap: 8px;
    }

    .topbar-right {
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }

    .navbar-brand img {
        height: 65px;
    }

    .navbar-collapse {
        background: white;
        margin-top: 10px;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,.1);
    }

    .navbar-nav {
        text-align: center;
    }

    .nav-link {
        padding: 12px 0 !important;
        border-bottom: 1px solid #eee;
    }

    .nav-item:last-child .nav-link {
        border-bottom: none;
    }
}
</style>

<!-- TOPBAR -->
<div class="topbar text-white">
    <div class="container d-flex justify-content-between align-items-center py-2">

        <div class="fst-italic">
            The Official Website of the Local Government of Baliangao
        </div>

        <div class="d-flex align-items-center topbar-right">

            <img src="{{ asset('images/ph-flag.png') }}"
                 alt="Philippine Flag"
                 height="18">

            <span>|</span>

            <span id="datetime"></span>

            <span>|</span>

            <a href="https://www.facebook.com/onesweet.asenso.baliangao/"
               target="_blank"
               class="text-white text-decoration-none">
                <i class="fab fa-facebook-f me-1"></i>
                Facebook
            </a>

            <a href="{{ url('/contact') }}"
               class="text-white text-decoration-none">
                <i class="fas fa-phone-alt me-1"></i>
                Contact Us
            </a>

            <a href="https://www.gov.ph/"
               target="_blank"
               class="text-white text-decoration-none fw-bold">
                GOV.PH
            </a>

        </div>

    </div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-light shadow-sm">

    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center"
           href="{{ url('/') }}">

            <img src="{{ asset('images/logo2.png') }}"
                 alt="LGU Baliangao">

        </a>

        <!-- MOBILE TOGGLE -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav mx-auto text-uppercase fw-semibold">

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="{{ url('/know-baliangao') }}">
                        Know Baliangao
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="{{ url('/tourism') }}">
                        Tourism
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="{{ url('/offices') }}">
                        Offices
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="{{ url('/services') }}">
                        Services
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="{{ url('/transparency') }}">
                        Transparency
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="{{ url('/news') }}">
                        News
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="{{ url('/contact') }}">
                        Contact Us
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>