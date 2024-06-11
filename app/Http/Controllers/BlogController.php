<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

clas BlogController extends Controller{

  public function index()
  {
    $posts = [
      [
        "title"=> 'postingan pertama',
        "author"=> 'Asni',
        "category"=> 'blog'
      ]
      [
        'title'=> 'postingan kedua',
        'author'=> 'Rahma',
        'category'=> 'blog'
      ]
      [
        'title'=> 'postingan ketiga',
        'author'=> 'Yanti',
        'category'=> 'blog'
      ]
    ];
    return view('blog', ('posts => $posts'));
  }

  public function show($slug)
  {
    return $slug;
  }
}



