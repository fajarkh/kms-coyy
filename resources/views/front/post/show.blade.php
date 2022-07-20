<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Primary Meta Tags -->
    <title>{{ $post->kategori . ' | ' . $post->nama }}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
@include('layouts.user.header')
<div class="page_content">
    <div class="container">

            <div class="container my-5">
                <div class="row">
                    <div class="card">
                        {{-- <img src="{{ asset('storage/' . $post->gambar) }}" alt="" class="img-fluid"> --}}
                        <div class="card-body">
                            <h1 class="card-title">{{ $post->judul }}</h1>
                            <div class="d-flex my-2">
                                <small class="text-muted">by {{ $post->budaya->admin->name }} ・
                                    {{ Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM Y') }}</small>
                            </div>
                            <p>{!! $post->deskripsi !!}</p>
                            {{-- <div class="card-footer bg-transparent d-flex mx-auto">
                                <a href="{{ route('category', $post->category->slug) }}"
                                    class="text-dark">{{ $post->category->name }}</a>
                                <div class="d-flex ml-auto">
                                    @foreach ($post->tags as $item)
                                        <a href="{{ route('tag', $item->slug) }}"
                                            class="badge badge-secondary mr-1">{{ $item->name }}</a>
                                    @endforeach
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- @include('layouts.user.sidebar') --}}
    </div>
</div>
@include('layouts.user.footer')

{{-- <body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body> --}}

{{-- </html> --}}
