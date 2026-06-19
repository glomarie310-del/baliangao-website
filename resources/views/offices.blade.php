@extends('layouts.app')

@section('content')

<style>
.offices-header {
    background: linear-gradient(rgba(15,39,68,.85), rgba(15,39,68,.85)),
                url('{{ asset("images/background1.jpg") }}');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 95px 0;
    border-radius: 0 0 35px 35px;
}

.section-title {
    color: #123c69;
    font-weight: 800;
}

.stat-card {
    background: white;
    border-radius: 20px;
    padding: 28px 20px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    height: 100%;
}

.stat-number {
    font-size: 38px;
    font-weight: 800;
    color: #f0ad00;
}

.office-card {
    background: white;
    border: none;
    border-radius: 20px;
    padding: 25px;
    height: 100%;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    transition: .3s;
    text-decoration: none;
    color: #333;
    display: block;
}

.office-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 15px 35px rgba(0,0,0,.15);
    color: #000;
}

.office-icon-box {
    width: 58px;
    height: 58px;
    background: rgba(255,193,7,.18);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
}

.office-icon {
    color: #f0ad00;
    font-size: 26px;
}

.office-arrow {
    color: #f0ad00;
    font-weight: 800;
}

.support-card {
    background: linear-gradient(135deg, #123c69, #1d5b91);
    color: white;
    border-radius: 25px;
    padding: 45px;
}

@media(max-width: 768px) {
    .offices-header {
        padding: 70px 0;
    }

    .support-card {
        padding: 30px;
    }
}
</style>


<!-- PAGE HEADER -->
<section class="offices-header mb-5">
    <div class="container">

        <span class="badge bg-warning text-dark mb-3">
            Municipal Directory
        </span>

        <h1 class="display-4 fw-bold">
            Municipal Offices
        </h1>

        <p class="lead" style="max-width: 760px;">
            Browse the offices and departments of the Municipality of Baliangao
            dedicated to serving the public with efficient and responsive governance.
        </p>

    </div>
</section>


<!-- QUICK STATS -->
<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">13</div>
                    <p class="mb-0">Municipal Offices</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">30+</div>
                    <p class="mb-0">Public Services</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <p class="mb-0">Emergency Support</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">100%</div>
                    <p class="mb-0">Citizen Commitment</p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- OFFICES LIST -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-warning fw-bold">LOCAL GOVERNMENT</span>

            <h2 class="section-title">
                Offices and Departments
            </h2>

            <p class="text-muted">
                Select an office to view services, announcements, and contact information.
            </p>
        </div>

        @php
            $offices = [
                ['icon'=>'fa-users','name'=>'Human Resource Management Office','desc'=>'Personnel management, recruitment, and employee development.'],
                ['icon'=>'fa-chart-line','name'=>'Municipal Planning and Development Office','desc'=>'Development planning, programs, and project coordination.'],
                ['icon'=>'fa-coins','name'=>'Municipal Treasurer’s Office','desc'=>'Revenue collection, taxes, fees, and treasury services.'],
                ['icon'=>'fa-calculator','name'=>'Municipal Accounting Office','desc'=>'Financial accounting, reports, and government fund monitoring.'],
                ['icon'=>'fa-chart-pie','name'=>'Municipal Budget Office','desc'=>'Budget preparation, review, and financial planning.'],
                ['icon'=>'fa-file-signature','name'=>'Municipal Civil Registrar Office','desc'=>'Birth, marriage, death records, and civil documents.'],
                ['icon'=>'fa-hand-holding-heart','name'=>'Municipal Social Welfare and Development Office','desc'=>'Social services, welfare assistance, and community support.'],
                ['icon'=>'fa-road','name'=>'Municipal Engineering Office','desc'=>'Infrastructure projects, construction, and engineering services.'],
                ['icon'=>'fa-map','name'=>'Municipal Assessor’s Office','desc'=>'Property assessment, real property records, and valuation.'],
                ['icon'=>'fa-seedling','name'=>'Municipal Agriculture Office','desc'=>'Agriculture support, farmer assistance, and livelihood programs.'],
                ['icon'=>'fa-building','name'=>"Municipal Mayor's Office",'desc'=>'Executive leadership and municipal administration.'],
                ['icon'=>'fa-triangle-exclamation','name'=>'Municipal Disaster Risk Reduction and Management Office','desc'=>'Disaster preparedness, response, and emergency coordination.'],
            ];
        @endphp

        <div class="row g-4">

            @foreach($offices as $office)
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="office-card">

                        <div class="office-icon-box">
                            <i class="fa-solid {{ $office['icon'] }} office-icon"></i>
                        </div>

                        <h5 class="fw-bold">
                            {{ $office['name'] }}
                        </h5>

                        <p class="text-muted">
                            {{ $office['desc'] }}
                        </p>

                        <span class="office-arrow">
                            View Office →
                        </span>

                    </a>
                </div>
            @endforeach

        </div>

    </div>
</section>


<!-- SUPPORT SECTION -->
<section class="py-5">
    <div class="container">

        <div class="support-card">

            <div class="row align-items-center g-4">

                <div class="col-lg-8">

                    <span class="badge bg-warning text-dark mb-3">
                        Need Assistance?
                    </span>

                    <h2 class="fw-bold">
                        Contact the Municipality of Baliangao
                    </h2>

                    <p class="mb-0">
                        For inquiries, public service assistance, office concerns, or emergency support,
                        you may contact the municipal office through our official communication channels.
                    </p>

                </div>

                <div class="col-lg-4 text-lg-end">

                    <a href="{{ url('/contact') }}"
                       class="btn btn-warning rounded-pill px-4">
                        Contact Us
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection