<style>
.footer-modern {
    background: #0f2744;
    color: #fff;
}

.footer-modern h5 {
    color: #ffc107;
    font-weight: 700;
    margin-bottom: 20px;
}

.footer-modern a {
    color: #d9d9d9;
    text-decoration: none;
    transition: .3s;
}

.footer-modern a:hover {
    color: #ffc107;
}

.footer-logo {
    max-height: 90px;
}

.footer-divider {
    border-top: 1px solid rgba(255,255,255,.15);
}

.social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255,255,255,.1);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px;
    color: white;
    transition: .3s;
}

.social-icon:hover {
    background: #ffc107;
    color: #000;
}
</style>

<footer class="footer-modern pt-5">

<div class="container">

<div class="row g-5">

    <!-- LGU INFO -->
    <div class="col-lg-4">

        <div class="d-flex align-items-center mb-3">

            <img src="{{ asset('images/logo.png') }}"
                 class="footer-logo me-3"
                 alt="LGU Baliangao">

            <div>
                <h4 class="mb-0 fw-bold">
                    Municipality of Baliangao
                </h4>

                <small>
                    Misamis Occidental, Philippines
                </small>
            </div>

        </div>

        <p>
            The Official Website of the Local Government Unit of Baliangao.
            Providing transparent governance, efficient public services,
            and sustainable community development.
        </p>

        <div class="mt-4">

            <a href="https://www.facebook.com/onesweet.asenso.baliangao/"
               target="_blank"
               class="social-icon">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a href="{{ url('/contact') }}"
               class="social-icon">
                <i class="fas fa-envelope"></i>
            </a>

            <a href="#"
               class="social-icon">
                <i class="fas fa-phone"></i>
            </a>

        </div>

    </div>


    <!-- QUICK LINKS -->
    <div class="col-lg-2 col-md-6">

        <h5>Quick Links</h5>

        <ul class="list-unstyled">

            <li class="mb-2">
                <a href="{{ url('/') }}">Home</a>
            </li>

            <li class="mb-2">
                <a href="{{ url('/discover') }}">Discover Baliangao</a>
            </li>

            <li class="mb-2">
                <a href="{{ url('/tourism') }}">Tourism</a>
            </li>

            <li class="mb-2">
                <a href="{{ url('/news') }}">News & Updates</a>
            </li>

            <li class="mb-2">
                <a href="{{ url('/contact') }}">Contact Us</a>
            </li>

        </ul>

    </div>


    <!-- SERVICES -->
    <div class="col-lg-3 col-md-6">

        <h5>Online Services</h5>

        <ul class="list-unstyled">

            <li class="mb-2">
                <a href="https://elgu-baliangao-misamis-occidental.e.gov.ph"
                   target="_blank">
                    Business Permit
                </a>
            </li>

            <li class="mb-2">
                <a href="https://elgu-baliangao-misamis-occidental.e.gov.ph"
                   target="_blank">
                    Building Permit
                </a>
            </li>

            <li class="mb-2">
                <a href="#">
                    Online Payment
                </a>
            </li>

            <li class="mb-2">
                <a href="https://csc.gov.ph/career/"
                   target="_blank">
                    Career Opportunities
                </a>
            </li>

        </ul>

    </div>


    <!-- CONTACT INFO -->
    <div class="col-lg-3">

        <h5>Contact Information</h5>

        <p class="mb-2">
            <i class="fas fa-map-marker-alt me-2 text-warning"></i>
            Baliangao, Misamis Occidental
        </p>

        <p class="mb-2">
            <i class="fas fa-envelope me-2 text-warning"></i>
            itstaffbaliangao@gmail.com
        </p>

        <p class="mb-2">
            <i class="fas fa-phone me-2 text-warning"></i>
            +63 123 456 7890
        </p>

        <p class="mb-0">
            <i class="fas fa-clock me-2 text-warning"></i>
            Monday - Friday<br>
            8:00 AM - 5:00 PM
        </p>

    </div>

</div>


<!-- BOTTOM COPYRIGHT -->
<div class="footer-divider mt-5 pt-4 pb-4">

<div class="row align-items-center">

    <div class="col-md-6">

        <small>
            © 2026 Municipality of Baliangao. All Rights Reserved.
        </small>

    </div>

    <div class="col-md-6 text-md-end">

        <small>
            Official Government Website
        </small>

    </div>

</div>

</div>

</div>

</footer>