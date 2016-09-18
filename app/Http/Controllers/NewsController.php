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
        $this->middleware('auth', ['except' => 'detail']);
    }
    public function index(){
        return view('pages.home'); 
    }

    public function create(){
        return view('news.create');
    }

    public function store(NewsRequest $request){
        $news = News::create($request->all());
        flash()->success("success", "your news has success create");
        echo json_encode(['success' => 'success']);
        // redirect done by frontend
        //return redirect("/news/create");
    }

    public function show($id){
        $news = DB::table('news')->select('id','created_at', 'title')->paginate(15);
        return view('news.show', ['news' => $news]);
    }

    public function destroy($id){
        $new = News::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function detail($id){
        $new = News::find($id);
        return $new->content;
    }
}


