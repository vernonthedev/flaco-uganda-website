@extends('layouts.app')

@section('content')

<div class="hero-wrap" style="background-image: url('images/about2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home')}}">Home</a></span> <span>Gallery</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Galleries</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-gallery">
      <div class="container">
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
          <div class="d-md-flex">
              <a href="images/gallery9.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery9.jpg);">
                  <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-search"></span>
                  </div>
              </a>
              <a href="images/gallery10.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery10.jpg);">
                  <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-search"></span>
                  </div>
              </a>
              <a href="images/gallery11.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery11.jpg);">
                  <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-search"></span>
                  </div>
              </a>
              <a href="images/gallery13.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/gallery13.jpg);">
                  <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-search"></span>
                  </div>
              </a>
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
