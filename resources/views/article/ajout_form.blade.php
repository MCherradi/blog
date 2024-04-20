@extends('layouts.master')

@section('content')

    <div class="col-md-8 offset-md-2 mt-5">
        <center><a href="{{ url('articles') }}" class="btn btn-warning mb-3">Return back</a></center>
        <div class="card">
            <div class="card-header bg-info text-light">Add an article</div>
            <div class="card-body">
                <form action="{{ url('addArticleHandler') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="entre title">
                    </div>
                    <div class="form-group">
                        <label for="">Content</label>
                        <textarea type="text" name="content" cols="30" rows="5" class="form-control" placeholder="entre content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Author</label>
                        <input type="text" name="author" class="form-control" placeholder="entre author name">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-primary" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection