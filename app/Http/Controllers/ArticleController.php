<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Resources\Article as ArticleResource;
class ArticleController extends Controller
{
    //all articles
    public function index()
    {
        //return Article::all();
        //return Article::paginate(15);
        $article =  Article::paginate(15);
        return ArticleResource::collection($article);
    }
    
    //specific Article
    public function show(Article $article)
    {
        return $article;
    }

    //add article
    public function store(Request $request)
    {
        //return $request;
        $article = Article::create($request->all());
        return response()->json($article,201);
    }

    //update article
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $delete = $article;
        $article->delete();

        return response()->json($delete, 200);
    }
}
