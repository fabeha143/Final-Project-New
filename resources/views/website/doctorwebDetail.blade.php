@extends('layouts.websitemaster')

@section('websitecontent')

<section class="breadcrumbs" style="background-image: url(images/breadcrumb-bg.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-12">
            <div class="breadcrumb-content">
              <h4>Doctor Details</h4>
              <ul class="breadcrumb-menu">
                <li>
                  <a href="index.html">Home</a
                  ><i class="far fa-angle-double-right"></i>
                </li>
                <li><a href="#">Doctor Details</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="doctor-details-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12 wow fadeInUp" data-wow-delay="0.2s">
            <div class="doctor-details-inner">
              <div class="doctor-d-top">
                <div class="row no-gutters">
                  <div class="col-lg-4 col-md-4 col-12">
                    <div class="doctor-d-img">
                      <img src="images/doctors/3.jpg" alt="#" />
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-12">
                    <div class="doctor-d-title">
                      <h4>Dr.Michael Powell</h4>
                      <p>Cardiology Consultant</p>
                      <ul class="doctor-ratting">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>(10)</li>
                      </ul>
                      <div class="d-details-address">
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-12">
                            <ul>
                              <li>
                                <i class="fal fa-phone"></i>+1 123 455 7894
                              </li>
                              <li>
                                <i class="fal fa-envelope-open"></i
                                ><a
                                  href="https://themes.themewild.com/cdn-cgi/l/email-protection"
                                  class="__cf_email__"
                                  data-cfemail="73000603031c010733171c1e121a1d5d101c1e"
                                  >[email&#160;protected]</a
                                >
                              </li>
                              <li>
                                <i class="fal fa-hospital"></i>Example Hospital
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-6 col-md-6 col-12">
                            <ul>
                              <li>
                                <i class="fal fa-map-marker-alt"></i>2593 Ross
                                Street,USA
                              </li>
                              <li>
                                <i class="fal fa-medal"></i>4-8 Years Experience
                              </li>
                              <li>
                                <i class="fal fa-calendar-alt"></i>Sunday -
                                Monday
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="doctor-details-bottom">
                <div class="doctor-d-content-widget">
                  <h3 class="doctor-d-bottom-title">Biography</h3>
                  <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus
                    qui blanditiis praesentium voluptatum deleniti atque
                    corrupti quos dolores et quas molestias excepturi sint
                    occaecati cupiditate non provident, similique sunt in culpa
                    qui officia deserunt mollitia animi, id est laborum et
                    dolorum fuga. Et harum quidem rerum facilis est et expedita
                    distinctio. Nam libero tempore, cum soluta nobis est
                    eligendi optio cumque nihil impedit quo minus id quod maxime
                    placeat facere possimus.
                  </p>
                  <p>
                    Omnis voluptas assumenda est, omnis dolor repellendus.
                    Temporibus autem quibusdam et aut officiis debitis aut rerum
                    necessitatibus saepe eveniet ut et voluptates repudiandae
                    sint et molestiae non recusandae. Itaque earum rerum hic
                    tenetur a sapiente delectus.
                  </p>
                </div>
                <div class="doctor-d-content-widget">
                  <h3 class="doctor-d-bottom-title">Education</h3>
                  <ul>
                    <li>
                      <i class="fas fa-graduation-cap"></i>PHD degree in
                      Cardiology at Example University <span>(2009)</span>
                    </li>
                    <li>
                      <i class="fas fa-graduation-cap"></i>Master of Cardiac at
                      Example University <span>(2005)</span>
                    </li>
                    <li>
                      <i class="fas fa-graduation-cap"></i>MBBS degree in
                      Cardiology at Example University <span>(2003)</span>
                    </li>
                    <li>
                      <i class="fas fa-graduation-cap"></i>Higher Secondary
                      Certificate at Example collage <span>(2000)</span>
                    </li>
                  </ul>
                </div>
                <div class="doctor-d-content-widget">
                  <h3 class="doctor-d-bottom-title">Additional Info</h3>
                  <p>
                    On the other hand, we denounce with righteous indignation
                    and dislike men who are so beguiled and demoralized by the
                    charms of pleasure of the moment, so blinded by desire, that
                    they cannot foresee the pain and trouble that are bound to
                    ensue; and equal blame belongs to those who fail in their
                    duty through weakness of will, which is the same as saying
                    through shrinking from toil and pain. These cases are
                    perfectly simple and easy to distinguish.
                  </p>
                  <p>
                    On the other hand, we denounce with righteous indignation
                    and dislike men who are so beguiled and demoralized by the
                    charms of pleasure of the moment, so blinded by desire, that
                    they cannot foresee the pain and trouble that are bound to
                    ensue; and equal blame belongs to those who fail in their
                    duty through weakness of will, which is the same as saying
                    through shrinking from toil and pain. These cases are
                    perfectly simple and easy to distinguish.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="col-lg-4 col-md-6 col-12 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="doctor-details-right">
              <div class="single-d-widget booking-info-widget">
                <h3 class="w-hour-title">Booking Now</h3>
                <form action="#">
                  <div class="form-group">
                    <label>Date</label>
                    <input
                      type="text"
                      placeholder="13/06/2021"
                      id="datepicker"
                    />
                    <i class="icofont-calendar"></i>
                  </div>
                  <div class="form-group">
                    <label>Time</label>
                    <input
                      type="text"
                      name="time"
                      placeholder="10:30 PM"
                      required="required"
                    />
                    <i class="icofont-clock-time"></i>
                  </div>
                  <div class="form-group">
                    <label>Department</label>
                    <select>
                      <option value="1" selected="selected">Depertment</option>
                      <option value="2">Cardiology</option>
                      <option value="3">Neurology</option>
                      <option value="4">Dental Care</option>
                      <option value="5">Eye Care</option>
                    </select>
                  </div>
                  <div class="booking-info-btn">
                    <button type="submit" class="theme-btn">
                      Book An Appoinment
                    </button>
                  </div>
                </form>
              </div>

              <div class="single-d-widget working-hour-widget">
                <h3 class="w-hour-title">Working Hour</h3>
                <ul class="w-hour-inner">
                  <li><b>Monday - Sunday</b><span>8.00-19.00</span></li>
                  <li><b>Saturday</b><span>8.00-16.30</span></li>
                  <li><b>Friday </b><span>10.30 - 18.00</span></li>
                  <li><b>Sunday </b><span>Closed</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
