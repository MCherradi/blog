@extends('layouts.master')

@section('content')

    <div class="col-md-8 offset-md-2 mt-5">
        <center><a href="{{ url('articles') }}" class="btn btn-warning mb-3">Return back</a></center>
        <div class="card">
            <div class="card-header bg-info text-light">Edit an article</div>
            <div class="card-body">
                <form action="{{ url('editArticleHandler', $art->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="" class="badge badge-success">ID: {{ $art->id }}</label>
                        <input type="hidden" name="id" class="form-control" value="{{ $art->id }}">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $art->title }}">
                    </div>
                    <div class="form-group">
                        <label for="">Content</label>
                        <textarea type="text" name="content" cols="30" rows="5" class="form-control" value="{{ $art->content }}">{{ $art->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Author</label>
                        <input type="text" name="author" class="form-control" value="{{ $art->author }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-primary" value="update">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection