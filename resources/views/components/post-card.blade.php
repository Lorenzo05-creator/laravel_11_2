<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
        <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-primary">Leggi</a>
    </div>
</div>