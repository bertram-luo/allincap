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
        return DB::table('news')->orderBy('create_at')->take(10)->get();
    }
}
