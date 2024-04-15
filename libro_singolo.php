<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<div class="col-lg-3 col-md-4 col-sm-6 mb-4 d-flex justify-content-center" >
    <div  class="card h-100 w-100 d-flex">

        <div class="product-detail-container p-2 flex-column justify-content-center">
            <div style="background-color: #D3D3D3;" class="d-flex align-items-center rounded text-center p-1">
                <h6 class="h5 text-uppercase font-weight-bold">
                    <?php echo $book['titolo']; ?>
                </h6>
            </div>
            <div class="mt-2">
                <blockquote class="author-name " data-author-id="<?php echo $book['id']; ?>">Autore: 
                    <span class="fst-italic"><?php echo $book['autore']; ?></span>
                </blockquote>
            </div>
            <div>
                <blockquote class="author-name " data-author-id="<?php echo $book['id']; ?>">Anno:
                    <span class="fw-lighter"><?php echo $book['anno_pubblicazione']; ?></span>
                </blockquote>
            </div>
            <div>
                <blockquote class="author-name text-break" data-author-id="<?php echo $book['id']; ?>">Genere: 
                    <?php echo $book['genere']; ?>
                </blockquote>
            </div>
            <div class="ms-1"> Voto libro:
                    <i style="color: yellow" class="bi bi-star"></i>
                    <span style="color: yellow"  class="ms-1"><?php echo rand(2, 4) . '.' . rand(0, 9); ?></span>
                </div>
            <hr class="d-flex mt-5">
            <div class="d-flex align-items-center mt-2 ">
                <div class="d-flex">
                    
                        <a href='RimuovereLibro.php?id=<?php echo $book['id']; ?>' class="btn btn-danger ms-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3 " viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </a>
                        <a href='modificazione_libro.php?id=<?php echo $book['id']; ?>' class="btn btn-info ms-2">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    <button class="btn btn-success btn-sm ms-5">
                    Acquista ora <br> €<?php echo number_format(rand(1000, 2999) / 100, 2); ?>
                </button>
                </div>
            </div>
        </div>
    </div>
</div>
