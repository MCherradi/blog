@extends('layouts.master')

@section('content')
    <div class="col-md-10 offset-md-1 mt-5">
        <h1 class="text-center text-primary mb-5">List of articles</h1>
        <center><a href="{{ url('addArticleForm')}}" class="btn btn-success mb-5">Add an article</a></center>
        <table class="table table-dark table-stripped">
            <tr>
                <td>#ID</td>
                <td>Title</td>
                <td>Content</td>
                <td>Author</td>
                <td>Détails</td>
                <td colspan="2">Action</td>
            </tr>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    <td>{{ $article->author }}</td>
                    <td><a href="{{ url('articles',$article->id) }}">En savoir plus</a></td>
                    <td><a href="{{ url('/editArticleForm', $article->id) }}" class="btn btn-success">Modifier</a></td>
                    <td><a href="{{ url('/deleteArticle', $article->id) }}" class="btn btn-danger" onclick="return confirm('etes vouloir sur de supprimer un article')">Supprimer</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection