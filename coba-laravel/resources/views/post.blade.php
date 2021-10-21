@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                
        

                    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                    
                    <img src="https://source.unsplash.com/800x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="image-fluid">
                    <article class="my-3 fs-5">

                        {!! $post->body !!}
            
                    </article>
            
                <a href="/blog" class="d-block text-decoration-none mt-3">Back</a>
            </div>
        </div>
    </div>

    

@endsection