<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ['news' => News::allBrief()]);
    }

    public function detail($id){
        $new = News::find($id);
        return $new->content;
    }
}
