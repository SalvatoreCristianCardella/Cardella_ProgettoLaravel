<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function create(){
        $shops=Shop::orderBy('name')->get();
        return view('book-create',compact('shops'));
    }
    public function send(BookRequest $request){
        //$title=$request->input('title');
        //$author=$request->input('author');
        //$description=$request->input('description');
        // if($request->file('img') == null) {
        //     $img = "default-image.jpg";
        // } else {
        //     $img = $request->file('img')->store('public/books');    //devo mettere il file in storage storage/app/public 
        // }
        $book = auth::user()->books()->create([
            'title'=>$request->input('title'),
            'author'=>$request->input('author'),
            'description'=>$request->input('description'),
            //'img'=>$img,
            //'user_id'=>Auth::user()->id,
            'img' => ($request->file('img') == null) ? 'default-image.jpg' : $request->file('img')->store('public/books'),
            
        ]);
        $book->shops()->sync($request->input('shops'));
        return to_route('homepage')->with('message','Book aggiunto correttamente');
    }
    public function edit(Book $product){
        return view('book-edit', ['book' => $product]);
    }
    public function update(Request $request, Book $book){
        $imgBookOldPath=$book->img;
        $book->update([
            'title'=> $request->input('title'),
            'author'=> $request->input('author'),
            'description'=> $request->input('description'),
            'img'=>($request->file('img') == null) ? $book->img : $request->file('img')->store('public/books'),
        ]);
        if($request->file('img') !== null) {
            Storage::delete($imgBookOldPath);
        }
        return to_route('prodotti')->with('message',"Il libro $book->title è stato modificato correttamente");
    }
    public function delete(Book $product){
        $product->delete();
        Storage::delete($product->img); 
        return to_route('prodotti')->with('message', "Il libro $product->title è stato cancellato correttamente!");
    }
}