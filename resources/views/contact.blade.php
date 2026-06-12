@extends('layouts.app')

@section('content')

<style>
.contact-header{
    background: linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)),
                url('/images/hotline.jpg');
    background-size: cover;
    background-position: center;
    color:white;
    padding:100px 0;
    border-radius:0 0 35px 35px;
}

.contact-card{
    border:none;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;
}

.contact-card:hover{
    transform:translateY(-5px);
}

.contact-icon{
    font-size:35px;
    color:#ffc107;
    margin-bottom:15px;
}

.contact-form{
    border:none;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.map-box{
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 15px 35px rgba(0,0,0,.15);
}

.emergency-card{
    background:#dc3545;
    color:white;
    border-radius:20px;
    padding:25px;
}
</style>


<!-- HERO -->
<section class="contact-header">
<div class="container">

<span class="badge bg-warning text-dark mb-3">
Public Assistance
</span>

<h1 class="display-4 fw-bold">
Contact the Municipality of Baliangao
</h1>

<p class="lead">
Reach out to us for inquiries, concerns,
public services, and government assistance.
</p>

</div>
</section>


<!-- CONTACT SECTION -->
<div class="container py-5">

<div class="row g-4">

<!-- LEFT SIDE -->
<div class="col-lg-5">

<div class="card contact-card mb-4">
<div class="card-body text-center">

<i class="fas fa-building contact-icon"></i>

<h5 class="fw-bold">
Municipal Office
</h5>

<p class="mb-0">
Municipality of Baliangao<br>
Misamis Occidental, Philippines
</p>

</div>
</div>


<div class="card contact-card mb-4">
<div class="card-body text-center">

<i class="fas fa-envelope contact-icon"></i>

<h5 class="fw-bold">
Email Address
</h5>

<p class="mb-0">
itstaffbaliangao@gmail.com
</p>

</div>
</div>


<div class="card contact-card mb-4">
<div class="card-body text-center">

<i class="fas fa-phone contact-icon"></i>

<h5 class="fw-bold">
Phone Number
</h5>

<p class="mb-0">
+63 123 456 7890
</p>

</div>
</div>


<div class="card contact-card mb-4">
<div class="card-body text-center">

<i class="fab fa-facebook contact-icon"></i>

<h5 class="fw-bold">
Official Facebook Page
</h5>

<a href="https://www.facebook.com/onesweet.asenso.baliangao/"
target="_blank"
class="btn btn-primary rounded-pill">

Visit Facebook Page

</a>

</div>
</div>


<div class="emergency-card">

<h5 class="fw-bold">
Emergency Hotline
</h5>

<p class="mb-0">
For urgent concerns and emergencies,
please contact the municipal hotline.
</p>

<h3 class="mt-3 mb-0">
911
</h3>

</div>

</div>


<!-- RIGHT SIDE FORM -->
<div class="col-lg-7">

<div class="card contact-form">

<div class="card-body p-4">

<h3 class="fw-bold mb-4">
Send Us a Message
</h3>

<form action="{{ route('contact.send') }}" method="POST">

@csrf

<div class="mb-3">

<label class="form-label">
Full Name
</label>

<input type="text"
class="form-control"
name="name"
required>

</div>


<div class="mb-3">

<label class="form-label">
Email Address
</label>

<input type="email"
class="form-control"
name="email"
required>

</div>


<div class="mb-3">

<label class="form-label">
Subject
</label>

<input type="text"
class="form-control"
name="subject">

</div>


<div class="mb-3">

<label class="form-label">
Message
</label>

<textarea
class="form-control"
name="message"
rows="6"
required></textarea>

</div>


<button
type="submit"
class="btn btn-success rounded-pill px-4">

Send Message

</button>

</form>

</div>

</div>

</div>

</div>

</div>


<!-- MAP -->
<section class="pb-5">

<div class="container">

<div class="text-center mb-4">

<span class="text-warning fw-bold">
LOCATION
</span>

<h2 class="fw-bold">
Visit Our Municipal Hall
</h2>

<p class="text-muted">
Find us at the Municipality of Baliangao, Misamis Occidental.
</p>

</div>

<div class="ratio ratio-16x9 map-box">

<iframe
src="https://www.google.com/maps?q=Baliangao+Misamis+Occidental&output=embed"
allowfullscreen>
</iframe>

</div>

</div>

</section>

@endsection