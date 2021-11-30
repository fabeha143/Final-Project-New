@extends('layouts.websitemaster')

@section('websitecontent')

<section class="breadcrumbs" style="background-image: url(images/breadcrumb-bg.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-12">
            <div class="breadcrumb-content">
              <h4>Appointment</h4>
              <ul class="breadcrumb-menu">
                <li>
                  <a href="index.html">Home</a
                  ><i class="far fa-angle-double-right"></i>
                </li>
                <li><a href="#">Appointment</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="apppoinment-page-area">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-6 col-md-10 col-12 wow fadeInLeft"
            data-wow-delay="0.1s"
          >
            <form action="#">
              <div class="appoinment-inner">
                <div class="appoinment-title">
                  <h3>Make An Appointment</h3>
                  <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus
                    qui blanditiis praesentium voluptatum deleniti atque
                    corrupti quos dolores et quas molestias excepturi sint
                    occaecati.
                  </p>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <input
                        type="text"
                        name="Name"
                        placeholder="Name"
                        required="required"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <input
                        type="email"
                        name="Email"
                        placeholder="Email"
                        required="required"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <input
                        type="text"
                        name="Phone"
                        placeholder="Phone"
                        required="required"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <select>
                        <option value="1" selected="selected">
                          Depertment
                        </option>
                        <option value="2">Cardiology</option>
                        <option value="3">Neurology</option>
                        <option value="4">Dental Care</option>
                        <option value="5">Eye Care</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <input
                        type="text"
                        name="doctor name"
                        placeholder="Doctor's Name"
                        required="required"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <input type="text" placeholder="Date" id="datepicker" />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <textarea
                        name="message"
                        placeholder="Write Your Message Here..."
                        required="required"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="contact-btn">
                      <button type="submit" class="theme-btn">
                        Book An Appoinment
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div
            class="col-lg-6 col-md-10 col-12 wow fadeInRight"
            data-wow-delay="0.2s"
          >
            <div class="appoinment-img">
              <img src="images/appoinment-img.jpg" alt="#" />
            </div>
          </div>
        </div>
      </div>
    </section>



@endsection