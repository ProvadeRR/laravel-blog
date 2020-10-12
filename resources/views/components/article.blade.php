<div class="jumbotron">
    <p>Категория: <a href="{{ route('category.show', $post->category->slug) }}">{{ $post->category->name }}</a></p>
    <h1 class="display-4">{{ $post->title }}</h1>
    <p class="lead">
        {{ $post->small_description }}
    </p>
    <hr class="my-4" />
    <p>
       Автор: {{ $post->user->name }} Дата создания: {{ $post->created_at->diffForHumans() }}
    </p>
    <a class="btn btn-primary btn-lg" href="{{ route('post.full' , [$post->category->slug,$post->slug]) }}" role="button"
    >Читать далее</a
    >
</div>
