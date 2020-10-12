@extends('layouts.app')

@section('title','Категория')

@section('content')
    <section class="mt-5">
        <div class="container">
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    @include('components.article')
                @endforeach
                @else
                <h1>В данный момент постов нету</h1>
            @endif
        </div>
    </section>
@endsection
