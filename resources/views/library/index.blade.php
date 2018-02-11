@extends('app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <a href="/library/create">Nueva Bibliotea</a>
      <h1>Lista de Bibliotecas</h1>
      <table class="table table-striped">
        <tr>
          <th>
            Nombre
          </th>
          <th>
            Direccion
          </th>
        </tr>
        @foreach ($libraries as $library)
        <tr>
            <td>
            {{$library->name}}
            </td>
            <td>
              {{$library->address}}
            </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>


@stop
