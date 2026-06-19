@extends('layouts.app')

@section('content')

<style>
    .page-hero {
        background: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)), url('/images/background1.jpg');
        background-size: cover;
        background-position: center;
        padding: 90px 0;
        color: white;
        border-radius: 0 0 40px 40px;
    }

    .section-title {
        font-weight: 800;
        color: #123c69;
        margin-bottom: 25px;
    }

    .content-card {
        background: #fff;
        border-radius: 18px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,.08);
        margin-bottom: 25px;
    }

    .side-img {
        height: 220px;
        width: 100%;
        object-fit: cover;
        border-radius: 18px;
        box-shadow: 0 10px 25px rgba(0,0,0,.15);
    }

    .barangay-list {
        columns: 2;
        padding-left: 20px;
    }

    .leader-card,
    .news-card,
    .mv-card {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,.08);
        transition: .3s;
    }

    .leader-card:hover,
    .news-card:hover,
    .mv-card:hover {
        transform: translateY(-5px);
    }

    .leader-img {
        height: 320px;
        width: 100%;
        object-fit: cover;
    }

    .news-card img {
        height: 210px;
        object-fit: cover;
    }

    .mayor-section {
        background: #f8fafc;
        border-radius: 30px;
        padding: 50px;
    }

    .badge-custom {
        background: #ffb703;
        color: #000;
        padding: 8px 18px;
        border-radius: 30px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 15px;
    }

    @media(max-width: 768px) {
        .barangay-list {
            columns: 1;
        }

        .mayor-section {
            padding: 25px;
        }
    }
</style>


<!-- HERO -->
<section class="page-hero mb-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Discover Baliangao</h1>
        <p class="lead mt-3">
            A peaceful coastal municipality rich in natural beauty, culture, and community spirit.
        </p>
    </div>
</section>


<!-- ABOUT -->
<div class="container mb-5">
    <div class="row g-4">

        <div class="col-lg-8">

            <div class="content-card">
                <h2 class="section-title">About Baliangao</h2>

                <p>
                    <strong>Baliangao</strong>, officially the <strong>Municipality of Baliangao</strong>, is a coastal municipality in the province of <strong>Misamis Occidental</strong>, located in Region X, Northern Mindanao. Facing the Mindanao Sea, the municipality is known for its peaceful communities, rich marine resources, and beautiful coastal landscapes.
                </p>

                <p>
                    Baliangao is home to hardworking residents whose primary livelihoods include fishing, agriculture, and small businesses. The municipality continues to grow through sustainable development, environmental protection, and community cooperation.
                </p>
            </div>

            <div class="content-card">
                <h3 class="section-title">Geographical Location</h3>
                <p>
                    Baliangao is located in the northern part of Misamis Occidental. It is bounded by the Mindanao Sea to the north, Sapang Dalaga and Calamba to the south, Plaridel to the east, and Murcielagos Bay to the west. The municipality is approximately 23 kilometers from the provincial capital, Oroquieta City.
                </p>
            </div>

            <div class="content-card">
                <h3 class="section-title">Barangays</h3>
                <p>The municipality is politically subdivided into fifteen (15) barangays:</p>

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
                    One of the municipality’s most valuable environmental areas is the <strong>Baliangao Protected Landscape and Seascape</strong>, which includes mangrove forests, seagrass beds, coral reefs, and wetlands. This protected area plays a vital role in biodiversity conservation, coastal protection, and marine sustainability.
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


<!-- MUNICIPAL LEADERSHIP -->
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="text-center section-title">Municipal Leadership</h2>

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


<!-- MAYOR MESSAGE -->
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

                    <p class="fw-bold mt-4">
                        Hon. Golda Catherine June Y. Resma<br>
                        <span class="text-muted">Municipal Mayor</span>
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- MISSION AND VISION -->
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="text-center section-title">Mission and Vision</h2>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="card mv-card h-100">
                    <div class="card-body text-center p-5">
                        <h3 class="fw-bold text-primary">Vision</h3>
                        <p>
                            A progressive, peaceful, and environmentally sustainable municipality with empowered citizens and responsive governance.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mv-card h-100">
                    <div class="card-body text-center p-5">
                        <h3 class="fw-bold text-success">Mission</h3>
                        <p>
                            To deliver efficient public service, promote inclusive development, protect natural resources, and improve the quality of life of every Baliangaonon.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- NEWS -->
<section class="py-5">
    <div class="container">

        <h2 class="text-center section-title">Latest News</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card news-card h-100">
                    <img src="/images/photo3.png" class="card-img-top" alt="News">
                    <div class="card-body">
                        <h5 class="fw-bold">Barangay Sinian Recognized Nationally</h5>
                        <p>
                            Barangay Sinian has become a national model for Katarungang Pambarangay, attracting visitors from other municipalities.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card news-card h-100">
                    <img src="/images/photo3.png" class="card-img-top" alt="News">
                    <div class="card-body">
                        <h5 class="fw-bold">Environmental Protection Programs</h5>
                        <p>
                            The municipality strengthens mangrove rehabilitation and coastal protection initiatives to preserve marine biodiversity.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card news-card h-100">
                    <img src="/images/photo3.png" class="card-img-top" alt="News">
                    <div class="card-body">
                        <h5 class="fw-bold">Community Development Projects</h5>
                        <p>
                            Infrastructure development and community programs continue to improve the quality of life for residents.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection