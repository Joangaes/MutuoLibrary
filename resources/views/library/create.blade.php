@extends('app')

@section('content')


<form class="form-horizontal" method="post" action="/library">
<fieldset>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<!-- Form Name -->
<legend>Nueva Biblioteca</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nombre de la biblioteca</label>
  <div class="col-md-4">
  <input id="name" name="name" placeholder="Mutuo" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Direccion</label>
  <div class="col-md-4">
  <input id="address" name="address" placeholder="Juan de la Barrera 50" class="form-control input-md" required="" type="text">

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
