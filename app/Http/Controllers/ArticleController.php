<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
	public function articleList()
	{
		$articles = Article::limit(5)->get();
		return view('index',compact('articles'));
	}

	public function details($id)
	{
		$article = Article::find($id);
		return view('single',compact('article'));
	}

	public function archive()
	{
		$articles = Article::paginate(5);
		return view('archive',compact('articles'));
	}
}
