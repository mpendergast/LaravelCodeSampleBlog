<div class="panel panel-info">
    <div class="panel-heading">
        <a href={!! action('AuthorController@index', ['id' => $preview['authorId']]) !!}>
            {{$preview['authorName']}}
        </a>
    </div>
    <div class="panel-body">
        <b><a href={!! route('article', ['id' => $preview['articleId']]) !!}> {{$preview['articleTitle']}}</a></b>
        {{ $preview['articleContent'] }}
    </div>
</div>
