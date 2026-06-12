@extends('layouts.app')

@section('content')

<style>
.news-header {
    background: linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)),
                url('/images/news1.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    border-radius: 0 0 35px 35px;
}

.section-title {
    color: #123c69;
    font-weight: 800;
}

.news-category {
    background: #ffc107;
    color: #000;
    font-size: 12px;
    font-weight: 700;
    padding: 6px 14px;
    border-radius: 30px;
    display: inline-block;
}

.featured-news {
    border: none;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,.15);
}

.featured-news img {
    height: 430px;
    object-fit: cover;
}

.news-card {
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    transition: .3s;
    height: 100%;
}

.news-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,.15);
}

.news-card img {
    height: 240px;
    object-fit: cover;
}

.sidebar-card {
    border: none;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
}

.recent-img {
    width: 80px;
    height: 65px;
    object-fit: cover;
}

.stat-box h2 {
    color: #f0ad00;
    font-weight: 800;
}

@media(max-width: 768px) {
    .news-header {
        padding: 70px 0;
    }

    .featured-news img {
        height: 280px;
    }
}
</style>


<!-- PAGE HEADER -->
<section class="news-header mb-5">
    <div class="container">

        <span class="badge bg-warning text-dark mb-3">
            Official News Portal
        </span>

        <h1 class="display-4 fw-bold">
            News & Updates
        </h1>

        <p class="lead" style="max-width: 750px;">
            Latest announcements, activities, public advisories, and updates from the Municipality of Baliangao.
        </p>

    </div>
</section>


<!-- FEATURED NEWS -->
<section class="py-5">
    <div class="container">

        <div class="card featured-news">

            <div class="row g-0">

                <div class="col-lg-6">
                    <img src="/images/news1.jpg"
                         class="w-100 h-100"
                         alt="National Women's Month 2026">
                </div>

                <div class="col-lg-6 p-5 d-flex align-items-center">

                    <div>

                        <span class="news-category">
                            FEATURED
                        </span>

                        <h2 class="fw-bold mt-3 section-title">
                            National Women's Month 2026
                        </h2>

                        <p class="text-muted small">
                            March 5, 2026 | Author: LGU Baliangao
                        </p>

                        <p>
                            Sa pagpanguna sa atong babaye nga Mayor, ang Asenso Baliangao nakig-uban sa tibuok nasud sa pagsaulog sa National Women’s Month 2026. Kini nga okasyon nagapasiugda sa kusog, kahanas, ug liderato sa kababayen-an sa lokal nga panggobyerno, panimalay, ug komunidad.
                        </p>

                        <a href="https://facebook.com/YOURPOSTLINK"
                           target="_blank"
                           class="btn btn-warning rounded-pill px-4">
                            Read Full Post
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- MAIN CONTENT -->
<div class="container my-5">

    <div class="row g-4">

        <!-- MAIN NEWS -->
        <div class="col-lg-8">

            <div class="mb-4">
                <span class="text-warning fw-bold">
                    LATEST STORIES
                </span>

                <h2 class="section-title">
                    Municipal News
                </h2>

                <p class="text-muted">
                    Read the latest community stories, development updates, and public announcements.
                </p>
            </div>

            <div class="row g-4">

                <!-- NEWS CARD 1 -->
                <div class="col-md-6">
                    <div class="card news-card">

                        <img src="/images/news1.jpg"
                             class="card-img-top"
                             alt="National Women's Month 2026">

                        <div class="card-body">

                            <span class="news-category">
                                COMMUNITY
                            </span>

                            <h5 class="fw-bold mt-3">
                                National Women's Month 2026
                            </h5>

                            <p class="text-muted small">
                                March 5, 2026 | Author: LGU Baliangao
                            </p>

                            <p>
                                Baliangao joins the nation in celebrating the strength, leadership, and empowerment of women in local governance and communities.
                            </p>

                            <a href="https://facebook.com/YOURPOSTLINK"
                               target="_blank"
                               class="fw-bold text-decoration-none">
                                Read Full Post →
                            </a>

                        </div>

                    </div>
                </div>


                <!-- NEWS CARD 2 -->
                <div class="col-md-6">
                    <div class="card news-card">

                        <img src="/images/news2.jpg"
                             class="card-img-top"
                             alt="Barangay Sinian Recognized Nationally">

                        <div class="card-body">

                            <span class="news-category">
                                BARANGAY
                            </span>

                            <h5 class="fw-bold mt-3">
                                Barangay Sinian Recognized Nationally
                            </h5>

                            <p class="text-muted small">
                                February 28, 2026 | Author: LGU Baliangao
                            </p>

                            <p>
                                Barangay Sinian has emerged as a national model for Katarungang Pambarangay, attracting barangays for benchmarking.
                            </p>

                            <a href="#"
                               class="fw-bold text-decoration-none">
                                Read More →
                            </a>

                        </div>

                    </div>
                </div>


                <!-- NEWS CARD 3 -->
                <div class="col-md-6">
                    <div class="card news-card">

                        <img src="/images/news3.jpg"
                             class="card-img-top"
                             alt="Mangrove Rehabilitation Program">

                        <div class="card-body">

                            <span class="news-category">
                                ENVIRONMENT
                            </span>

                            <h5 class="fw-bold mt-3">
                                Mangrove Rehabilitation Program
                            </h5>

                            <p class="text-muted small">
                                February 15, 2026 | Author: MENRO Baliangao
                            </p>

                            <p>
                                The municipality continues its mangrove rehabilitation program to strengthen coastal protection and preserve biodiversity.
                            </p>

                            <a href="#"
                               class="fw-bold text-decoration-none">
                                Read More →
                            </a>

                        </div>

                    </div>
                </div>


                <!-- NEWS CARD 4 -->
                <div class="col-md-6">
                    <div class="card news-card">

                        <img src="/images/news4.jpg"
                             class="card-img-top"
                             alt="Community Infrastructure Projects">

                        <div class="card-body">

                            <span class="news-category">
                                DEVELOPMENT
                            </span>

                            <h5 class="fw-bold mt-3">
                                Community Infrastructure Projects
                            </h5>

                            <p class="text-muted small">
                                February 5, 2026 | Author: LGU Baliangao
                            </p>

                            <p>
                                Infrastructure projects across several barangays aim to improve accessibility, safety, and economic opportunities.
                            </p>

                            <a href="#"
                               class="fw-bold text-decoration-none">
                                Read More →
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>


        <!-- SIDEBAR -->
        <div class="col-lg-4">

            <!-- SEARCH -->
            <div class="card sidebar-card mb-4">
                <div class="card-body">

                    <h5 class="fw-bold mb-3">
                        Search News
                    </h5>

                    <input type="text"
                           class="form-control"
                           placeholder="Search articles...">

                </div>
            </div>


            <!-- RECENT POSTS -->
            <div class="card sidebar-card mb-4">
                <div class="card-body">

                    <h5 class="fw-bold mb-3">
                        Recent Posts
                    </h5>

                    <div class="d-flex mb-3">
                        <img src="/images/news1.jpg"
                             class="recent-img rounded me-3"
                             alt="Recent post">

                        <div>
                            <h6 class="mb-1">
                                National Women's Month 2026
                            </h6>

                            <small class="text-muted">
                                March 5, 2026
                            </small>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <img src="/images/news2.jpg"
                             class="recent-img rounded me-3"
                             alt="Recent post">

                        <div>
                            <h6 class="mb-1">
                                Barangay Sinian National Recognition
                            </h6>

                            <small class="text-muted">
                                February 28, 2026
                            </small>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <img src="/images/news3.jpg"
                             class="recent-img rounded me-3"
                             alt="Recent post">

                        <div>
                            <h6 class="mb-1">
                                Mangrove Rehabilitation Program
                            </h6>

                            <small class="text-muted">
                                February 15, 2026
                            </small>
                        </div>
                    </div>

                    <div class="d-flex">
                        <img src="/images/news4.jpg"
                             class="recent-img rounded me-3"
                             alt="Recent post">

                        <div>
                            <h6 class="mb-1">
                                Community Infrastructure Projects
                            </h6>

                            <small class="text-muted">
                                February 5, 2026
                            </small>
                        </div>
                    </div>

                </div>
            </div>


            <!-- ANNOUNCEMENTS -->
            <div class="card sidebar-card">
                <div class="card-body">

                    <h5 class="fw-bold mb-3">
                        Announcements
                    </h5>

                    <p class="small text-muted">
                        Stay updated with official announcements, public advisories, and important notices from the Municipality of Baliangao.
                    </p>

                    <a href="https://www.facebook.com/onesweet.asenso.baliangao/"
                       target="_blank"
                       class="btn btn-warning rounded-pill w-100">
                        Follow Official Page
                    </a>

                </div>
            </div>

        </div>

    </div>

</div>


<!-- QUICK STATS -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="row text-center g-4">

            <div class="col-md-4 stat-box">
                <h2>100+</h2>
                <p>News Articles</p>
            </div>

            <div class="col-md-4 stat-box">
                <h2>15</h2>
                <p>Barangays Covered</p>
            </div>

            <div class="col-md-4 stat-box">
                <h2>24/7</h2>
                <p>Public Information</p>
            </div>

        </div>

    </div>
</section>

@endsection