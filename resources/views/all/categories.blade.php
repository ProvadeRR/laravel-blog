@extends('layouts.app')

@section('title','Категории')

@section('content')
    <section class="mt-5">
        <div class="container">
            <ul class="list-group">
               @foreach($categories as $category)
                    <li class="list-group-item d-flex justify-content-between align-items-center mt-3">
                        <a href="{{ route('category.show', $category->slug) }}"> {{ $category->name }}</a>
                        <span class="badge badge-primary badge-pill">{{ $category->posts->count() }}</span>
                    </li>
                @endforeach

            </ul>
        </div>
    </section>
@endsection
