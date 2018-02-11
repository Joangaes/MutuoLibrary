@extends('app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <a href="/books/create">Nuevo libro</a>
      <h1>Lista de Libros</h1>
      <table class="table table-striped">
        <tr>
          <th>
            Titulo
          </th>
          <th>
            Fecha de Publicación
          </th>
          <th>
            Paginas
          </th>
          <th>
            ISBN
          </th>
          <th>
            Genero
          </th>
          <th>
            Editorial
          </th>
          <th>
            Dueño del Libro
          </th>
          <th>
            Biblioteca
          </th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>
            {{$book->title}}
            </td>
            <td>
              {{$book->date_published}}
            </td>
            <td>
              {{$book->pages}}
            </td>
            <td>
              {{$book->isbn}}
            </td>
            <td>
              {{$book->genre}}
            </td>
            <td>
              {{$book->editorial}}
            </td>
            <td>
              {{$book->owner}}
            </td>
            <td>

            </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@stop
