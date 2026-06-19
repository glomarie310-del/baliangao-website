@extends('layouts.app')

@section('content')

<style>
.page-hero {
    background:
        linear-gradient(rgba(0,0,0,.50), rgba(0,0,0,.50)),
        url('{{ asset("images/background1.jpg") }}');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 130px 0;
}

.hero-badge {
    background: #ffc107;
    color: #000;
    display: inline-block;
    padding: 8px 18px;
    border-radius: 10px;
    font-weight: 700;
    margin-bottom: 20px;
}

.page-hero h1 {
    font-size: 70px;
    font-weight: 800;
}

.section-title {
    color: #123c69;
    font-weight: 800;
}

.content-card,
.stat-card,
.leader-card,
.mv-card,
.news-card {
    border: none;
    border-radius: 22px;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    transition: .3s;
    background: white;
}

.content-card {
    padding: 30px;
    margin-bottom: 25px;
}

.content-card:hover,
.stat-card:hover,
.leader-card:hover,
.mv-card:hover,
.news-card:hover {
    transform: translateY(-6px);
}

.stat-card {
    padding: 28px;
    text-align: center;
}

.stat-number {
    color: #f0ad00;
    font-size: 38px;
    font-weight: 800;
}

.side-img {
    height: 230px;
    width: 100%;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,.15);
}

.barangay-list {
    columns: 2;
    padding-left: 20px;
}

.leader-img {
    height: 350px;
    width: 100%;
    object-fit: cover;
}

.leader-card {
    overflow: hidden;
    border-top: 5px solid #ffc107;
}

.mayor-section {
    background: linear-gradient(135deg, #123c69, #1d5b91);
    color: white;
    border-radius: 28px;
    padding: 50px;
}

.mayor-section .section-title,
.mayor-section .text-muted {
    color: white !important;
}

.badge-custom {
    background: #ffc107;
    color: #000;
    padding: 8px 18px;
    border-radius: 30px;
    font-weight: 700;
    display: inline-block;
    margin-bottom: 15px;
}

.news-card {
    overflow: hidden;
}

.news-card img {
    height: 220px;
    object-fit: cover;
}

.support-card {
    background: linear-gradient(135deg, #123c69, #1d5b91);
    color: white;
    border-radius: 28px;
    padding: 45px;
}

@media(max-width: 768px) {
    .page-hero {
        padding: 85px 0;
    }

    .page-hero h1 {
        font-size: 42px;
    }

    .barangay-list {
        columns: 1;
    }

    .mayor-section,
    .support-card {
        padding: 30px;
    }
}
</style>

<section class="page-hero mb-5">
    <div class="container">
        <span class="hero-badge">Municipal Profile</span>

        <h1>Know Baliangao</h1>

        <p class="lead mt-3" style="max-width: 750px;">
            A peaceful coastal municipality rich in natural beauty, culture, history, and community spirit.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">15</div>
                    <p class="mb-0">Barangays</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">23km</div>
                    <p class="mb-0">From Oroquieta City</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">1957</div>
                    <p class="mb-0">Historical Milestone</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">100%</div>
                    <p class="mb-0">Community Commitment</p>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="container mb-5">
    <div class="row g-4">

        <div class="col-lg-8">

            <div class="content-card">
                <span class="text-warning fw-bold">ABOUT THE MUNICIPALITY</span>
                <h2 class="section-title mt-2">About Baliangao</h2>

                <p>
                    <strong>Baliangao</strong>, officially the <strong>Municipality of Baliangao</strong>, is a coastal municipality in the province of <strong>Misamis Occidental</strong>, located in Region X, Northern Mindanao.
                </p>

                <p>
                    Facing the Mindanao Sea, Baliangao is known for its peaceful communities, rich marine resources, beautiful coastal landscapes, and hardworking residents whose livelihoods include fishing, agriculture, and small businesses.
                </p>
            </div>

            <div class="content-card">
                <h3 class="section-title">Geographical Location</h3>
                <p>
                    Baliangao is located in the northern part of Misamis Occidental. It is bounded by the Mindanao Sea to the north, Sapang Dalaga and Calamba to the south, Plaridel to the east, and Murcielagos Bay to the west.
                </p>
            </div>

            <div class="content-card">
                <h3 class="section-title">Barangays</h3>
                <p>The municipality is politically subdivided into fifteen barangays:</p>

                <ul class="barangay-list">
                    <li>Del Pilar</li>
                    <li>Landing</li>
                    <li>Lumipac</li>
                    <li>Lusot</li>
                    <li>Mabini</li>
                    <li>Magsaysay</li>
                    <li>Misom</li>
                    <li>Mitacas</li>
                    <li>Naburos</li>
                    <li>Northern Poblacion</li>
                    <li>Punta Miray</li>
                    <li>Punta Sulong</li>
                    <li>Sinian</li>
                    <li>Southern Poblacion</li>
                    <li>Tugas</li>
                </ul>
            </div>

            <div class="content-card">
                <h3 class="section-title">History</h3>
                <p>
                    During the Spanish and American colonial periods, Baliangao was part of the larger province of Misamis. When the province was divided in 1929, Baliangao became one of the municipalities of Misamis Occidental.
                </p>

                <p>
                    In 1957, several barrios were separated from Baliangao to form the municipality of Sapang Dalaga. Despite these changes, Baliangao continued to develop as a thriving coastal municipality.
                </p>
            </div>

            <div class="content-card">
                <h3 class="section-title">Environment and Natural Resources</h3>
                <p>
                    One of the municipality’s most valuable environmental areas is the <strong>Baliangao Protected Landscape and Seascape</strong>, which includes mangrove forests, seagrass beds, coral reefs, and wetlands.
                </p>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="d-flex flex-column gap-4 sticky-top" style="top: 100px;">
                <img src="/images/photo1.jpg" class="side-img" alt="Baliangao Coast">
                <img src="/images/photo2.jpg" class="side-img" alt="Mangrove Forest">
                <img src="/images/photo3.png" class="side-img" alt="Community Life">
            </div>
        </div>

    </div>
</div>

<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-warning fw-bold">LOCAL GOVERNMENT</span>
            <h2 class="section-title">Municipal Leadership</h2>
        </div>

        <div class="row g-4 justify-content-center">

            <div class="col-md-5">
                <div class="card leader-card text-center">
                    <img src="/images/photo1.jpg" class="leader-img" alt="Municipal Mayor">
                    <div class="card-body">
                        <h4 class="fw-bold">Hon. Golda Catherine June Y. Resma</h4>
                        <p class="text-muted mb-0">Municipal Mayor</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card leader-card text-center">
                    <img src="/images/photo2.jpg" class="leader-img" alt="Municipal Vice Mayor">
                    <div class="card-body">
                        <h4 class="fw-bold">Hon. Agne V. Yap Sr.</h4>
                        <p class="text-muted mb-0">Municipal Vice Mayor</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="mayor-section">
            <div class="row align-items-center g-4">

                <div class="col-md-4 text-center">
                    <img src="/images/photo1.jpg" class="img-fluid rounded-4 shadow" alt="Mayor">
                </div>

                <div class="col-md-8">
                    <span class="badge-custom">Mayor's Message</span>
                    <h2 class="section-title">A Message from the Municipal Mayor</h2>

                    <p>
                        Warm greetings to all residents, visitors, and partners of the Municipality of Baliangao.
                    </p>

                    <p>
                        It is my privilege to serve the people of Baliangao as your Municipal Mayor. Our municipality continues to move forward through unity, dedication, and strong cooperation among our citizens and public servants.
                    </p>

                    <p>
                        The local government remains committed to delivering efficient public service, promoting sustainable development, and protecting our natural resources for future generations.
                    </p>

                    <p class="fw-bold mt-4 mb-0">
                        Hon. Golda Catherine June Y. Resma<br>
                        <span>Municipal Mayor</span>
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-warning fw-bold">OUR DIRECTION</span>
            <h2 class="section-title">Mission and Vision</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="card mv-card h-100">
                    <div class="card-body text-center p-5">
                        <i class="fas fa-eye fa-3x text-warning mb-3"></i>
                        <h3 class="fw-bold">Vision</h3>
                        <p>
                            A progressive, peaceful, and environmentally sustainable municipality with empowered citizens and responsive governance.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mv-card h-100">
                    <div class="card-body text-center p-5">
                        <i class="fas fa-bullseye fa-3x text-warning mb-3"></i>
                        <h3 class="fw-bold">Mission</h3>
                        <p>
                            To deliver efficient public service, promote inclusive development, protect natural resources, and improve the quality of life of every Baliangaonon.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="support-card">
            <div class="row align-items-center g-4">

                <div class="col-lg-8">
                    <span class="badge bg-warning text-dark mb-3">Explore More</span>

                    <h2 class="fw-bold">
                        Discover the Beauty of Baliangao
                    </h2>

                    <p class="mb-0">
                        Learn more about tourism destinations, municipal services, public updates, and development programs.
                    </p>
                </div>

                <div class="col-lg-4 text-lg-end">
                    <a href="{{ url('/tourism') }}" class="btn btn-warning rounded-pill px-4">
                        Explore Tourism
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection