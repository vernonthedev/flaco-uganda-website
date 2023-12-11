@extends('layouts.app')

@section('content')

<div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home')}}">Home</a></span> <span>Contact</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
        </div>
      </div>
    </div>
  </div>


  <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Address:</span> Kampala, Uganda, P.O.BOX 21578, Wakiso District, Uganda East Africa</p>
        </div>
        <div class="col-md-3">
          <p><span>Phone:</span> <a href="tel://+2560393217945">+256 039 3217945</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:info@theflaco.org">info@theflaco.org</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Website</span> <a href="#">theflaco.org</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
            <h4 class="mb-4">Do you have any questions?</h4>
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name" name="name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email" name="email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject" name="subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6" id="map"></div>
      </div>
    </div>
  </section>

@endsection
