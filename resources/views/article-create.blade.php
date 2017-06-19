@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new article</div>
                <div class="panel-body">
                    <form action={!! route('createArticle') !!} method=POST>
                        <input id="title" name="title" type="text" class="form-control" placeholder="Title" value={{ old('title') }}>
                        <input id="content" name="content" type="text" class="form-control" placeholder="Article text goes here." value={{ old('content') }}>
                        <button class="btn btn-default" type="submit">Post this article</button>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
