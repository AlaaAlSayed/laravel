<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {


        
        $allPosts = [
            ['title' => 'First Post', 'posted_by'=> 'Ahmed', 'created_at' => '2022-01-20'],
            ['title' => 'Second Post', 'posted_by'=> 'Mohamed', 'created_at' => '2022-01-20'],
            ['title' => 'Third Post', 'posted_by'=> 'Ali', 'created_at' => '2022-01-20'],
        ];

        return view('posts.index', [
            'allPosts' => $allPosts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // dd('test'); any logic after dd won't be executed
        //the logic to store post in the db

        return redirect()->route('posts.index');
    }

    public function show($postId)
    {
        //query in db select * from posts where id = $postId
        $postInfo = [
            'title' => 'First Post', 
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                               Debitis iure, at excepturi nam corrupti amet minima accusamus
                               pariatur quae!Alias, deleniti. Amet impedit sequi aliquam qui', 
            'posted_by'=> 'Ahmed', 
            'email' => 'ahmed@gmail.com' ,
            'created_at' => '2022-01-20'
           ];

        return view('posts.show', [
            'postInfo' => $postInfo ,

        ]);

    }

    public function edit($postId)
    {
        // return $postId;

        // query in db select * from posts where id = $postId
        // then fill the fields with retrived data 

   
        return view('posts.edit');

       
    }

    public function update($postId)
    {
         // query in db update table set ()=() where id = $postId
        
        // return $postId;

        return redirect()->route('posts.index');
    }

    public function destroy($postId)
    {
        // query in db select * from posts where id = $postId
       
        // return $postId;
        return redirect()->route('posts.index');

    }
    
}
