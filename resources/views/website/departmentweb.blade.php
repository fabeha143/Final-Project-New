@extends('layouts.websitemaster')

@section('websitecontent')

<section class="breadcrumbs" style="background-image: url(images/breadcrumb-bg.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-12">
            <div class="breadcrumb-content">
              <h4>Departments</h4>
              <ul class="breadcrumb-menu">
                <li>
                  <a href="index.html">Home</a
                  ><i class="fas fa-angle-double-right"></i>
                </li>
                <li><a href="#">Departments</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="department-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
            <div class="section-title">
              <span>Department</span>
              <h3>Our Departments</h3>
              <p>
                It is a long established fact that a reader will be distracted.
              </p>
            </div>
          </div>
        </div>
        <div class="department-details-main">
          <div class="row">
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                  <i class="fas fa-heartbeat"></i>
                  <h6>Cardiology</h6>
                </div>
              </a>
            </div>
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                  <i class="fas fa-tooth"></i>
                  <h6>Dental</h6>
                </div>
              </a>
            </div>
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                  <i class="fas fa-brain"></i>
                  <h6>Neurology</h6>
                </div>
              </a>
            </div>
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                  <i class="fas fa-capsules"></i>
                  <h6>Medicine</h6>
                </div>
              </a>
            </div>
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                  <i class="fas fa-eye"></i>
                  <h6>Eye Care</h6>
                </div>
              </a>
            </div>
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                  <i class="fas fa-stethoscope"></i>
                  <h6>Pediatrics</h6>
                </div>
              </a>
            </div>
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                <i class="fas fa-burn"></i>
                  <h6>Urology</h6>
                </div>
              </a>
            </div>
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                  <i class="fas fa-lungs"></i>
                  <h6>Nephrology</h6>
                </div>
              </a>
            </div>
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                  <i class="fas fa-user-nurse"></i>
                  <h6>Gynecology</h6>
                </div>
              </a>
            </div>
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                    <i class="fas fa-bone"></i>
                  <h6>Rheumetology</h6>
                </div>
              </a>
            </div>
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                    <i class="fas fa-prescription-bottle"></i>
                  <h6>Surgical Oncology</h6>
                </div>
              </a>
            </div>
            <div class="col-2">
              <a href="department-single.html">
                <div class="department-single">
                  <i class="fas fa-syringe"></i>
                  <h6>Anaesthesia</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection