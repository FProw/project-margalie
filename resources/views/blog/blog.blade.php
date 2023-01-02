@extends('template.template')
@section('content')
  <!-- article area -->
  <main id="site-main">
    <section class="article-area container mx-auto pt-10">
        <h1 class="text-red text-xl mb-1">{{strtoupper($blog->title)}}</h1>
        <div class="flex justify-content-center">
            <img class="borderImg" src="{{asset('assets/Blogs/BlogImages/'.$blog->image )}}" alt="">
        </div>
        <p class="mt-1 text-md">{!! nl2br($blog->content) !!}</p>
    </section>
  </main>
<!-- end article area -->
    
@endsection