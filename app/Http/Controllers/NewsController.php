<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
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
    public function store(FlyerRequest $request){
        $flyer = $this->user->publish(Flyer::create($request->all()));
        flash()->success("success", "your flyer has success create");
        return redirect(flyer_path($flyer));
    }
    public function show($zip, $street){
        $flyer = Flyer::locatedAt($zip, $street);
        return view("flyers.show", compact('flyer'));
    }
}
