<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Book;

class BooksController extends Controller
{
    //
  public function index()
  {
    $books = Book::all();
    return view("books.index", compact('books'));
  }
  public function create()
  {
    return view('books.create');
  }
  public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required',
      'description' => 'required',
    ]);
    
    $books = new Book;
    $books->title = $request->title;
    $books->description = $request->description;
    $books->save();
    return redirect('books')->with('message', 'Produto atualizado com sucesso!');

  }
  public function show($id)
  {
    $books = Book::find($id);
    if(!$books){
      abort(404);
    }
    return view('books.details')->with('detailpage', $books);
  }
  public function edit($id)
  {
    $books = Book::find($id);
    if(!$books){
      abort(404);
    }
    return view('books.edit')->with('detailpage', $books);
  }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $books = Book::find($id);
        $books->title = $request->title;
        $books->description = $request->description;
        $books->save();
        return redirect('books')->with('message', 'Book editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Book::find($id);
        $books->delete();
        return redirect('books')->with('message', 'Book apagado com sucesso!');
    }
}
