@extends('layouts.app')

@section('content')

<!-- STYLES -->
<style>
/* BODY BACKGROUND */
body {
    background-image: url('{{ asset("images/background1.jpg") }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: Arial, sans-serif;
}

/* PAGE HEADER */
.page-header{
    background: #ffc107;
    color: black;
    padding: 50px 0;
    margin-bottom: 10px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.page-header h1 {
    font-weight: 700;
}

.page-header p {
    margin: 0;
    font-size: 18px;
}

/* SECTION CONTAINER */
.section-container{
    max-width: 900px;
    margin: auto;
    padding: 20px 15px;
}

/* OFFICE CARDS */
.office-card{
    background:white;
    border-radius:10px;
    padding:18px 22px;
    margin-bottom:14px;
    box-shadow:0 3px 8px rgba(0,0,0,0.1);
    transition:0.3s;
    font-weight:500;
}

.office-card:hover{
    background:#f8f9fa;
    transform:translateX(6px);
    box-shadow:0 6px 14px rgba(0,0,0,0.15);
}

.office-link{
    text-decoration:none;
    color:#212529;
    display:block; /* make the whole card clickable and full-width */
}

.office-title{
    display:flex;
    align-items:center;
    font-size:16px;
}

.office-icon{
    margin-right:10px;
    color:#0d6efd;
    font-size: 18px;
}

.arrow{
    font-size:20px;
    color:#6c757d;
    float: right;
}

/* STATS SECTION */
.stats-section{
    padding:50px 0;
    text-align: center;
}

.stats-card {
    background: white;       
    border-radius: 12px;     
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    color: black;
    padding: 20px;
    margin: 10px 0;
}

.stat-number{
    font-size:36px;
    font-weight:bold;
    color:orange;
}

.stat-text {
    font-size:16px;
    margin-top:5px;
}

/* RESPONSIVE GRID */
@media (min-width: 768px){
    .stats-grid{
        display: flex;
        justify-content: space-between;
    }

    .stats-grid .stats-card{
        flex: 1;
        margin: 0 10px;
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


<!-- LGU QUICK STATS -->
<section class="stats-section">
    <div class="container stats-grid">
        <div class="stats-card">
            <div class="stat-number">13</div>
            <div class="stat-text">Municipal Offices</div>
        </div>
        <div class="stats-card">
            <div class="stat-number">30+</div>
            <div class="stat-text">Public Services</div>
        </div>
        <div class="stats-card">
            <div class="stat-number">24/7</div>
            <div class="stat-text">Emergency Support</div>
        </div>
        <div class="stats-card">
            <div class="stat-number">100%</div>
            <div class="stat-text">Citizen Commitment</div>
        </div>
    </div>
</section>

<!-- OFFICES LIST -->
<div class="container section-container">

    @php
        $offices = [
            ['icon'=>'fa-users','name'=>'Human Resource Management Office'],
            ['icon'=>'fa-chart-line','name'=>'Municipal Planning and Development Office'],
            ['icon'=>'fa-coins','name'=>'Municipal Treasurer’s Office'],
            ['icon'=>'fa-calculator','name'=>'Municipal Accounting Office'],
            ['icon'=>'fa-chart-pie','name'=>'Municipal Budget Office'],
            ['icon'=>'fa-file-signature','name'=>'Municipal Civil Registrar Office'],
            ['icon'=>'fa-hand-holding-heart','name'=>'Municipal Social Welfare and Development Office'],
            ['icon'=>'fa-road','name'=>'Municipal Engineering Office'],
            ['icon'=>'fa-map','name'=>'Municipal Assessor’s Office'],
            ['icon'=>'fa-seedling','name'=>'Municipal Agriculture Office'],
            ['icon'=>'fa-building','name'=>"Municipal Mayor's Office"],
            ['icon'=>'fa-triangle-exclamation','name'=>'Municipal Disaster Risk Reduction and Management Office'],
        ];
    @endphp

    @foreach($offices as $office)
        <a href="#" class="office-link">
            <div class="office-card">
                <div class="office-title">
                    <i class="fa-solid {{ $office['icon'] }} office-icon"></i>
                    {{ $office['name'] }}
                    <span class="arrow">›</span>
                </div>
            </div>
        </a>
    @endforeach

</div>

@endsection