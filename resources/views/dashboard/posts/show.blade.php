@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a class="btn btn-success" href="/dashboard/posts"><i data-feather="arrow-left"></i> Back to my posts</a>
            <a class="btn btn-warning" href="/dashboard/posts/{{ $post->slug }}/edit"><i data-feather="edit"></i> Edit</a>
            {{-- <a class="btn btn-danger" href="/dashboard/posts"><i data-feather="trash"></i> Delete</a> --}}
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('are you sure?')"><i data-feather="trash"></i> Delete</button>
            </form>


            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection
