@extends('admin.layout.admin')

@section('title','Админка | Главная страница')

@section('content')
    <h2>Посты</h2>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-success" href="{{ route('admin.posts.create') }}">Создать посты</a>
    @if(session()->has('success'))
        <div class="alert alert-success mt-2" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="table-responsive mt-3">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>№</th>
                <th>Заголовок</th>
                <th>Категория</th>
                <th>Slug</th>
                <th>Доступность</th>
                <th>Автор</th>
                <th>Дата создания</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->avaibility == 1 ? 'Доступен' : 'Не доступен' }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td><div><button type="button" style="border: none;"> <img src="https://icon-icons.com/icons2/624/PNG/32/Create_New-80_icon-icons.com_57345.png"></button> <button type="button" style="border: none;"> <img src="https://icon-icons.com/icons2/10/PNG/32/delete_delete_exit_1577.png"></button>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
