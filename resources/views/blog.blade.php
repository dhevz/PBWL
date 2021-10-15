@extends('layouts.master')

@section('title', 'Blog')

@section('content')




    <div class="row mb-2">
        @forelse ($posts as $post )

            @component('components.card')
                @slot('category')
                    {{ $post->category }}

                @endslot
                @slot('id')
                    {{ $post->id }}

                @endslot
                @slot('title')
                    {{ $post->title }}

                @endslot
                @slot('posted_at')
                    {{ $post->posted_at }}
                @endslot
                @slot('leading')
                    {{ $post->leading }}
                @endslot
                @slot('image')
                    {{ $post->image }}
                @endslot

            @endcomponent

        @empty
        @endforelse
    </div>
@endsection
