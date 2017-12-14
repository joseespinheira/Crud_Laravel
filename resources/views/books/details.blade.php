@extends('layouts.default')

@section('content')
    <h1>Detalhe:</h1>
    <hr>
    <h2>{{ $detailpage->title }}</h2>
    <p>
        {{ $detailpage->description }}
    </p>

    <br>
    <table style="text-align:center;">
        <tr>
            <td width="100">
                <input type="button" value="Voltar" onClick="history.go(-1)" style="width:100px">
            </td>
            <td width="100">
                <input name="" type="button" onClick="window.open('/books/{{ $detailpage->id }}/edit','_self')" value="Editar" style="width:100px">
            </td>
            <td width="100">
                <form action="/books/{{ $detailpage->id }}" method="POST"  style="text-decoration: none;">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="name" value="Apagar" style="width:100px">
                </form>
            </td>
        </tr>
    </table>
@stop
