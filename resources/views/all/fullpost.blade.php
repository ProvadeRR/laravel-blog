@extends('layouts.app')

@section('title',$post->title)

@section('content')
    <section class="mt-2">
        <div class="container">
            <div class="text-center">
                <h1> {{ $post->title }}</h1>
                <img  src="{{ $post->image }}" alt="" style="width: 200px; height: 200px; ">
            </div>
            <p>{{ $post->description }}</p>
            <p>     Автор: {{ $post->user->name }} Дата создания: {{ $post->created_at->diffForHumans() }}</p>

        @auth
                <form action="{{ route('comentary.create' , $post->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Введите коментарий</label>
                        <textarea class="form-control" name="comentary" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-success">
                </form>
        @endauth
            @guest
                <strong><a href="{{ route('login') }}">Авторизируйтесь</a> , чтобы добавлять коментарии </strong>
            @endguest
            @if(session()->has('success'))
                <div class="alert alert-success mt-2" role="alert">
                    {{ session()->get('success') }}
                </div>
                @elseif(session()->has('error'))
                <div class="alert alert-danger mt-2" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif
            <div>
                @foreach($comentaries as $comentary)
                    <div class="mt-3">
                        <div class="">
                            <div>
                                <strong class="text-gray-dark">{{ $comentary->user->name }}</strong>
                            </div>
                            <strong class="mt-2">{{ $comentary->comentary }}</strong>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
