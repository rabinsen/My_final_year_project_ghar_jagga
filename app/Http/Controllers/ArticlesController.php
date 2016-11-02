<?php

namespace App\Http\Controllers;
use App\Article;


use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth',['only' => 'create']);
	}

    public function index(){

    	$articles = Article::latest()->get();
    	return view('articles.index', compact('articles'));
    }

    public function show($id){
    	$articles = Article::findOrFail($id);
    	return view('articles.show', compact('articles'));
    }

    public function create(){

    	return view('articles.create');
    }
    public function store(CreateArticleRequest $request){
		$article = new Article($request->all());
		Auth::user()->articles()->save($article);
//    	Article::create($request->all());
    	return redirect('articles');
    	 }
}
