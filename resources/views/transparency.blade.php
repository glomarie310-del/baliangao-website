@extends('layouts.app')

@section('content')

<style>
.transparency-page {
    background: #ffffff;
    color: #10224a;
    font-family: Arial, sans-serif;
}

.transparency-title {
    color: #0b3a9e;
    font-weight: 800;
    letter-spacing: 1px;
    text-align: center;
    margin-top: 45px;
    margin-bottom: 45px;
}

.transparency-logo {
    text-align: center;
    margin-bottom: 55px;
}

.transparency-logo img {
    width: 250px;
    opacity: 0.95;
}

.transparency-content {
    max-width: 1080px;
    margin: auto;
    padding: 0 25px 60px;
}

.transparency-content h2 {
    color: #0b3a9e;
    font-weight: 800;
    margin-bottom: 20px;
}

.transparency-content p {
    font-size: 15px;
    line-height: 1.9;
    text-align: justify;
}

.document-section {
    background: #f8fafc;
    padding: 60px 0;
}

.document-card {
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 18px;
    padding: 25px;
    height: 100%;
    box-shadow: 0 8px 20px rgba(0,0,0,.06);
    transition: .3s;
}

.document-card:hover {
    transform: translateY(-5px);
}

.document-card i {
    color: #ffc107;
    font-size: 38px;
    margin-bottom: 15px;
}

@media(max-width: 768px) {
    .transparency-title {
        font-size: 28px;
    }

    .transparency-logo img {
        width: 190px;
    }

    .transparency-content h2 {
        font-size: 24px;
    }
}
</style>

<div class="transparency-page">

    <h1 class="transparency-title">
        TRANSPARENCY SEAL
    </h1>

    <div class="transparency-logo">
        <img src="{{ asset('images/transparency-seal.png') }}"
             alt="Transparency Seal">
    </div>

    <div class="transparency-content">

        <h2>
            NATIONAL BUDGET CIRCULAR 542
        </h2>

        <p>
            National Budget Circular 542, issued by the Department of Budget and Management on August 29, 2012, reiterates compliance with Section 93 of the General Appropriations Act of FY2012. Section 93 is the Transparency Seal provision.
        </p>

        <p>
            Sec. 93. Transparency Seal. To enhance transparency and enforce accountability, all national government agencies shall maintain a transparency seal on their official websites. The transparency seal shall contain information on the agency’s mandates and functions, names of its officials with their position and designation, contact information, annual reports, approved budgets, major programs and projects, status of implementation, and annual procurement plans.
        </p>

        <p>
            The respective heads of agencies shall be responsible for ensuring compliance with this section.
        </p>

    </div>

</div>

<section class="document-section">

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#0b3a9e;">
                Transparency Documents
            </h2>
            <p class="text-muted">
                Access official public records, reports, and disclosure documents.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="document-card">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <h5 class="fw-bold">Budget Reports</h5>
                    <p class="text-muted">Annual and supplemental budget reports.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="document-card">
                    <i class="fas fa-file-contract"></i>
                    <h5 class="fw-bold">Full Disclosure Policy</h5>
                    <p class="text-muted">Required transparency and disclosure documents.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="document-card">
                    <i class="fas fa-gavel"></i>
                    <h5 class="fw-bold">Bids and Awards</h5>
                    <p class="text-muted">Procurement notices, awards, and bid results.</p>
                </div>
            </div>

        </div>

    </div>

</section>

@endsection