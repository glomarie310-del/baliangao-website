@extends('layouts.app')

@section('content')

<style>
.hero {
    background: #f8fafc;
}

.hero-badge {
    background: #ffc107;
    color: #000;
    padding: 8px 18px;
    border-radius: 30px;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 15px;
}

.hero h1 {
    color: #123c69;
}

.hero-carousel img {
    height: 500px;
    object-fit: cover;
}

.service-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    text-align: center;
    background: #fff;
    border-radius: 20px;
    padding: 30px 20px;
    height: 220px;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    transition: .3s;
    color: #333;
}

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,.15);
    color: #000;
}

.service-icon {
    font-size: 40px;
    color: #f0ad00;
    margin-bottom: 15px;
}

.services-text h2,
.section-title {
    color: #123c69;
    font-weight: 800;
}

.stat-box h2 {
    color: #f0ad00;
    font-weight: 800;
}

.news-card {
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    transition: .3s;
}

.news-card:hover {
    transform: translateY(-6px);
}

.news-card img {
    height: 250px;
    object-fit: cover;
}

@media(max-width: 768px) {
    .hero-carousel img {
        height: 320px;
    }
}
</style>


<!-- HERO -->
<section class="hero py-5">
    <div class="container">

        <div class="row align-items-center g-5">

            <!-- LEFT TEXT -->
            <div class="col-lg-6">

                <span class="hero-badge">
                    Official Website of the Municipality of Baliangao
                </span>

                <h1 class="display-4 fw-bold">
                    Building a Progressive and Sustainable Baliangao
                </h1>

                <p class="lead text-muted mt-3">
                    Discover government services, latest news, tourism destinations, and development programs of the Municipality of Baliangao.
                </p>

                <div class="mt-4">
                    <a href="{{ url('/tourism') }}" class="btn btn-primary rounded-pill px-4">
                        Explore Baliangao
                    </a>

                    <a href="{{ url('/services') }}" class="btn btn-outline-dark rounded-pill px-4">
                        Online Services
                    </a>
                </div>

            </div>

            <!-- RIGHT CAROUSEL -->
            <div class="col-lg-6">

                <div id="heroCarousel" class="carousel slide hero-carousel shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="{{ asset('images/ms1.jpeg') }}" class="d-block w-100" alt="Baliangao photo 1">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/ms4.jpeg') }}" class="d-block w-100" alt="Baliangao photo 2">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/ms2.jpeg') }}" class="d-block w-100" alt="Baliangao photo 3">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/ms3.jpeg') }}" class="d-block w-100" alt="Baliangao photo 4">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/hotline.jpg') }}" class="d-block w-100" alt="Emergency hotline">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- SERVICES -->
<section class="services py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-warning fw-bold">DIGITAL GOVERNMENT</span>
            <h2 class="section-title">Online Services</h2>
            <p class="text-muted">
                Access government services anytime, anywhere.
            </p>
        </div>

        <div class="row align-items-center g-5">

            <!-- LEFT SERVICES -->
            <div class="col-lg-7">

                <div class="row g-4">

                    <div class="col-md-4">
                        <a href="https://elgu-baliangao-misamis-occidental.e.gov.ph" target="_blank" class="service-card">
                            <i class="fas fa-user service-icon"></i>
                            <p>Online Business Permit and Licensing System</p>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="https://elgu-baliangao-misamis-occidental.e.gov.ph" target="_blank" class="service-card">
                            <i class="fas fa-building service-icon"></i>
                            <p>Online Building Permit System</p>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="https://elgu-baliangao-misamis-occidental.e.gov.ph" target="_blank" class="service-card">
                            <i class="fas fa-id-card service-icon"></i>
                            <p>Online Cedula Application</p>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" class="service-card">
                            <i class="fas fa-credit-card service-icon"></i>
                            <p>Online Payment</p>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" class="service-card">
                            <i class="fas fa-hand-holding-heart service-icon"></i>
                            <a href="https://www.facebook.com/onesweet.asenso.baliangao/" target="_blank" class="service-card">
                            <p>Social Services</p>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="https://elgu-baliangao-misamis-occidental.e.gov.ph" target="_blank" class="service-card">
                            <i class="fas fa-folder service-icon"></i>
                            <p>Civil Registry Services</p>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="https://csc.gov.ph/career/" target="_blank" class="service-card">
                            <i class="fas fa-briefcase service-icon"></i>
                            <p>Career Opportunities</p>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" class="service-card">
                            <i class="fas fa-gavel service-icon"></i>
                            <p>Sangguniang Bayan</p>
                        </a>
                    </div>

                </div>

            </div>

            <!-- RIGHT TEXT -->
            <div class="col-lg-5 services-text">

                <h2>SERVICES</h2>

                <p class="text-muted">
                    The Municipality of Baliangao provides a range of services designed to meet the needs of its citizens. From business-related concerns to career opportunities, the Local Government encourages the public to contact the appropriate departments for more information about available services.
                </p>

                <a href="{{ url('/services') }}" class="btn btn-outline-danger rounded-pill px-4">
                    VIEW MORE SERVICES
                </a>

            </div>

        </div>

    </div>
</section>


<!-- STATISTICS -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="row text-center g-4">

            <div class="col-md-3 stat-box">
                <h2>15</h2>
                <p>Barangays</p>
            </div>

            <div class="col-md-3 stat-box">
                <h2>18K+</h2>
                <p>Population</p>
            </div>

            <div class="col-md-3 stat-box">
                <h2>100+</h2>
                <p>Programs</p>
            </div>

            <div class="col-md-3 stat-box">
                <h2>24/7</h2>
                <p>Public Service</p>
            </div>

        </div>

    </div>
</section>


<!-- NEWS -->
<section class="news py-5">
    <div class="container">

        <h2 class="text-center section-title mb-5">
            Latest News & Updates
        </h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card news-card h-100">

                    <img src="/images/ms1.jpeg" class="card-img-top" alt="Miss Universe Philippines 2026">

                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Tourism</span>

                        <h5 class="fw-bold">
                            Miss Universe Philippines 2026 Delegates Explore Baliangao’s Tourism Gems
                        </h5>

                        <p class="text-muted">
                            Baliangao proudly welcomed 50 delegates of the Miss Universe Philippines 2026 pageant as they explored the municipality’s top tourist destinations.
                        </p>

                        <a href="#" class="text-decoration-none fw-bold">
                            Read More →
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card news-card h-100">

                    <img src="/images/1.jpg" class="card-img-top" alt="Barangay Sinian">

                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Community</span>

                        <h5 class="fw-bold">
                            Barangay Sinian Recognized as National Model
                        </h5>

                        <p class="text-muted">
                            Barangay Sinian has emerged as a national model for Katarungang Pambarangay, attracting barangays for learning and benchmarking.
                        </p>

                        <a href="#" class="text-decoration-none fw-bold">
                            Read More →
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card news-card h-100">

                    <img src="/images/1.jpg" class="card-img-top" alt="Baliangao Updates">

                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Development</span>

                        <h5 class="fw-bold">
                            Community Development Programs Continue
                        </h5>

                        <p class="text-muted">
                            The Municipality of Baliangao continues to strengthen programs that support public service, development, and community welfare.
                        </p>

                        <a href="#" class="text-decoration-none fw-bold">
                            Read More →
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection