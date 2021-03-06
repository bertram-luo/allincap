<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{

	protected $fillable = [
            'content',
            'title',
    ];

    public static function top(){
        return DB::table('news')->orderBy('created_at', 'desc')->take(10)->get();
    }

    public static function allBrief(){
        return DB::table('news')->select('id', 'created_at', 'title')->orderBy('created_at', 'desc')->get();
    }
}
