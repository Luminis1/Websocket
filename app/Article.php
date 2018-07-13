<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['name', 'author', 'title', 'img'];
    public $timestamps = false;

    public static function getArticles()
    {
        $result = DB::table('articles')
            ->select('articles.*')
            ->orderBy('date_create', 'DESC')
            ->take(5)
            ->get();

        return $result;
    }



}
