@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero text-center">
  <div class="container">

    <!-- Carousel -->
    <div id="heroCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/ms1.jpeg') }}" class="d-block mx-auto" alt="photo 1" style="max-width: 600px;">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/ms4.jpeg') }}" class="d-block mx-auto" alt="photo 2" style="max-width: 600px;">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/ms2.jpeg') }}" class="d-block mx-auto" alt="photo 2" style="max-width: 600px;">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/ms3.jpeg') }}" class="d-block mx-auto" alt="photo 2" style="max-width: 600px;">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/hotline.jpg') }}" class="d-block mx-auto" alt="photo 3" style="max-width: 600px;">
        </div>
      </div>
      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>
</section>

<!-- Bootstrap JS (needed for carousel functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<section class="services py-5">
<div class="container">
<div class="row align-items-center">

<!-- LEFT SIDE (SERVICE BOXES) -->
<div class="col-lg-7">
<div class="row g-4">

<div class="col-md-4">
<a href="https://elgu-baliangao-misamis-occidental.e.gov.ph" target="_blank" class="service-card">
<i class="fas fa-user service-icon"></i>
<p>Online Business Permit And Licensing System</p>
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
<p>Sangguniang Panlungsod</p>
</a>
</div>

</div>
</div>

<!-- RIGHT SIDE (TEXT) -->
<div class="col-lg-5 services-text">

<h2>SERVICES</h2>

<p>
The Municipality of Baliangao provides a range of services designed to meet the needs of its citizens. From business-related concerns to career opportunities, the Local Government encourages the public to contact the appropriate departments for more information about available services.
</p>

<a href="{{ url('/services') }}" class="btn btn-outline-danger rounded-pill px-4">
    VIEW MORE SERVICES
</a>

</div>

</div>
</div>
</section>

<!-- NEWS -->

<section class="news">

<div class="container">

<h2 class="text-center mb-5">
LATEST NEWS
</h2>

<div class="row">

<div class="col-md-4">
<div class="card">
<img src="/images/ms1.jpeg" class="card-img-top">
<div class="card-body">
<h5>Miss Universe Philippines 2026 Delegates Explore Baliangao’s Tourism Gems</h5>
<p>Baliangao proudly welcomed 50 delegates of the Miss Universe Philippines 2026 pageant
   as they explored some of the municipality’s top tourist destinations. 
   The delegates visited the scenic U River, the refreshing Siloy Man-Made Forest, and 
   the breathtaking Bless Amare Sunrise Beach Resort, experiencing the natural beauty and 
   warm hospitality that Baliangao has to offer.
Their visit showcased Baliangao as one of Misamis Occidental’s emerging tourism destinations, 
inviting travelers to discover its unique attractions, serene landscapes, and unforgettable experiences.</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card">
<img src="/images/1.jpg" class="card-img-top">
<div class="card-body">
<h5>Baliangao</h5>
<p>Barangay Sinian in Baliangao has emerged as a 
  national model for Katarungang Pambarangay (KP), attracting 
  barangays from across the region and other provinces for learning and benchmarking.</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card">
<img src="/images/1.jpg" class="card-img-top">
<div class="card-body">
<h5>Baliangao</h5>
<p>Barangay Sinian in Baliangao has emerged as a 
  national model for Katarungang Pambarangay (KP), attracting 
  barangays from across the region and other provinces for learning and benchmarking.</p>
</div>
</div>
</div>

</div>

</div>

</section>

@endsection