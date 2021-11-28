@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                
        

                    <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                    
                    @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="image-fluid">
                    </div>
                    @else
                        <img src="https://source.unsplash.com/800x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="image-fluid">
                    @endif

                        {!! $post->body !!}
            
                    </article>
            
                <a href="/blog" class="d-block text-decoration-none mt-3">Back</a>
            </div>
        </div>
    </div>

    

@endsection