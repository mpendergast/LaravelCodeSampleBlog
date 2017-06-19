<div class="panel panel-info">
    <div class="panel-heading">
        <a href={!! route('article', ['id' => $article->id]) !!}>
            {{ $article->title }}
        </a>
    </div>
    <div class="panel-body">
        {{ $article->preview() }}
    </div>
</div>
