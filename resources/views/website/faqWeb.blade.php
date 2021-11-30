@extends('layouts.websitemaster')

@section('websitecontent')

<section class="breadcrumbs" style="background-image: url(images/breadcrumb-bg.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-12">
            <div class="breadcrumb-content">
              <h4>Faq</h4>
              <ul class="breadcrumb-menu">
                <li>
                  <a href="index.html">Home</a
                  ><i class="far fa-angle-double-right"></i>
                </li>
                <li><a href="#">Faq</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="faq-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.2s">
            <div class="faq-inner">
              <div class="faq-content">
                <div class="panel-group" role="tablist">
                  <div class="panel panel-default">
                    <div class="faq-heading" id="FaqTitle1">
                      <h4 class="faq-title">
                        <a
                          data-bs-toggle="collapse"
                          data-parent="#accordion"
                          href="#faq1"
                          ><b>01</b>How perspiciatis unde omnis iste ?</a
                        >
                      </h4>
                    </div>
                    <div
                      id="faq1"
                      class="panel-collapse collapse show in"
                      role="tabpanel"
                      aria-labelledby="FaqTitle1"
                    >
                      <div class="faq-body">
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to
                        use a passage of Lorem Ipsum, you need to be sure there
                        isn't anything embarrassing hidden in the middle of
                        text.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="faq-heading" id="FaqTitle2">
                      <h4 class="faq-title">
                        <a
                          class="collapsed"
                          data-bs-toggle="collapse"
                          data-parent="#accordion"
                          href="#faq2"
                          ><b>02</b> Do natus error sit voluptatem
                          accusantium?</a
                        >
                      </h4>
                    </div>
                    <div
                      id="faq2"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="FaqTitle2"
                    >
                      <div class="faq-body">
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to
                        use a passage of Lorem Ipsum, you need to be sure there
                        isn't anything embarrassing hidden in the middle of
                        text.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="faq-heading" id="FaqTitle3">
                      <h4 class="faq-title">
                        <a
                          class="collapsed"
                          data-bs-toggle="collapse"
                          data-parent="#accordion"
                          href="#faq3"
                          ><b>03</b>Does doloremque laudantium totam rem
                          aperiam?</a
                        >
                      </h4>
                    </div>
                    <div
                      id="faq3"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="FaqTitle3"
                    >
                      <div class="faq-body">
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to
                        use a passage of Lorem Ipsum, you need to be sure there
                        isn't anything embarrassing hidden in the middle of
                        text.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="faq-heading" id="FaqTitle4">
                      <h4 class="faq-title">
                        <a
                          class="collapsed"
                          data-bs-toggle="collapse"
                          data-parent="#accordion"
                          href="#faq4"
                          ><b>04</b>How eaque ipsa quae inventore veritatis ?</a
                        >
                      </h4>
                    </div>
                    <div
                      id="faq4"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="FaqTitle4"
                    >
                      <div class="faq-body">
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to
                        use a passage of Lorem Ipsum, you need to be sure there
                        isn't anything embarrassing hidden in the middle of
                        text.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
            <div class="faq-inner">
              <div class="faq-content">
                <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default">
                    <div class="faq-heading" id="FaqTitle5">
                      <h4 class="faq-title">
                        <a
                          class="collapsed"
                          data-bs-toggle="collapse"
                          data-parent="#accordion"
                          href="#faq5"
                          ><b>05</b> Can et quasi architecto beatae vitae?</a
                        >
                      </h4>
                    </div>
                    <div
                      id="faq5"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="FaqTitle5"
                    >
                      <div class="faq-body">
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to
                        use a passage of Lorem Ipsum, you need to be sure there
                        isn't anything embarrassing hidden in the middle of
                        text.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="faq-heading" id="FaqTitle6">
                      <h4 class="faq-title">
                        <a
                          class="collapsed"
                          data-bs-toggle="collapse"
                          data-parent="#accordion"
                          href="#faq6"
                          ><b>06</b>Why do enim ipsam voluptatem quia
                          voluptas?</a
                        >
                      </h4>
                    </div>
                    <div
                      id="faq6"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="FaqTitle6"
                    >
                      <div class="faq-body">
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to
                        use a passage of Lorem Ipsum, you need to be sure there
                        isn't anything embarrassing hidden in the middle of
                        text.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="faq-heading" id="FaqTitle7">
                      <h4 class="faq-title">
                        <a
                          class="collapsed"
                          data-bs-toggle="collapse"
                          data-parent="#accordion"
                          href="#faq7"
                          ><b>07</b>Are sit aspernatur aut odit aut fugit?</a
                        >
                      </h4>
                    </div>
                    <div
                      id="faq7"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="FaqTitle7"
                    >
                      <div class="faq-body">
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to
                        use a passage of Lorem Ipsum, you need to be sure there
                        isn't anything embarrassing hidden in the middle of
                        text.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="faq-heading" id="FaqTitle8">
                      <h4 class="faq-title">
                        <a
                          class="collapsed"
                          data-bs-toggle="collapse"
                          data-parent="#accordion"
                          href="#faq8"
                          ><b>08</b>What will give you a complete account?</a
                        >
                      </h4>
                    </div>
                    <div
                      id="faq8"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="FaqTitle8"
                    >
                      <div class="faq-body">
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to
                        use a passage of Lorem Ipsum, you need to be sure there
                        isn't anything embarrassing hidden in the middle of
                        text.
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

@endsection