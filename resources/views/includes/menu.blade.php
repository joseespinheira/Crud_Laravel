<!--
Navbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl}
classes to change when their content collapses behind a button. In combination with other utilities,
you can easily choose when to show or hide particular elements.

For navbars that never collapse, add the .navbar-expand class on the navbar. 
For navbars that always collapse, don’t add any .navbar-expand class.
-->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="navbar-brand" href="#">
        <!--imagem do logo img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""-->
        Bootstrap
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/books">Listar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/books/create">Add Books</a>
            </li>
            <li class="nav-item">
                <!--a class="nav-link disabled" href="#">Disabled</a-->
            </li>
        </ul>
    </div>
</nav>
