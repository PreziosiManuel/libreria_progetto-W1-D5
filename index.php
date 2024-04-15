<?php
include('navbar.php');
include('databaseaccess.php');
include('funzioni.php');

$books = getAllBooks($conn);

if (isset($_GET['genere'])) {
    $selected_genere = $_GET['genere'];
    $books = getBooksByGenre($conn, $selected_genere);
}

?>

<div style="background-image: url(https://img.freepik.com/premium-vector/book-seamless-pattern-vector-illustration-hand-drawn-background-books-literature-textbooks_514903-2689.jpg);" class="container">

    <h2 class="text-center bg-body-secondary rounded-pill py-3">Elenco dei libri disponibili</h2>

    <?php if ($books): ?>
        <?php displayBooks($books); ?>
    <?php else: ?>
        <p>Nessun libro trovato</p>
    <?php endif; ?>

</div>

<?php
include('footer.php');
?>