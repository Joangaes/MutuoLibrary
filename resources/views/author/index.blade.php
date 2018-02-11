@extends('app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <a href="/author/create">Nuevo Autor</a>
      <h1>Lista de Autores</h1>
      <table class="table table-striped">
        <tr>
          <th>
            Nombre
          </th>
          <th>
            Apellido
          </th>
        </tr>
        @foreach ($authors as $author)
        <tr>
            <td>
            {{$author->first_name}}
            </td>
            <td>
              {{$author->last_name}}
            </td>
        </tr>
        @endforeach
      </table>
    </div>

  </div>
  <center>
  {{ $authors->links() }}
  <center>
</div>




@stop
