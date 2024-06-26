<?php
include 'databaseaccess.php';

$titolo = $_POST['titolo'];
$autore = $_POST['autore'];
$anno_pubblicazione = $_POST['anno_pubblicazione'];
$genere = $_POST['genere'];

$sql = "INSERT INTO libri (titolo, autore, anno_pubblicazione, genere) VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {

    mysqli_stmt_bind_param($stmt, "ssis", $titolo, $autore, $anno_pubblicazione, $genere);


    if (mysqli_stmt_execute($stmt)) {

        header("Location: index.php?status=success");
        exit();
    } else {

        header("Location: index.php?status=error&message=" . urlencode(mysqli_error($conn)));
        exit();
    }
} else {

    header("Location: index.php?status=error&message=Failed to prepare statement");
    exit();
}


mysqli_stmt_close($stmt);
mysqli_close($conn);
?>