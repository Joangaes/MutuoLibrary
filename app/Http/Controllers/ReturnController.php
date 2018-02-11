<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loans;
use App\Book;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReturnController extends Controller
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

        $loans = Loans::where('user_id','=',Auth::id())->where('real_return_date','=',null)->paginate(15);
        //dd($loans);
        $first_name = Auth::user()->first_name;

        $last_name = Auth::user()->last_name;
        return view('returns.index')
        ->with([
          'loans'=>$loans,
          'first_name'=>$first_name,
          'last_name'=>$last_name,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
      $loans = Loans::findOrFail($id);

      $loans['real_return_date'] = Carbon::now();
      $loans->save();

      $book = Book::findOrFail($loans['user_id']);
      $book['loaned'] = $book['loaned']-1;
      $book->save();

      return redirect('/return')
      ->with([
        'status'=>'success',
        'msj'=>'¡Rentaste un libro!',
      ]);
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
