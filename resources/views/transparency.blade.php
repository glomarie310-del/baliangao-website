Use this version so your **Transparency page** matches your other pages: blue hero, yellow badges, modern cards, and clean LGU style.

```blade
@extends('layouts.app')

@section('content')

<style>
.transparency-header {
    background: linear-gradient(rgba(15,39,68,.88), rgba(15,39,68,.88)),
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

.seal-card {
    background: white;
    border-radius: 25px;
    padding: 45px;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    position: relative;
    overflow: hidden;
}

.seal-watermark {
    position: absolute;
    right: 30px;
    top: 25px;
    width: 230px;
    opacity: .08;
}

.seal-main {
    max-width: 220px;
    width: 100%;
}

.document-card {
    background: white;
    border: none;
    border-radius: 20px;
    padding: 30px;
    height: 100%;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    transition: .3s;
}

.document-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,.15);
}

.document-card i {
    color: #f0ad00;
    font-size: 42px;
    margin-bottom: 18px;
}

.stat-card {
    background: white;
    border-radius: 20px;
    padding: 28px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
}

.stat-number {
    color: #f0ad00;
    font-size: 38px;
    font-weight: 800;
}

@media(max-width:768px) {
    .transparency-header {
        padding: 70px 0;
    }

    .seal-card {
        padding: 30px;
        text-align: center;
    }

    .seal-watermark {
        width: 180px;
        right: 50%;
        transform: translateX(50%);
        top: 40px;
    }
}
</style>


<section class="transparency-header mb-5">
    <div class="container">

        <span class="badge bg-warning text-dark mb-3">
            Good Governance
        </span>

        <h1 class="display-4 fw-bold">
            Transparency Portal
        </h1>

        <p class="lead" style="max-width: 760px;">
            Access public documents, financial reports, procurement information,
            and official disclosures of the Municipality of Baliangao.
        </p>

    </div>
</section>


<section class="py-5">
    <div class="container">

        <div class="seal-card">

            <img src="{{ asset('images/transparency-seal.png') }}"
                 class="seal-watermark"
                 alt="Transparency Seal">

            <div class="row align-items-center g-4">

                <div class="col-lg-4 text-center">
                    <img src="{{ asset('images/transparency-seal.png') }}"
                         class="seal-main"
                         alt="Transparency Seal">
                </div>

                <div class="col-lg-8">
                    <span class="text-warning fw-bold">
                        TRANSPARENCY SEAL
                    </span>

                    <h2 class="section-title mt-2">
                        National Budget Circular 542
                    </h2>

                    <p class="text-muted">
                        National Budget Circular 542, issued by the Department of Budget and Management,
                        reiterates compliance with the Transparency Seal provision to enhance transparency
                        and enforce accountability in government agencies.
                    </p>

                    <p class="text-muted mb-0">
                        The Transparency Seal contains information on mandates and functions,
                        officials, contact information, annual reports, approved budgets,
                        programs, projects, procurement plans, and implementation status.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>


<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-warning fw-bold">
                PUBLIC DOCUMENTS
            </span>

            <h2 class="section-title">
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
                    <p class="text-muted">
                        Annual budgets, supplemental budgets, and financial reports.
                    </p>
                    <a href="#" class="fw-bold text-decoration-none">
                        View Documents →
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="document-card">
                    <i class="fas fa-file-contract"></i>
                    <h5 class="fw-bold">Full Disclosure Policy</h5>
                    <p class="text-muted">
                        Required transparency and disclosure documents for public access.
                    </p>
                    <a href="#" class="fw-bold text-decoration-none">
                        View Documents →
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="document-card">
                    <i class="fas fa-gavel"></i>
                    <h5 class="fw-bold">Bids and Awards</h5>
                    <p class="text-muted">
                        Procurement opportunities, notices, awards, and bid results.
                    </p>
                    <a href="#" class="fw-bold text-decoration-none">
                        View Documents →
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>


<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">100%</div>
                    <p class="mb-0">Public Commitment</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <p class="mb-0">Online Access</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">15</div>
                    <p class="mb-0">Barangays Served</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-number">LGU</div>
                    <p class="mb-0">Transparency Portal</p>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
