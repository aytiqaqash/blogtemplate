@extends('layouts.master')
@section('content')
    <header class="masthead" style="background-image: url('{{asset("assets/img/home-bg.jpg")}}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">

            @foreach($posts as $post)
                <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/blog/{{$post->slug}}">
                            <h2 class="post-title">{{$post->title}}</h2>
                            <h3 class="post-subtitle">{{$post->excerpt}}</h3>
                        </a>
                        <p class="post-meta">
                            Posted on {{ $post->created_at }}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4"/>
            @endforeach
            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                    {!! $posts->links() !!}
                </div>
        </div>
    </div>
@endsection
