@extends('admin.layout.admin')

@section('title','Редактирование категории')

@section('content')
<h2 class="text-center">Создать категорию </h2>
<form action="{{ route('admin.categories.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Название категории</label>
        <input type="text" class="form-control" name="name" id="exampleNameCategory" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Slug для категории</label>
        <input type="category_text" name="slug" class="form-control" id="exampleNameCategory" >
    </div>
    <input type="submit" class="btn btn-success" value="Создать категорию">
</form>
@endsection
