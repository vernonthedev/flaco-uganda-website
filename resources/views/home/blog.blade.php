@extends('layouts.app')

@section('content')

<div class="hero-wrap" style="background-image: url('images/bg_6.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
        </div>
      </div>
    </div>
  </div>


  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">

{{--  start of blog  --}}
@foreach ($blogs as $blog)
    <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
            <a href="{{ url('blog/'.$blog->id) }}" class="block-20" style="background-image: url('{{ asset('uploads/' . $blog->image) }}');"></a>

            <div class="text p-4 d-block">
                <div class="meta mb-3">
                    <div><a href="#">{{ $blog->created_at->format('M d, Y') }}</a></div>
                    <div><a href="#">{{ $blog->posted_by }}</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="{{ url('blog/'.$blog->id) }}">{{ $blog->blog_title }}</a></h3>
                <p>{{ $blog->short_description }}</p>
            </div>
        </div>
    </div>
@endforeach

{{--  End of blog  --}}

      </div>

      {{--  <div class="row mt-5">
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
      </div>  --}}

    </div>
  </section>
@endsection
