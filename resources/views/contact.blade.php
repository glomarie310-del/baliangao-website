@extends('layouts.app')

@section('content')

<!-- PAGE HEADER -->
<section class="py-5 bg-light">
<div class="container text-center">

<h1 class="fw-bold">Contact the Municipality of Baliangao</h1>

<p class="text-muted">
Reach out to us for inquiries, concerns, or public service assistance.
</p>

</div>
</section>


<!-- BANNER -->
<div class="container mt-4">
<div class="text-center">
<img src="{{ asset('images/hotline.jpg') }}" 
     alt="Contact Us Banner" 
     class="img-fluid rounded shadow">
</div>
</div>


<div class="container mt-5">

<div class="row g-4">

<!-- CONTACT INFORMATION -->
<div class="col-lg-5">

<div class="card shadow-sm mb-4">
<div class="card-body">

<h5 class="fw-bold mb-3">Municipal Office</h5>

<p class="mb-2">
Municipality of Baliangao<br>
Misamis Occidental, Philippines
</p>

</div>
</div>


<div class="card shadow-sm mb-4">
<div class="card-body">

<h5 class="fw-bold mb-3">Email Address</h5>

<p>
itstaffbaliangao@gmail.com
</p>

</div>
</div>


<div class="card shadow-sm mb-4">
<div class="card-body">

<h5 class="fw-bold mb-3">Phone Number</h5>

<p>
+63 123 456 7890
</p>

</div>
</div>


<div class="card shadow-sm">
<div class="card-body">

<h5 class="fw-bold mb-3">Official Facebook Page</h5>

<a href="https://www.facebook.com/onesweet.asenso.baliangao/" 
   target="_blank" 
   class="btn btn-primary">

Visit Facebook Page

</a>

</div>
</div>

</div>


<!-- CONTACT FORM -->
<div class="col-lg-7">

<div class="card shadow">

<div class="card-body">

<h4 class="fw-bold mb-4">Send Us a Message</h4>

<form action="{{ route('contact.send') }}" method="POST">

@csrf

<div class="mb-3">

<label class="form-label">Full Name</label>

<input type="text" 
       class="form-control" 
       name="name" 
       required>

</div>


<div class="mb-3">

<label class="form-label">Email Address</label>

<input type="email" 
       class="form-control" 
       name="email" 
       required>

</div>


<div class="mb-3">

<label class="form-label">Message</label>

<textarea class="form-control" 
          name="message" 
          rows="5" 
          required></textarea>

</div>


<button type="submit" class="btn btn-success">

Send Message

</button>

</form>

</div>

</div>

</div>

</div>

</div>


<!-- MAP SECTION -->
<section class="py-5">

<div class="container">

<h3 class="text-center mb-4">Our Location</h3>

<div class="ratio ratio-16x9">

<iframe 
src="https://www.google.com/maps?q=Baliangao+Misamis+Occidental&output=embed"
allowfullscreen>
</iframe>

</div>

</div>

</section>

@endsection