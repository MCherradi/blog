<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    /**
     * Afficher la liste des articles
     */
    public function getAllArticles(){
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Récuperer un article par son id
     */
    public function getArticleByID($id){
        $article = Article::find($id);
        return $article;
    }

    /**
     * Ajouter un article
     */
    public function addArticle(Request $request){
        $art = new Article;
        $art->title = $request->input('title');
        $art->content = $request->input('content');
        $art->author = $request->input('author');
        
        $art->save();
        return redirect('/articles');
    }

    /**
     * Supprimer un article
     */
    public function deleteArticle($id){
        // $art = Article::findOrFail($id);
        // return $art;
        $art = $this->getArticleByID($id);
        $art->delete();
        return redirect('/articles');
    }

    /**
     * Formulaire d'edition de l'article
     */
    public function edit_form($id){
        $art = $this->getArticleByID($id);
        return view('article.edit_form', compact('art'));
    }

    /**
     * Mettre à jour l'article
     */
    public function updateArticle(Request $request, $id){
        $art = new Article;
        $art = $this->getArticleByID($id);
        
        $art->title = $request->input('title');
        $art->content = $request->input('content');
        $art->author = $request->input('author');
        
        $art->update();
        return redirect('/articles');
    }
}
