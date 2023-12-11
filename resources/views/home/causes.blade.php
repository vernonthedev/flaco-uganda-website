@extends('layouts.app')

@section('content')

<div class="hero-wrap" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Causes</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Causes</h1>
        </div>
      </div>
    </div>
  </div>


  <section class="ftco-section">
    <div class="container">
        <h2><strong>Main Objectives</strong></h2>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                      <a href="#" class="img" style="background-image: url(images/cause-1.jpg);"></a>
                      <div class="text p-3 p-md-4">
                          <h3><a href="#">Shelter and Safe Housing</a></h3>
                          <p>Collaborate with local shelters or construct safe housing facilities for homeless children. Provide shelter, nutritious meals, and a secure environment for children in need.</p>

                      </div>
                  </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                      <a href="#" class="img" style="background-image: url(images/gallery20.jpg);"></a>
                      <div class="text p-3 p-md-4">
                          <h3><a href="#">Establish Educational Partnerships</a></h3>
                          <p>Collaborate with local schools, educational institutions, and organizations to create partnerships that provide scholarships and educational resources to underprivileged children</p>


                      </div>
                  </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                      <a href="#" class="img" style="background-image: url(images/gallery7.jpg);"></a>
                      <div class="text p-3 p-md-4">
                          <h3><a href="#">Community Learning Centers</a></h3>
                          <p>Set up community-based learning centers where children can access educational support, including tutoring and mentoring, to supplement their formal education.</p>


                      </div>
                  </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                      <a href="#" class="img" style="background-image: url(images/gallery8.jpg);"></a>
                      <div class="text p-3 p-md-4">
                          <h3><a href="#">Mobile Educational Units</a></h3>
                          <p>Deploy mobile units equipped with educational materials and teachers to reach remote and underserved areas, ensuring that education is accessible to all.</p>


                      </div>
                  </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                      <a href="#" class="img" style="background-image: url(images/gallery2.jpg);"></a>
                      <div class="text p-3 p-md-4">
                          <h3><a href="#">Parental Engagement</a></h3>
                          <p>Promote parental involvement in children’s education through workshops and awareness campaigns, emphasizing the importance of education in breaking the cycle of poverty.</p>


                      </div>
                  </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                      <a href="#" class="img" style="background-image: url(images/gallery9.jpg);"></a>
                      <div class="text p-3 p-md-4">
                          <h3><a href="#">Educational Resources</a></h3>
                          <p>Create a resource center or library where children can access textbooks, study materials, and computers for research and assignments. Organize tutoring programs and homework assistance to ensure students receive additional educational support.</p>


                      </div>
                  </div>
            </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
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
