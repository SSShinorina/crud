<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Book extends Controller
{
     public function create(){
         return view('create');
     }

     public function store(Request $request){
         $data=$request;
         Book::create($data);
     }

     public function index(){
         $data=Book::all();
         return view('index',['allBook'=> $data]);
     }
     public function edit($name,$title,$author){
         $data=Book::find($name,$title,$author);
         return view('edit', compact($data));

     }

     public function update(Request $request, $name, $title, $author){
         $data=$request;
         $existingdata=User::find($name,$title,$author);
         $existingdata->update($data);

     }
}
