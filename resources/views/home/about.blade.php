@extends('layouts.app')

@section('content')

<div class="hero-wrap" style="background-image: url('images/about.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home')}}">Home</a></span> <span>About</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
        </div>
      </div>
    </div>
  </div>


  <section class="ftco-section">
      <div class="container">
          <div class="row d-flex">
              <div class="col-md-6 d-flex ftco-animate">
                  <div class="img img-about align-self-stretch" style="background-image: url(images/about2.jpg); width: 100%;"></div>
              </div>
              <div class="col-md-6 pl-md-5 ftco-animate">
                  <h2 class="mb-4"><strong>Our Sole Purpose</strong></h2>
                  <p>Our vision is to nurture self-reliant children and empower women for holistic development in the community.</p>
                  <p>At Flames of Compassion Uganda (FLACO), our purpose is to transform lives and communities by breaking down barriers to education and healthcare, empowering women and mothers to be agents of change, and advocating for the rights and equality of every child and woman. Through accessible education, improved healthcare access, women’s empowerment, and advocacy efforts, we envision a future where children’s dreams are nurtured, women thrive, and communities flourish in an environment of compassion, resilience, and equality.</p>
              </div>
          </div>
      </div>
  </section>

  <section class="ftco-counter ftco-intro ftco-intro-2" id="section-counter">

      <div class="container">
        <h2 align="center"><strong>Core Values of Flames of Compassion Uganda</strong></h2>
          <div class="row no-gutters">
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 color-3 align-items-stretch">
                    <div class="text">
                        <h3 class="mb-4">Compassion</h3>
                        <p>We approach our mission with empathy and care, recognizing the importance of supporting both children and women on their journeys to self-reliance and holistic development.</p>

                    </div>
                  </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-2 align-items-stretch">
            <div class="text">
                <h3 class="mb-4">Advocacy</h3>
                <p>We are committed to advocating for the rights and needs of children and women, ensuring that their voices are heard and respected within the community.</p>

            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
                  <h3 class="mb-4">Respect</h3>
                  <p>We value and uphold the dignity and worth of every individual, fostering an environment where respect for one another is at the core of our work.</p>

              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
                  <h3 class="mb-4">Empowerment</h3>
                  <p>We empower both children and women by providing opportunities, resources, and support, enabling them to take control of their lives and futures..</p>

              </div>
            </div>
          </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-3 align-items-stretch">
            <div class="text">
                <h3 class="mb-4">Spirituality</h3>
                <p>We embrace a sense of spiritual connection and purpose in our work, drawing strength from our shared commitment to nurturing self-reliance and holistic development in the community.</p>
                <p><a href="{{ route('contact')}}" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
            </div>
          </div>
        </div>

          </div>
      </div>
  </section>

  <br>


@endsection
