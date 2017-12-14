<!doctype html>
<html>
<head>
    @include('includes.head')
    <style>
    .corpo{
        text-align: center;
        width: 100%;
        padding: 20px;
    }
    .conteudo{
        text-align: left;
        display: inline-block;
        /*width:500px;*/
        /*height:300px;*/
        padding: 20px;
        border-color:black;
        border-width:3px;
        border-style: solid;
    }
  </style>
</head>
<body>

    @include('includes.menu')
    <div class="corpo">
        <div class="conteudo">
                @yield('content')
        </div>
    </div>
    
    @include('includes.rodape')

</body>
</html>
