@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            
    

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all My Posts</a>

                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>

                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
                
                <img src="https://source.unsplash.com/800x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="image-fluid mt-3">
                <article class="my-3 fs-5">

                    {!! $post->body !!}
        
                </article>
        
            <a href="/blog" class="d-block text-decoration-none mt-3">Back</a>
        </div>
    </div>
</div>

@endsection