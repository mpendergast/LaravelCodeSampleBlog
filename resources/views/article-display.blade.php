@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $article->title }} by
                    <a href={!! route('byAuthor', ['id' => $article->user->id]) !!}>{{ $article->user->name }} </a>
                </div>
                <div class="panel-body">
                    {{ $article->content }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
