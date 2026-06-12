@extends('layouts.app')

@section('content')

<style>
.page-header {
    background: linear-gradient(135deg, #123c69, #1d5b91);
    color: white;
    padding: 75px 0;
    border-radius: 0 0 35px 35px;
}

.section-title {
    color: #123c69;
    font-weight: 800;
}

.service-card {
    background: white;
    border: none;
    border-radius: 20px;
    padding: 30px;
    text-decoration: none;
    color: #333;
    display: block;
    height: 100%;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    transition: .3s;
}

.service-card:hover {
    transform: translateY(-6px);
    color: #000;
    box-shadow: 0 15px 35px rgba(0,0,0,.15);
}

.service-icon {
    font-size: 42px;
    color: #ffc107;
    margin-bottom: 18px;
}

.sidebar-card {
    background: white;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    margin-bottom: 25px;
}

.news-card {
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    height: 100%;
}

.news-card img {
    height: 190px;
    object-fit: cover;
}

.quick-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #333;
    text-decoration: none;
    padding: 14px 0;
    border-bottom: 1px solid #eee;
}

.quick-link:hover {
    color: #f0ad00;
}

@media(max-width: 768px) {
    .page-header {
        padding: 55px 0;
    }
}
</style>


<!-- PAGE HEADER -->
<section class="page-header mb-5">
    <div class="container">

        <span class="badge bg-warning text-dark mb-3">
            Public Assistance
        </span>

        <h1 class="display-5 fw-bold">
            Government Services
        </h1>

        <p class="lead mb-0" style="max-width: 750px;">
            Access online government services, civil registry assistance, career opportunities,
            and community programs from the Municipality of Baliangao.
        </p>

    </div>
</section>


<!-- MAIN CONTENT -->
<div class="container mb-5">

    <div class="row g-4">

        <!-- LEFT SIDE SERVICES -->
        <div class="col-lg-8">

            <div class="mb-4">
                <span class="text-warning fw-bold">ONLINE ACCESS</span>
                <h2 class="section-title">Available Services</h2>
                <p class="text-muted">
                    Select a service below to access online transactions, public assistance,
                    and government information.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-6">
                    <a href="https://elgu-baliangao-misamis-occidental.e.gov.ph"
                       target="_blank"
                       class="service-card">

                        <i class="fas fa-laptop service-icon"></i>

                        <h4 class="fw-bold">Online Services</h4>

                        <p>
                            Access permits, applications, and government transactions through the official eLGU platform.
                        </p>

                        <span class="fw-bold text-warning">
                            Open Service →
                        </span>

                    </a>
                </div>

                <div class="col-md-6">
                    <a href="https://www.facebook.com/onesweet.asenso.baliangao/"
                       target="_blank"
                       class="service-card">

                        <i class="fas fa-hands-helping service-icon"></i>

                        <h4 class="fw-bold">Social Services</h4>

                        <p>
                            Learn more about assistance programs, community welfare, and social development services.
                        </p>

                        <span class="fw-bold text-warning">
                            View Updates →
                        </span>

                    </a>
                </div>

                <div class="col-md-6">
                    <a href="https://elgu-baliangao-misamis-occidental.e.gov.ph"
                       target="_blank"
                       class="service-card">

                        <i class="fas fa-file-alt service-icon"></i>

                        <h4 class="fw-bold">Civil Registry Services</h4>

                        <p>
                            Access information and requests related to birth, marriage, death certificates, and civil records.
                        </p>

                        <span class="fw-bold text-warning">
                            Request Online →
                        </span>

                    </a>
                </div>

                <div class="col-md-6">
                    <a href="https://csc.gov.ph/career/"
                       target="_blank"
                       class="service-card">

                        <i class="fas fa-briefcase service-icon"></i>

                        <h4 class="fw-bold">Career Opportunities</h4>

                        <p>
                            View government job opportunities, announcements, and public employment vacancies.
                        </p>

                        <span class="fw-bold text-warning">
                            View Careers →
                        </span>

                    </a>
                </div>

            </div>

        </div>


        <!-- RIGHT SIDEBAR -->
        <div class="col-lg-4">

            <div class="sidebar-card">

                <h4 class="fw-bold mb-4">
                    Connect With Us
                </h4>

                <a href="https://www.facebook.com/onesweet.asenso.baliangao/"
                   target="_blank"
                   class="btn btn-primary w-100 mb-3">
                    <i class="fab fa-facebook me-1"></i>
                    Facebook Page
                </a>

                <a href="{{ url('/contact') }}"
                   class="btn btn-outline-secondary w-100 mb-3">
                    Contact Us
                </a>

                <a href="tel:+639000000000"
                   class="btn btn-outline-dark w-100">
                    Emergency Hotline
                </a>

            </div>

            <div class="sidebar-card">

                <h4 class="fw-bold mb-3">
                    Quick Links
                </h4>

                <a href="https://elgu-baliangao-misamis-occidental.e.gov.ph"
                   target="_blank"
                   class="quick-link">
                    eLGU Online Portal
                    <span>›</span>
                </a>

                <a href="https://csc.gov.ph/career/"
                   target="_blank"
                   class="quick-link">
                    CSC Career Portal
                    <span>›</span>
                </a>

                <a href="{{ url('/tourism') }}"
                   class="quick-link">
                    Tourism Destinations
                    <span>›</span>
                </a>

                <a href="{{ url('/discover') }}"
                   class="quick-link">
                    Discover Baliangao
                    <span>›</span>
                </a>

            </div>

        </div>

    </div>

</div>


<!-- NEWS ARTICLES -->
<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">
            <span class="text-warning fw-bold">
                NEWS ARTICLES
            </span>

            <h2 class="section-title">
                Latest Public Updates
            </h2>

            <p class="text-muted">
                Stay informed with the latest announcements and community updates.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6">

                <div class="card news-card">

                    <img src="/images/news1.jpg"
                         class="card-img-top"
                         alt="National Women's Month 2026">

                    <div class="card-body">

                        <span class="badge bg-warning text-dark">
                            Community
                        </span>

                        <h5 class="fw-bold mt-3">
                            National Women's Month 2026
                        </h5>

                        <p class="text-muted">
                            Baliangao joins the nation in celebrating the strength,
                            leadership, and empowerment of women in local governance,
                            families, and communities.
                        </p>

                        <a href="https://www.facebook.com/onesweet.asenso.baliangao/"
                           target="_blank"
                           class="fw-bold text-decoration-none">
                            Read More →
                        </a>

                    </div>

                </div>

            </div>

            <div class="col-md-6">

                <div class="card news-card">

                    <img src="/images/news1.jpg"
                         class="card-img-top"
                         alt="Baliangao Community Update">

                    <div class="card-body">

                        <span class="badge bg-warning text-dark">
                            LGU Update
                        </span>

                        <h5 class="fw-bold mt-3">
                            One Sweet Asenso Baliangao
                        </h5>

                        <p class="text-muted">
                            The Municipality of Baliangao continues to support gender equality,
                            inclusive public service, and community-based development programs.
                        </p>

                        <a href="https://www.facebook.com/onesweet.asenso.baliangao/"
                           target="_blank"
                           class="fw-bold text-decoration-none">
                            Read More →
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection