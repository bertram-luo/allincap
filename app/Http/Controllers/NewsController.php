<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use App\News;
use App\Http\Controllers\Traits\AuthorizesUsers;

class NewsController extends Controller
{
    use AuthorizesUsers;
    public function __construct(){
        parent::__construct();
        $this->middleware('auth', ['except' => 'show']);

    }
    public function index(){
        return view('pages.home'); 
    }
    public function create(){
        return view('news.create');
    }
    public function store(NewsRequest $request){
        file_put_contents("newslog", "entering store");
        $news = News::create($request->all());
        file_put_contents("newslog", json_encode($news));
        flash()->success("success", "your news has success create");
        return redirect("/news/create");
    }
    public function show($id){
        //$flyer = Flyer::locatedAt($zip, $street);
        //
        //

        $news = DB::table('news')->paginate(15);

        return view('news.show', ['news' => $news]);
    }

    public function destroy($id){
        $new = News::findOrFail($id)->delete();
        return redirect()->back();
    }

}


