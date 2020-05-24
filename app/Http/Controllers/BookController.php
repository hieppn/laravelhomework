<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
function index(){
$books = DB::table("books")->get();
return view("books",["books" => $books]);
}

function store(Request $Request){
	$title = $Request-> input("title");
	$author = $Request-> input("author");
	Db::table('books')->insert(["title"=>$title,"author"=>$author]);
	return redirect('/books');
}
function destroy($ida){
	DB::table('books')-> where ('id', '=', $ida)->delete();
	return redirect('/books');

}

  function create(){
  return view("create");
  }
  function edit($id){
        $books = DB::table('books')->where('id','=',$id)->get();
        return view('update',['books'=>$books]);
    }
    function update(Request $request){
        $id = $request->input('id');
        $title = $request->input('title');
        $author = $request->input('author');
        DB::table('books')->where('id','=',$id)->update(['title'=>$title,'author'=>$author]);
        return redirect('/books');
    }
}
