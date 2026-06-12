<div class="topbar text-white">
    <div class="container d-flex justify-content-between align-items-center py-2">

        <!-- Left Side -->
        <div class="fst-italic">
            The Official Website of the Local Government of Baliangao
        </div>

        <!-- Right Side -->
        <div class="d-flex align-items-center gap-3">

            <img src="{{ asset('images/ph-flag.png') }}"
                alt="Philippine Flag"
                height="18"
                class="me-2">
            <span>|</span>

            <span id="datetime"></span>
            <span>|</span>

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

<!-- Logo -->
<a class="navbar-brand fw-bold d-flex align-items-center" href="/">
<img src="/images/logo2.png" height="90" class="me-2">

</a>

<!-- Mobile Toggle -->
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="nav">

<!-- Center Menu -->
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
</div>
</nav>