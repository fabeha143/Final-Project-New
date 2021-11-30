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
              <h4>Contact Us</h4>
              <ul class="breadcrumb-menu">
                <li>
                  <a href="index.html">Home</a
                  ><i class="far fa-angle-double-right"></i>
                </li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
            <div class="contact-inner">
              <div class="row">
                <div class="col-lg-8 col-12">
                  <form
                    method="post"
                    action="https://themes.themewild.com/medicare/assets/php/contact.php"
                    id="contact-form"
                  >
                    <div class="contact-form">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                          <div class="form-group">
                            <input
                              type="text"
                              name="Name"
                              placeholder="Name"
                              required="required"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                          <div class="form-group">
                            <input
                              type="email"
                              name="Email"
                              placeholder="Email"
                              required="required"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                          <div class="form-group">
                            <input
                              type="text"
                              name="Phone"
                              placeholder="Phone"
                              required="required"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-122">
                          <div class="form-group">
                            <input
                              type="text"
                              name="Subject"
                              placeholder="Subject"
                              required="required"
                            />
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <textarea
                              name="message"
                              placeholder="Message"
                              required="required"
                            ></textarea>
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="contact-theme-btn">
                            <button type="submit" class="theme-btn">
                              Send Your Message
                            </button>
                          </div>
                        </div>
                        <div class="col-12 my-2">
                          <div class="form-messege text-success"></div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="col-lg-4 col-12">
                  <div
                    class="contact-details"
                    style="background-image: url('assets/img/contact-bg.jpg')"
                  >
                    <div class="contact-details-title">
                      <span>Contact Us</span>
                      <h4>Get In Touch</h4>
                    </div>
                    <div class="single-c-details">
                      <i class="fas fa-map-marker-alt"></i>
                      <div class="single-c-content">
                        <h5>Address</h5>
                        <span>2593 Ross Street, New York, USA</span>
                      </div>
                    </div>
                    <div class="single-c-details">
                      <i class="fas fa-phone"></i>
                      <div class="single-c-content">
                        <h5>Phone</h5>
                        <span>+1 123 456 7894</span>
                      </div>
                    </div>
                   
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="maps-area">
      <div class="main-maps">
        <!-- <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.34194156103!2d-74.03927096447748!3d40.759040329405195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a01c8df6fb3cb8!2sSolomon%20R.%20Guggenheim%20Museum!5e0!3m2!1sen!2sbd!4v1619410634508!5m2!1sen!2sbd"
          allowfullscreen=""
        ></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.4982217335373!2d67.12694141432122!3d24.915091849203222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338e3cbb24c07%3A0x48fb9b4163def42!2sJauhar%20Chowrangi%20Service%20Ln%2C%20Gulistan-e-Johar%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1636380828819!5m2!1sen!2s"  allowfullscreen=""></iframe>
      </div>
    </div>


@endsection