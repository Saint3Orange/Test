<?php


namespace App\Http\Controllers\V1;


use App\Book;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;

class BookController extends Controller
{
    public function store(StoreBookRequest $request){
        $data = $request->validated();
        $book = Book::create($data);
        return response()->json($book);
    }

    public function update(){

    }
}
