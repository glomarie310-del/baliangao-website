@extends('layouts.app')

@section('content')

<style>
.tourism-header {
    background: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)), url('/images/tourism1.jpg');
    background-size: cover;
    background-position: center;
    padding: 110px 0;
    color: white;
    border-radius: 0 0 40px 40px;
}

.section-title {
    color: #123c69;
    font-weight: 800;
}

.place-card {
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    transition: .3s;
    height: 100%;
}

.place-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,.15);
}

.place-img {
    height: 250px;
    object-fit: cover;
}

.rating {
    color: #f0ad00;
    font-weight: 600;
    margin-bottom: 10px;
}

.featured-img {
    min-height: 400px;
    object-fit: cover;
}

.stat-box h2 {
    color: #f0ad00;
    font-weight: 800;
}

.festival-section {
    padding: 70px 0;
}

.festival-img {
    height: 420px;
    width: 100%;
    object-fit: cover;
    border-radius: 25px;
}

.video-box {
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,.18);
}

@media(max-width: 768px) {
    .tourism-header {
        padding: 70px 0;
    }

    .featured-img,
    .festival-img {
        min-height: auto;
        height: 280px;
    }
}
</style>


<!-- HEADER -->
<section class="tourism-header mb-5">
    <div class="container">

        <span class="badge bg-warning text-dark mb-3">
            Tourism Destination
        </span>

        <h1 class="display-3 fw-bold">
            Explore Baliangao
        </h1>

        <p class="lead" style="max-width: 720px;">
            Discover beaches, mangrove forests, marine biodiversity, and vibrant cultural festivals in Baliangao.
        </p>

    </div>
</section>


<!-- FEATURED DESTINATION -->
<section class="mb-5">
    <div class="container">

        <div class="card border-0 shadow-lg overflow-hidden rounded-4">

            <div class="row g-0">

                <div class="col-lg-6">
                    <img src="/images/tourism1.jpg"
                         class="w-100 h-100 featured-img"
                         alt="Bless Amare Sunrise Resort">
                </div>

                <div class="col-lg-6 p-5 d-flex align-items-center">

                    <div>

                        <span class="badge bg-warning text-dark mb-3">
                            Featured Destination
                        </span>

                        <h2 class="fw-bold section-title">
                            Bless Amare Sunrise Resort
                        </h2>

                        <p class="text-muted">
                            Experience breathtaking sunrise views, relaxing beachfront scenery, and the natural coastal beauty of Baliangao.
                        </p>

                        <p>
                            A perfect destination for family bonding, weekend trips, photography, and peaceful seaside relaxation.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- TOP BEACHES -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-warning fw-bold">DESTINATIONS</span>
            <h2 class="section-title">Top Beaches in Baliangao</h2>
            <p class="text-muted">
                Explore local beach destinations, resorts, and island getaways.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card place-card">
                    <img src="/images/tourism1.jpg" class="place-img card-img-top" alt="Tamban Beach">
                    <div class="card-body">
                        <h5 class="fw-bold">Tamban Beach</h5>
                        <p class="text-muted">Baliangao, Misamis Occidental</p>
                        <div class="rating">⭐⭐⭐⭐ 4.7</div>
                        <p>Well-liked shoreline with calm waters and scenic views — ideal for swimming and beach picnics.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card place-card">
                    <img src="/images/tourism1.jpg" class="place-img card-img-top" alt="Bless Amare Sunrise Resort">
                    <div class="card-body">
                        <h5 class="fw-bold">Bless Amare Sunrise Resort</h5>
                        <p class="text-muted">Baliangao Coast</p>
                        <div class="rating">⭐⭐⭐⭐ 4.6</div>
                        <p>Cozy beach area popular for sunrise views, chill time on the sand, and perfect photo opportunities.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card place-card">
                    <img src="/images/tourism1.jpg" class="place-img card-img-top" alt="Bito-on Beach Resort">
                    <div class="card-body">
                        <h5 class="fw-bold">Bito-on Beach Resort</h5>
                        <p class="text-muted">Baliangao, Misamis Occidental</p>
                        <div class="rating">⭐⭐⭐⭐ 4.5</div>
                        <p>Local favorite known for relaxed vibes, clean beach space, and friendly atmosphere.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card place-card">
                    <img src="/images/tourism1.jpg" class="place-img card-img-top" alt="Inday-inday Beach Resort">
                    <div class="card-body">
                        <h5 class="fw-bold">Inday-inday Beach Resort</h5>
                        <p class="text-muted">Punta Miray Coast</p>
                        <div class="rating">⭐⭐⭐⭐ 4.4</div>
                        <p>Scenic beachside spot great for swimming, lounging, and enjoying coastal views.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card place-card">
                    <img src="/images/tourism1.jpg" class="place-img card-img-top" alt="Cabgan Island">
                    <div class="card-body">
                        <h5 class="fw-bold">Cabgan Island</h5>
                        <p class="text-muted">Accessible by boat from Baliangao</p>
                        <div class="rating">⭐⭐⭐⭐ 4.7</div>
                        <p>Island beach destination known for pristine sand, clear waters, and excellent snorkeling spots.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card place-card">
                    <img src="/images/tourism1.jpg" class="place-img card-img-top" alt="Oklahoma and Silangga Island Resorts">
                    <div class="card-body">
                        <h5 class="fw-bold">Oklahoma & Silangga Island Resorts</h5>
                        <p class="text-muted">Secluded islands off Baliangao</p>
                        <div class="rating">⭐⭐⭐⭐ 4.6</div>
                        <p>Quieter shorelines perfect for snorkeling, kayaking, and exploring the islands.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card place-card">
                    <img src="/images/tourism1.jpg" class="place-img card-img-top" alt="Borbon and Sam Niza Beaches">
                    <div class="card-body">
                        <h5 class="fw-bold">Borbon & Sam Niza Beaches</h5>
                        <p class="text-muted">Local Baliangao</p>
                        <div class="rating">⭐⭐⭐⭐ 4.3</div>
                        <p>Smaller local beaches perfect for a relaxed seaside walk or a simple swim.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card place-card">
                    <img src="/images/tourism1.jpg" class="place-img card-img-top" alt="La Esperanza and Kibulanding Beach Resort">
                    <div class="card-body">
                        <h5 class="fw-bold">La Esperanza Sea Park & Kibulanding Beach Resort</h5>
                        <p class="text-muted">Baliangao Coast</p>
                        <div class="rating">⭐⭐⭐⭐ 4.5</div>
                        <p>Beachfront resorts with amenities for overnight stays, family picnics, and beach activities.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card place-card">
                    <img src="/images/tourism1.jpg" class="place-img card-img-top" alt="Coral Bay Beach Resort Baliangao">
                    <div class="card-body">
                        <h5 class="fw-bold">Coral Bay Beach Resort Baliangao</h5>
                        <p class="text-muted">Baliangao, Misamis Occidental</p>
                        <div class="rating">⭐⭐⭐⭐ 4.4</div>
                        <p>Laid-back beach club with sandy stretch and sea views — perfect for relaxation and chilling.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- TOURISM STATS -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="row text-center g-4">

            <div class="col-md-3 stat-box">
                <h2>9+</h2>
                <p>Beach Destinations</p>
            </div>

            <div class="col-md-3 stat-box">
                <h2>15</h2>
                <p>Barangays</p>
            </div>

            <div class="col-md-3 stat-box">
                <h2>1</h2>
                <p>Protected Landscape & Seascape</p>
            </div>

            <div class="col-md-3 stat-box">
                <h2>Annual</h2>
                <p>Dagatnon Festival</p>
            </div>

        </div>

    </div>
</section>


<!-- FESTIVAL SECTION -->
<section class="festival-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-warning fw-bold">ANNUAL CELEBRATION</span>
            <h2 class="display-5 fw-bold section-title">Dagatnon Festival</h2>
            <p class="text-muted">
                Celebrating the culture, traditions, and maritime heritage of Baliangao.
            </p>
        </div>

        <div class="row align-items-center g-5">

            <div class="col-md-6">
                <img src="/images/dagatnon.jpg" class="festival-img shadow" alt="Dagatnon Festival">
            </div>

            <div class="col-md-6">

                <p>
                    The <strong>Dagatnon Festival</strong> is a vibrant cultural celebration in the Municipality of Baliangao that highlights the community’s deep connection to the sea. The festival showcases colorful street dancing, cultural performances, and activities that celebrate the rich marine resources and fishing traditions of the town.
                </p>

                <p>
                    The word <em>"Dagatnon"</em> comes from the Cebuano word <strong>"dagat"</strong>, meaning sea, symbolizing the importance of the ocean to the livelihood and identity of the people of Baliangao.
                </p>

                <p>
                    Visitors can experience lively parades, traditional dances, and local festivities that reflect the culture and unity of the community.
                </p>

            </div>

        </div>

    </div>
</section>


<!-- YOUTUBE VIDEO -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-warning fw-bold">VIDEO FEATURE</span>
            <h2 class="fw-bold section-title">Discover Baliangao</h2>
            <p class="text-muted">
                Watch the beauty and culture of Baliangao come alive.
            </p>
        </div>

        <div class="ratio ratio-16x9 video-box">

            <iframe
                src="https://www.youtube.com/embed/VN7NZFD7hg4?si=QxE78aODWyUKOiy0"
                title="Dagatnon Festival Theme Song"
                allowfullscreen>
            </iframe>

        </div>

    </div>
</section>

@endsection