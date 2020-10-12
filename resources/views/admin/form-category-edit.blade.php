@extends('admin.layout.admin')

@section('title','Редактирование категории')

@section('content')
<h2 class="text-center">Редактировать категорию: </h2>
<form action="{{ route('admin.categories.update', $category->id) }}" method="post">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="exampleFormControlInput1">Название категории</label>
        <input type="text" class="form-control" name="name" id="exampleNameCategory" value="{{ $category->name }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Slug для категории</label>
        <input type="category_text" name="slug" class="form-control" id="exampleNameCategory" value="{{ $category->slug }}">
    </div>
    <input type="submit" class="btn btn-success" value="Редактировать">
</form>
@endsection
