<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Article;
use Carbon\Carbon;
use Auth;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return view('articles.lists', array(
        //     'time' => date('Y/m/d H:i:s',time()),
        //     'name' => '<span style="color : red">longlong</span>',
        //     'test' => 'test',
        //     'arrs' => array('arr1', 'arr2')
        //     ));
        // $articles = Article::all();
        if (!Auth::user()) 
        {
            return redirect('/auth/login');
        }
        $user = Auth::user();
        $articles = Article::latest()->published()->where('user_id', '=', $user->id)->get();
        
        return view('articles.index', compact('articles'));
        //return $articles;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()) 
        {
            return redirect('/auth/login');
        }
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateArticleRequest $request)
    {
        $input = $request->all();
        //$this->validate($request, ['title' => 'required | min : 3', 'introduction' => 'required', 'content' => 'required']);
        //$input['introduction'] = mb_substr(Request::get('content'),0,64);
        //$input['published_at'] = Carbon::now();
        $input['user_id'] = Auth::user()->id;

        Article::create($input);
        return redirect('/article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        //dd($article->published_at->diffForHumans());
        // if (is_null($article))
        // {
        //     abort(404);
        // }
        return view('articles.detail', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CreateArticleRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('/article');
    }
}
