<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PublicController extends Controller
{
    // public $books = [
    //     [
    //         'id' => 1,
    //         'title' => 'LA LIBRERIA DOVE TUTTO E POSSIBILE',
    //         'author' => 'Stephanie Butland',
    //         'description' => 'è un libro assolutamente piacevole, con una protagonista difficile da dimenticare e tantissime citazioni di grandi capolavori e di romanzi da scorpire',
    //     ],
    //     [
    //         'id' => 2,
    //         'title' => 'UNA VITA COME TANTE',
    //         'author' => 'Hanya Yanagihara',
    //         'description' => 'Vasto come un romanzo ottocentesco, brutale e modernissimo per i suoi temi, Una vita come tante è un libro avvincente e ipnotico che ha trascinato lettori e critica per la sua forza narrativa.',
    //     ],[
    //         'id' => 3,
    //         'title' => 'IL LADRO DI ANIME',
    //         'author' => 'Sebastian Fitzek',
    //         'description' => 'Non sono state stuprate. Non sono state torturate. Non sono state uccise. Eppure sono state annientate. Uno psychothriller mozzafiato che in Germania ha venduto 500mila copie.',
    //     ],
    // ];
    public function homepage () {
        return view('welcome');
    }

    public function prodotti () {
        $books = Book::all();

        return view('prodotti',['products'=>$books]);
    }

    public function show (Book $product){
        // foreach ($this->books as $book) {
        //     if ($book['id']==$id) {
                //dd($book);
            return view('detailsProduct',['product'=>$product]);
            //}
        //}
    //abort(404);
}

public function search(Request $request){
    $searchkey=$request->query('chiavediricerca');
    $filterproduct=[];
    $books = Book::all();
    foreach($books as $book){
    //str::of serve a rendere un oggetto stringabileThe new Str::of method returns a Stringable object, so you can use a fluent notation which allows chaining method calls.
    //If, for example, Str::of('some string') returned a string directly, you could not call any additional methods on it, as a string in PHP is not an object.
    
     if(Str::of(Str::lower($book['title']))->contains(Str::lower($searchkey))){
        //if(Str::containsAll($book['title'],[$searchkey])){
        $filterproduct[]=$book;
    }
}
return view('searchpage', ['products' => $filterproduct, 'searchKey' => $searchkey]);

}

}
