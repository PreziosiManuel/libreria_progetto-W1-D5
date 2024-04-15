<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBooks</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.php">

</head>

<body>

    <header class="head">
        <div class="logo fs-5 border-bottom text-center">
            <p>Benvenuto nella library online, dove le parole prendono vita e le storie si intrecciano. Esplora il vasto mondo della letteratura e trova la tua prossima avventura tra le pagine dei nostri libri.</p>
            <img class="w-100" src="https://us.123rf.com/450wm/savo/savo2208/savo220800152/193701123-biblioteca-modello-di-logo-con-un-libro-aperto-e-una-freccia-del-cursore-un-campione-per-siti-web.jpg?ver=6"  alt="" />
        </div>
        <div id="navbarSupportedContent" class="navcol pt-0 d-none d-lg-block">
            <ul>
                <li class="nav-item">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Aggiungi un nuovo libro</button>
                </li>

            </ul>
        </div>
    </header>
        <nav>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Aggiungi un nuovo libro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addBookForm" action="aggiuntaLibri.php" method="post">
                                <div class="form-group">
                                    <label for="bookTitle">Titolo:</label>
                                    <input type="text" class="form-control" id="bookTitle" name="titolo" required>
                                </div>
                                <div class="form-group">
                                    <label for="bookAuthor">Autore:</label>
                                    <input type="text" class="form-control" id="bookAuthor" name="autore" required>
                                </div>
                                <div class="form-group">
                                    <label for="publicationYear">Anno di pubblicazioner:</label>
                                    <input type="text" class="form-control" id="publicationYear"
                                        name="anno_pubblicazione" required>
                                </div>
                                <div class="form-group">
                                    <label for="bookGenre">Genere:</label>
                                    <input type="text" class="form-control" id="bookGenre" name="genere" required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">AGGIUNGI</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </nav>