<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
   public function index(){
    $book = response()->json(Book::all());
    return $book;
   }

   public function show($id){
    $book = response()->json(Book::find($id));
    return $book;
   }

   public function store(Request $request){
    $book = new Book();
    $book->cim = $request->cim;
    $book->megjelenes_datuma = $request->megjelenes_datuma;
    $book->mufaj = $request->mufaj;
    $book->iroja = $request->iroja;
    $book->ar = $request->ar;
    $book->save();
   }

   public function update(Request $request, $id){
    $book = Book::find($id);
    $book->cim = $request->cim;
    $book->megjelenes_datuma = $request->megjelenes_datuma;
    $book->mufaj = $request->mufaj;
    $book->iroja = $request->iroja;
    $book->ar = $request->ar;
    $book->save();
   }

   public function destroy($id){
    $book = Book::fund($id);
    $book->delete();
   }
}
