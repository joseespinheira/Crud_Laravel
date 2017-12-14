@extends('layouts.default')

@section('content')
    <h1>Adicionar novo produto</h1>
    <form class="" action="/books" method="POST">
        <input type="text" name="title" value="" placeholder="Titulo">
        <br>
        <textarea name="description" rows="7" cols="40" placeholder="Descrição"></textarea>
        <br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="name" value="Salvar">
        <input type="button" value="Voltar" onClick="history.go(-1)">
    </form>
    
@stop