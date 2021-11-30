@extends('layouts.websitemaster')

@section('websitecontent')

<section
      class="breadcrumbs"
      style="background-image: url(images/breadcrumb-bg.jpg)"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-12">
            <div class="breadcrumb-content">
              <h4>Forgot Password</h4>
              <ul class="breadcrumb-menu">
                <li>
                  <a href="index.html">Home</a
                  ><i class="fas fa-angle-double-right"></i>
                </li>
                <li><a href="#">Forgot Password</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="register-area">
      <div class="container">
        <div class="row">
          <div
            class="
              col-lg-6
              offset-lg-3
              col-md-8
              offset-md-2
              col-12
              wow
              fadeInUp
            "
            data-wow-delay="0.3s"
          >
            <div class="account-box">
              <div class="account-box-head">
                <h2>Forgot Password</h2>
                <p>
                  It is a long established fact that a reader will be distracted
                </p>
              </div>
              <div class="account-form">
                <form action="#">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label>Email Address *</label>
                        <input
                          type="Email"
                          name="Email"
                          placeholder=""
                          required="required"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <div class="account-button">
                          <button type="submit" class="theme-btn">
                            Send Reset Link
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="login-bottom-content bottom-content">
                        <p>
                          Don’t have an account?
                          <a href="sign-up.html">Register.</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   


@endsection