<h1>Editar produto</h1>
<form action="/books/{{ $detailpage->id }}" method="POST">
    <input type="text" name="title" value="{{ $detailpage->title }}" placeholder="title">
    <br>
    <textarea name="description" rows="8" cols="40" placeholder="description">{{ $detailpage->description }}</textarea>
    <br>
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="name" value="Salvar">
    <input type="button" value="Voltar" onClick="history.go(-1)">
</form>