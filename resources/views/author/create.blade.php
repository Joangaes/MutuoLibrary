@extends('app')

@section('content')
<form class="form-horizontal"method="post" action='/author'>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset>

<!-- Form Name -->
<legend>Autores</legend>

<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label" for="first_name">Nombre</label>
  <div class="col-md-4">
  <input id="first_name" name="first_name" placeholder="John" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="last_name">Apellido</label>
  <div class="col-md-4">
  <input id="last_name" name="last_name" placeholder="Tolkien" class="form-control input-md" required="" type="text">

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
