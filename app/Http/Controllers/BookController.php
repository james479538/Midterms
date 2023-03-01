<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(){
        $data = book::all();
        return view('book.index',['books'=>$data]);
    }
}
