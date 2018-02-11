@extends('app')

@section('content')

<form class="form-horizontal" method="post" action="/books ">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset>

<!-- Form Name -->
<legend>Nuevo Libro</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Titulo</label>
  <div class="col-md-4">
  <input id="title" name="title" placeholder="El señor de los anillos" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="author_id">Author</label>
  <div class="col-md-4">
    <select id="author_id" name="author_id" class="form-control">
      @foreach($authors as $author)

        <option value="{{$author->author_id}}">{{$author->first_name}} {{$author->last_name}}</option>

      @endforeach
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date_published">Fecha de publicación</label>
  <div class="col-md-4">
  <input id="date_published" name="date_published" placeholder="" class="form-control input-md" required="" type="date">

  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="genre">Genero</label>
  <div class="col-md-4">
    <select id="genre" name="genre" class="form-control">
      <option value="Thriller">Thriller</option>
      <option value="Romantica">Romantica</option>
      <option value="Aventura">Aventura</option>
      <option value="Terror">Terror</option>
      <option value="Ficciones">Ficciones</option>
      <option value="Ciencia Ficción">Ciencia Ficción</option>
      <option value="Investigación">Investigación</option>
      <option value="Biográfica">Biográfica</option>
      <option value="Infantil">Infantil</option>
      <option value="Autoayuda">Autoayuda</option>
      <option value="Erotica">Erotica</option>
      <option value="Hogar">Hogar</option>
      <option value="Enciclopedia/Manual">Enciclopedia/Manual</option>
      <option value="Política">Política</option>
      <option value="Economia">Economia</option>
      <option value="Marketing">Marketing</option>
      <option value="Sociedad">Sociedad</option>
      <option value="Deportes">Deportes</option>
      <option value="Viajes">Viajes</option>
      <option value="Cultura">Cultura</option>
      <option value="Otros Temas">Otros Temas</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="library_id">Biblioteca</label>
  <div class="col-md-4">
    <select id="library_id" name="library_id" class="form-control">
      @foreach($libraries as $library)

        <option value="{{$library->library_id}}">{{$library->name}}</option>

      @endforeach
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="owner">Dueño del libro</label>
  <div class="col-md-4">
    <select id="owner" name="owner" class="form-control">
      @foreach($users as $user)

        <option value="{{$user->first_name}} {{$user->last_name}}">{{$user->first_name}} {{$user->last_name}}</option>

      @endforeach
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="isbn">ISBN</label>
  <div class="col-md-4">
  <input id="isbn" name="isbn" placeholder="1234-13323-12" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="editorial">Editorial</label>
  <div class="col-md-4">
  <input id="editorial" name="editorial" placeholder="Pascal" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pages">Paginas</label>
  <div class="col-md-4">
  <input id="pages" name="pages" placeholder="200" class="form-control input-md" required="" type="text">

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
