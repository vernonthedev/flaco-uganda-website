@extends('layouts.app')
{{--  THE HOME PAGE LAYOUT  --}}
@section('content')


<div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Empowering Dreams, Nurturing Hope</h1>

          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-counter ftco-intro" id="section-counter">
      <div class="container">
          <div class="row no-gutters">
              <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-1 align-items-stretch">
            <div class="text">
                <span>Served Over</span>
              <strong class="number" data-number="1675">0</strong>
              <span>Children in 190 countries in the Uganda</span>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-2 align-items-stretch">
            <div class="text">
                <h3 class="mb-4">Donate Money</h3>
                <p>Help establish healthcare clinics and organize periodic medical camps in communities to provide free medical services, vaccinations, and health check-ups for children and women..</p>
                <p><a href="{{ route('contact')}}" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-3 align-items-stretch">
            <div class="text">
                <h3 class="mb-4">Be a Volunteer</h3>
                <p>Help raise awareness about the importance of accessible education and shelter for underprivileged children through community outreach programs</p>
                <p><a href="{{ route('contact')}}" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
            </div>
          </div>
        </div>
          </div>
      </div>
  </section>

  <section class="ftco-section">
      <div class="container">
          <div class="row">
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 d-flex services p-3 py-4 d-block">
            <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading">Make Donation</h3>
              <p>Help establish healthcare clinics and organize periodic medical camps in communities to provide free medical services, vaccinations, and health check-ups for children and women.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 d-flex services p-3 py-4 d-block">
            <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading">Become A Volunteer</h3>
              <p>Help foster a supportive and caring community to help children overcome past traumas.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 d-flex services p-3 py-4 d-block">
            <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading">Sponsorship</h3>
              <p>Help conduct workshops and awareness programs on health and hygiene, emphasizing preventive measures and healthy lifestyle choices.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
  </section>


  <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">CORE OBJECTIVES</h2>
          <p>At Flames of Compassion Uganda (FLACO), our purpose is to transform lives and communities by breaking down barriers to education and healthcare, empowering women and mothers to be agents of change, and advocating for the rights and equality of every child and woman. Through accessible education, improved healthcare access, women’s empowerment, and advocacy efforts, we envision a future where children’s dreams are nurtured, women thrive, and communities flourish in an environment of compassion, resilience, and equality.</p>
        </div>
      </div>
      <div class="row">
          <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
              <div class="staff">
                  <div class="d-flex mb-4">
                      <div class="img" style="background-image: url(images/gallery13.jpg);"></div>
                      <div class="info ml-4">
                          <h3><a href="teacher-single.html">Enhance Healthcare Access</a></h3>
                          <span class="position">In Uganda</span>
                          <div class="text">
                              <p>This includes partnering with healthcare providers to offer medical services, vaccinations, and health education to improve overall well-being within the communities they serve.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
              <div class="staff">
                  <div class="d-flex mb-4">
                      <div class="img" style="background-image: url(images/gallery14.jpg);"></div>
                      <div class="info ml-4">
                          <h3><a href="teacher-single.html">Women Empowerment</a></h3>
                          <span class="position">In Uganda</span>
                          <div class="text">
                              <p>Empower women and mothers through skills development programs, vocational training, and initiatives that promote financial independence. This will enable women to support their families and contribute positively to their communities.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
              <div class="staff">
                  <div class="d-flex mb-4">
                      <div class="img" style="background-image: url(images/gallery15.jpg);"></div>
                      <div class="info ml-4">
                          <h3><a href="teacher-single.html">Advocating for children’s rights </a></h3>
                          <span class="position">In Uganda</span>
                          <div class="text">
                              <p>Advocate for children’s rights and women’s empowerment at local and national levels. They will work to raise awareness about the importance of education, healthcare, and gender equality while lobbying for policies that protect and promote these rights.</a></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>

  <section class="ftco-gallery">
    <h3 align="center"><emp>Latest from Gallery</emp></h3>
    <div class="d-md-flex">
        <a href="images/gallery1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery1.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/gallery2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery2.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/gallery21.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery21.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/gallery4.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery4.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
    </div>
    <div class="d-md-flex">
        <a href="images/gallery5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery5.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/gallery6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery6.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery7.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/gallery8.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery8.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
    </div>
  </section>



  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4"><strong>Types of FLACO Members</strong></h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/gallery18.jpg');">
            </a>
            <div class="text p-4 d-block">
                <div class="meta mb-3">
                <div><a href="#">Sep. 10, 2023</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mb-4"><a href="#">Individual Membership</a></h3>
              <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> OPEN</span> <span><i class="icon-map-o"></i> Kampala</span></p>
              <p>Open to any individual who is interested in supporting the mission of FLACO.</p>
              <p><a href="{{ route('contact')}}">Join Flames of Compassion Uganda <i class="ion-ios-arrow-forward"></i></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/gallery19.jpg');">
            </a>
            <div class="text p-4 d-block">
                <div class="meta mb-3">
                <div><a href="#">Nov. 10, 2023</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mb-4"><a href="#">Family Membership</a></h3>
              <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> OPEN</span> <span><i class="icon-map-o"></i> Kampala Uganda</span></p>
              <p>Open to any family who is interested in supporting the mission of FLACO.</p>
              <p><a href="{{ route('contact')}}">Join Flames of Compassion Uganda <i class="ion-ios-arrow-forward"></i></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/gallery17.jpg');">
            </a>
            <div class="text p-4 d-block">
                <div class="meta mb-3">
                    <div><a href="#">Nov. 10, 2023</a></div>
                    <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mb-4"><a href="#">Corporate Membership</a></h3>
              <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> OPEN</span> <span><i class="icon-map-o"></i> Kampala Uganda</span></p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="{{ route('contact')}}">Join Flames of Compassion Uganda<i class="ion-ios-arrow-forward"></i></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section-3 img" style="background-image: url(images/gallery22.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex">
        <div class="col-md-6 d-flex ftco-animate">
            <div class="img img-2 align-self-stretch" style="background-image: url(images/gallery23.jpg);"></div>
        </div>
        <div class="col-md-6 volunteer pl-md-5 ftco-animate">
            <h3 class="mb-3">Be a volunteer</h3>
            <form action="#" class="volunter-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Your Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Your Email">
        </div>
        <div class="form-group">
          <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
        </div>
      </form>
        </div>
        </div>
    </div>
</section>

@endsection
