<?php
include 'databaseaccess.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM libri WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Libro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Modifica il libro - ID: <?php echo $id; ?></h2>
        <form action="GestioneModificaLibro.php" method="post">
            <div class="form-group">
                <label for="titolo">Titolo:</label>
                <input type="text" class="form-control" id="titolo" name="titolo" value="<?php echo $row['titolo']; ?>">
            </div>
            <div class="form-group">
                <label for="autore">Autore:</label>
                <input type="text" class="form-control" id="autore" name="autore" value="<?php echo $row['autore']; ?>">
            </div>
            <div class="form-group">
                <label for="anno_pubblicazione">Anno di pubblicazione:</label>
                <input type="text" class="form-control" id="anno_pubblicazione" name="anno_pubblicazione" value="<?php echo $row['anno_pubblicazione']; ?>">
            </div>
            <div class="form-group">
                <label for="genere">Genere:</label>
                <input type="text" class="form-control" id="genere" name="genere" value="<?php echo $row['genere']; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-info">Salva Modifiche</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    } else {
        echo "Libro non trovato";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
