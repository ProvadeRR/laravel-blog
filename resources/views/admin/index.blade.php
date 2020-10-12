@extends('admin.layout.admin')

@section('title','Админка | Главная страница')

@section('content')
    <h2>Категории</h2>
    <a type="button" class="btn btn-success" href="{{ route('admin.categories.create') }}">Создать категорию</a>
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
                <th>Название</th>
                <th>Slug</th>
                <th>Количесто статей</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                @include('admin.components.category-item')
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection
