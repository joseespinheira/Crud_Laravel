<head>
  <style>
    body{
      text-align:center;
    }
    table, th{    
      border: 2px solid black;
      border-collapse: collapse;
      text-align: center;
    }
    td{
      border: 2px solid black;
      border-collapse: collapse;
      text-align: center;
    }
    tr.teste{
      font-size: 14pt ;
    }
  </style>
</head>
<body>
  <p>
    <input name="" type="button" onClick="window.open('/','_self')" value="Inicio" style="width:200px">
    <input name="" type="button" onClick="window.open('/books/create','_self')" value="Criar Books" style="width:200px">
  </p>
  
  {{ Session::get('message') }}
  <h1>Books</h1>
  <table style="width:100%">
    <thead>
      <tr class="teste"><td><b>ID</b></td><td><b>Title</b></td><td><b>Description</b></td><td><b>Ação</b></td></tr>
    </thead>
    <tbody>
      @foreach($books as $book)
        <tr>
          <td>
            {{$book->id}}
          </td>
          <td>
            <b><a href="/books/{{ $book->id }}">{{ $book->title }}</a></b>
          </td>
          <td>
            <p>{{ $book -> description }}</p>
          </td>
          <td><input name="" type="button" onClick="window.open('/books/{{ $book->id }}/edit','_self')" value="Editar Book" style="width:100px">
          <form action="/books/{{ $book->id }}" method="POST"  style="text-decoration: none;">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" name="name" value="Apagar" style="width:100px">
          </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>