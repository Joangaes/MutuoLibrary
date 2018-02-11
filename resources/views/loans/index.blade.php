@extends('app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <a href="/loans/create">Nuevo Prestamo</a>
      <h1>Lista de Prestamos</h1>
      <table class="table table-striped">
        <tr>
          <th>
            Nombre del rentador
          </th>
          <th>
            Titulo del libro
          </th>
          <th>
            Fecha de Inicio del prestamo
          </th>
          <th>
            Fecha esperada de regreso del prestamo
          </th>
          <th>
            Fecha Regresado
          </th>
        </tr>
        @foreach ($loans as $loan)
        <tr>
            <td>
              {{$loan->User->first_name}} {{$loan->User->last_name}}
            </td>
            <td>
              {{$loan->Book->BookInfo->title}}
            </td>
            <td>
              {{$loan->retrieval_date}}
            </td>
            <td>
              {{$loan->return_date}}
            </td>
            <td>
              {{$loan->real_return_date}}
            </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>


@stop
