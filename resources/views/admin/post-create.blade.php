@extends('admin.layout.admin')
@section('title','Админка | Создать пост')

@section('content')
<h2 class="text-center">Создать пост</h2>
<form method="post" action="{{ route('admin.posts.store') }}" enctype='multipart/form-data'>
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Введите название поста</label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Введите slug статьи</label>
        <input type="text" name="slug" class="form-control" id="exampleFormControlInput1" placeholder="Например: my_post" required>
    </div>
    <div class="form-group">
        <label for="validationTooltip04">Выберите категорию</label>
        <select name="category_id" class="custom-select" id="validationTooltip04" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Введите текст для главной страницы</label>
        <textarea name="small_description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>
    <div class="custom-file mb-3">
        <input type="text" value="123" name="image">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Введите основной текст</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Создать статью</a>
</form>
@endsection
