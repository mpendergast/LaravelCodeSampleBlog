@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Articles by {{ $author->name }}</div>
                <div class="panel-body">
                    @each('partials.article-preview', $articles, 'article')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
