<style>
.topbar {
    background-color: #f7941d;
    font-size: 14px;
}

.topbar-inner {
    gap: 10px;
}

.topbar-right {
    gap: 14px;
}

.navbar-brand img {
    height: 90px;
    width: auto;
}

@media (max-width: 768px) {
    .topbar-inner {
        flex-direction: column;
        text-align: center;
    }

    .topbar-right {
        flex-wrap: wrap;
        justify-content: center;
        gap: 8px;
        font-size: 13px;
    }

    .topbar-separator {
        display: none;
    }

    .navbar-brand img {
        height: 60px;
    }

    .navbar-nav {
        text-align: center;
        padding-top: 15px;
    }

    .nav-link {
        padding: 12px 0 !important;
    }
}
</style>

<div class="topbar text-white">
    <div class="container d-flex justify-content-between align-items-center py-2 topbar-inner">

        <div class="fst-italic">
            The Official Website of the Local Government of Baliangao
        </div>

        <div class="d-flex align-items-center topbar-right">

            <img src="{{ asset('images/ph-flag.png') }}"
                 alt="Philippine Flag"
                 height="18">

            <span class="topbar-separator">|</span>

            <span id="datetime"></span>

            <span class="topbar-separator">|</span>

            <a href="https://www.facebook.com/onesweet.asenso.baliangao/"
               target="_blank"
               class="text-white text-decoration-none">
                <i class="fab fa-facebook-f me-1"></i> Facebook
            </a>

            <a href="{{ url('/contact') }}"
               class="text-white text-decoration-none">
                <i class="fas fa-phone-alt me-1"></i> Contact Us
            </a>

            <a href="https://www.gov.ph/"
               target="_blank"
               class="text-white text-decoration-none fw-bold">
                GOV.PH
            </a>

        </div>

    </div>
</div>

<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container">

        <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/logo2.png') }}" class="me-2" alt="Baliangao Logo">
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#nav"
                aria-controls="nav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">

            <ul class="navbar-nav mx-auto text-uppercase fw-semibold">

                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/know-baliangao') }}">Know Baliangao</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/tourism') }}">Tourism</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/offices') }}">Offices</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/services') }}">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/transparency') }}">Transparency</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/news') }}">News</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/contact') }}">Contact Us</a>
                </li>

            </ul>

        </div>

    </div>
</nav>