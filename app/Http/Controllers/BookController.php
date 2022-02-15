<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function addBook(){
        $books = Book::all();
        return view('addBook', ['books' => $books]);
    }

    public function viewBook(){
        $books = Book::all();
        return view('viewBook', ['books' => $books]);
    }

    public function addBookpost(Request $request){

        $request->validate([
            'judul' => 'required|string|min:5|max:20',
            'penulis' => 'required|string|min:5|max:20',
            'halaman' => 'required|numeric|gt:0',
            'tahun' => 'required|numeric|gt:1999|lt:2022',
        ]);

        Book::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'tahun' => $request->tahun,
        ]);

        return redirect(route('addBook'));
    }

    public function updateBook($id){
        $books = Book::find($id);
        return view('update', ['books' =>$books]);
    }

    public function update(Request $request, $id){
        $books = Book::find($id);

        $request->validate([
            'judul' => 'required|string|min:5|max:20',
            'penulis' => 'required|string|min:5|max:20',
            'halaman' => 'required|numeric|gt:0',
            'tahun' => 'required|numeric|gt:1999|lt:2022',
         ]);

        $books -> update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'tahun' => $request->tahun,
        ]);
        return redirect(route('viewBook'));
    }

    public function delete($id){
        Book::destroy($id);
        return redirect(route('viewBook'));
    }
}
