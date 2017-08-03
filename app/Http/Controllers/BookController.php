<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\author;
use App\book;
use File;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $book = book ::all();
        return view ('book.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $author = author::all();
        return view ('book.create',compact('author'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $book = new book;
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->amount = $request->amount;

        if ($request->hasFile('cover')) {
            $books = $request->file('cover');
            $extension = $books->getClientOriginalExtension();
            $filename = str_random(6). ',' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR. '/img';
            $books->move($destinationPath,$filename);
            $book->cover = $filename;

            $book->save();
            //dicreate.blade bag<form> + enctype="multipart/form-data"
            //cover type -> file
            // dd($book);
            return redirect('book');
          
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $book = book::findOrFail($id);
        return view ('book.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = book::findOrFail($id);
        $author = author::all();
        return view ('book.edit',compact('book','author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $book=book::findOrFail($id);
         $book->title=$request->title;
         $book->amount=$request->amount;
         if ($request->hasFile('cover')) {
            $books = $request->file('cover');
            $extension = $books->getClientOriginalExtension();
            $filename = str_random(6). ',' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR. '/img';
            $books->move($destinationPath,$filename);
            $book->cover = $filename;
         $book->save();
         return redirect('book');
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book= book::findOrFail($id);
        $book->delete();
        return redirect('bookbook');
    }
}
