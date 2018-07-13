<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class EventInitController extends Controller
{

    public function index()
    {
       return view('articles.eventInit');
    }

    public function eventHandler()
    {

        $file = $_FILES['img'];
        $path = "upload/" . $_FILES['img']['name'];
        move_uploaded_file($file['tmp_name'], $path);

        Article::create([
            'name' => $_POST['name'],
            'title' => $_POST['title'],
            'img' =>  $_FILES['img']['name'],
            'author' => $_POST['author'],
        ]);

        $this->eventInit();

    }


    public function eventInit()
    {
        $articles = Article::getArticles();
        event(new \App\Events\Message($articles));
    }



}
