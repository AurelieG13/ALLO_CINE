<!DOCTYPE HTML>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <!--encodage permet de lire les car spéciaux-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My movies</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  

    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-film"></i> Movies</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        <a class="nav-link" href="./views/create.php">Publier un film</a>

                    </div>
                </div>
            </div>
        </nav>

    </header>

    <main>
        <h1>My Movies</h1>
        <i class="bi bi-film"></i>
        <h3 class="slogan">Découvrez et partagez des films</h3>
        <img class="logo" src="./Images/paramount_logo.jpg" alt="logo paramount">
        <!--<div>
            <a class="btn btn-primary button" href="./views/create.php">Publier un film </a>
        </div>-->

        <section class="container d-flex">
            <div class="card mx-3" style="width: 18rem;">
                <img src="https://fr.web.img5.acsta.net/r_1920_1080/medias/nmedia/18/64/43/65/19211318.jpg"
                    class="card-img-top" alt="Avatar">
                <div class="card-body">
                    <h5 class="card-title">Avatar</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Aventure</h6>
                    <p class="card-text">Un film avec des gens bleus</p>
                    <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Modifier"><i class="fa-solid fa-pen-clip"></i>
                    </a>
                    <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Supprimer"><i class="fa-solid fa-trash-can"></i>
                    </a>
                </div>
            </div>

            <div class="card mx-3" style="width: 18rem;">
                <img src="https://images.affiches-et-posters.com//albums/3/48400/medium/affiche-film-titanic.jpg"
                    class="card-img-top" alt="Titanic">
                <div class="card-body">
                    <h5 class="card-title">Titanic</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Drame</h6>
                    <p class="card-text">Un film avec un bateau qui coule</p>
                    <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Modifier"><i class="fa-solid fa-pen-clip"></i>
                    </a>
                    <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Supprimer"><i class="fa-solid fa-trash-can"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>



    <footer>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>

</body>

</html>