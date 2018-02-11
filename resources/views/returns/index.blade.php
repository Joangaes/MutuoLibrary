@extends('app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Prestamos Activos de {{$first_name}} {{$last_name}}</h1>
      <table class="table table-striped">
        <tr>
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
            Regresar libro
          </th>
        </tr>
        @foreach ($loans as $loan)
        <tr>
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
              <a href="return/{{$loan->loan_id}}/edit">Regresar</a>
            </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  <center>
  {{ $loans->links() }}
  <center>
</div>


@stop
