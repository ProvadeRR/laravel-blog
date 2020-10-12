@extends('layouts.app')

@section('title','Главная страница')

@section('content')


    <section class="mt-5">
        <div class="container">
            @if(session()->has('error'))
                <div class="alert alert-danger mt-2" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif
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
