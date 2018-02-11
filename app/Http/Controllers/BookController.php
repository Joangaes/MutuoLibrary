<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\BookInfo;
use App\Author;
use App\User;
use App\Library;
use DB;

class BookController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $books= DB::table('book_infos')->get();
      //dd($books);
        return view('book.index')
        ->with([
        'books'=>$books,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = DB::table('authors')->get();
        $users = DB::table('users')->get();
        $libraries = DB::table('libraries')->get();
        //dd($libraries);
        return view('book.create')
        ->with([
          'authors'=>$authors,
          'users'=>$users,
          'libraries' =>$libraries,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('1');
        $input = $request->all();
        $Book = new Book();
        $BookInfo = new BookInfo();
        $BookInfo['title'] = $input['title'];
        $BookInfo['date_published'] = $input['date_published'];
        $BookInfo['pages'] = $input['pages'];
        $BookInfo['isbn'] = $input['isbn'];
        $BookInfo['genre'] = $input['genre'];
        $BookInfo['editorial'] = $input['editorial'];
        $BookInfo['owner'] = $input['owner'];
        $BookInfo['library_id'] = $input['library_id'];
        $BookInfo->save();
        $Book['author_id'] = $input['author_id'];
        $Book['book_info_id'] = $BookInfo['book_info_id'];
        $Book['existence'] = 1;
        $Book['loaned']=0;
        $Book->save();
        return redirect('/books')
        ->with([
          'status'=>'success',
          'msj'=>'¡Guardaste un nuevo libro!',
        ]);

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
    }
}
