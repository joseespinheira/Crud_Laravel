
<h1>Adicionar novo produto</h1>
<form class="" action="/books" method="POST">
    <input type="text" name="title" value="" placeholder="Title">
    <br>
    <textarea name="description" rows="8" cols="40" placeholder="Description"></textarea>
    <br>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <input type="submit" name="name" value="Salvar">
    <input type="button" value="Voltar" onClick="history.go(-1)">
</form>