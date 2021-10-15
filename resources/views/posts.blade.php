@extends('layouts.master')

@section('title', 'content')

@section('content')

    <body>
        <div class="container">
            <div class="blog-post">
                @forelse ($posts as $post )


                    <h2 class="blog-post-title">{{ $post->title }}</h2>
                    <p class="blog-post-meta">{{ $post->posted_at }}</p>
                    <p class="blog-post-meta">Tags :
                        {{-- {{
                        // $arrayTags = json_decode($post->tags);
                        for($i=0; $i < count(json_decode($post->tags));$i++){
                             <a href="#">
                                json_decode($post->tags)[$i] </a>;
                        }


                    }} --}}


                        @foreach (json_decode($post->tags) as $tags)

                            <a href="#">{{ $tags }} </a> /
                        @endforeach

                    </p>
                    {{-- <p class="blog-post-meta">Tags :
                        <a href="#">
                            {{ $arrayTags = json_decode($post->tags)[0] }}</a> /
                        {{-- <a href="href=/blog/{{ json_decode($post->tags)[1] }}"> --}}
                    {{-- {{ $arrayTags = json_decode($post->tags)[1] }}</a> / --}}
                    <img class=" card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                        alt="Thumbnail [200x250]" style="width: 1200px; height: 750px;" src="{{ $post->image }}"
                        data-holder-rendered="true">

                    <p>{!! $post->content !!}</p>
            </div>
        </div>
    @empty
        @endforelse
    </body>
@endsection
