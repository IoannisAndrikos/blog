@extends('layouts.app')

@section('content')

@include('posts._header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if ($posts->count())
        @include('layouts.post-featured-card', ['post' => $posts[0]])
        <div class="lg:grid lg:grid-cols-6">
            @foreach ($posts->skip(1) as $post)
                @if ($loop->iteration < 3)
                    @include('layouts.post-card',['post' => $post,'span' => 'col-span-3'])
                @else
                    @include('layouts.post-card',['post' => $post,'span' => 'col-span-2'])
                @endif
            @endforeach
        </div>
        {{$posts->links()}}
    @endif
</main>
@endsection
