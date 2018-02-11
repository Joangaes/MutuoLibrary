<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Loans;
use App\User;
use App\Book;
use DB;
use Carbon\Carbon;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $loans = Loans::all();
      //dd($loans[0]->Book->BookInfo->title);
      /*$number_of_loans=count($loans);
      for($x=0;$x<$number_of_loans;$x++)
      {
        dd($loans[$x]['user_id']);
      }*/
        return view('loans.index')
        ->with([
          'loans'=>$loans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $books = Book::where('existence','>','loaned');
      //dd($books[0]->BookInfo());

      return view('loans.create')
      ->with([
        'books'=>$books,
      ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $loans = new Loans($input);
        $loans['user_id']=Auth::id();
        $loans['retrieval_date']= Carbon::now();
        $loans->save();

        $books = Book::findOrFail($input['book_id']);
        $books['loaned'] = $books['loaned']+1;
        $books->save();

        return redirect('/loans')
        ->with([
          'status'=>'success',
          'msj'=>'¡Rentaste un libro!',
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
