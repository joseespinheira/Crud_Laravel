
<input name="" type="button" onClick="window.open('/','_self')" value="Inicio"><br>
<input name="" type="button" onClick="window.open('/books/create','_self')" value="Criar Books">

<?php echo e(Session::get('message')); ?>

<h1>Books</h1>
<table>
  <thead>
    <tr><td>ID</td><td>Title</td><td>Description</td><td>Ação</td></tr>
  </thead>
  <tbody>
    <?php foreach($books as $book): ?>
      <tr>
        <td>
          <?php echo e($book->id); ?>

        </td>
        <td>
          <h2><a href="/books/<?php echo e($book->id); ?>"><?php echo e($book->title); ?></a></h2>
        </td>
        <td>
          <p><?php echo e($book -> description); ?></p>
        </td>
        <td><input name="" type="button" onClick="window.open('/books/<?php echo e($book->id); ?>/edit','_self')" value="Editar Book">
        <form action="/books/<?php echo e($book->id); ?>" method="POST">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="submit" name="name" value="Apagar">
        </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
