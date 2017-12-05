
<input name="" type="button" onClick="window.open('/','_self')" value="Inicio"><br>
<input name="" type="button" onClick="window.open('/books/create','_self')" value="Criar Books">

{{ Session::get('message') }}
<h1>Books</h1>
<table>
  <thead>
    <tr><td>ID</td><td>Title</td><td>Description</td><td>Ação</td></tr>
  </thead>
  <tbody>
    @foreach($books as $book)
      <tr>
        <td>
          {{$book->id}}
        </td>
        <td>
          <h2><a href="/books/{{ $book->id }}">{{ $book->title }}</a></h2>
        </td>
        <td>
          <p>{{ $book -> description }}</p>
        </td>
        <td><input name="" type="button" onClick="window.open('/books/{{ $book->id }}/edit','_self')" value="Editar Book">
        <form action="/books/{{ $book->id }}" method="POST">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="name" value="Apagar">
        </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
