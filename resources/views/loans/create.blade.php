@extends('app')

@section('content')
<form class="form-horizontal" method="post" action="/loans">
<fieldset>

<!-- Form Name -->
<legend>Nuevo Prestamo</legend>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_id">Libros Disponibles</label>
  <div class="col-md-4">
    <select id="book_id" name="book_id" class="form-control">
      @foreach($books as $book)

        <option value="{{$book->book_id}}">{{$book->BookInfo->title}}</option>

      @endforeach
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="return_date">Fecha de regreso del libro</label>
  <div class="col-md-4">
  <input id="return_date" name="return_date" placeholder="" class="form-control input-md" required="" type="date">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="send"></label>
  <div class="col-md-4">
    <button id="send" name="send" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>

@stop
