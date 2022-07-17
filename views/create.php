<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
    <title>My Movies - Publier un film</title>
</head>
<body>
    <!--formulaire html-->
    
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><i class="bi bi-film"></i> Movies</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link "  href="../index.html">Accueil</a>
                  <a class="nav-link active" aria-current="page" href="#">Publier un film</a>

                </div>
              </div>
            </div>
          </nav>

    </header>

    <main>
      <h3>Publier un nouveau film</h3>
      <form class="container-fluid w-50">
        <label for="title" class="form-label">Titre</label>
        <input type="text" name="title" id="title" placeholder="Le titre du film" class="form-control">

        <label for="synopsis" class="form-label">Synopsis</label>
        <textarea name="synopsis" id="synopsis" rows="10" placeholder="Le résumé du film" class="form-control"></textarea>

        <label for="imageUrl" class="form-label">Image</label>
        <input type="url" name="imageUrl" id="imageUrl" placeholder="l'URL de l'image du film" class="form-control">

        <label class="form-label" for="releaseDate">Date de sortie</label>
        <input type="date" name="releaseDate" id="releaseDate" class="form-control">

        <label class="form-label" for="category"></label>
        <select name="categoryId" id="category" class="form-select">
          <option value="" selected>-- Sélectionner une catégorie --</option>
          <option value="1">Horreur</option>
          <option value="2">Drame</option>
          <option value="3">Comédie</option>
        </select>

        <input type="submit" value="Publier" class="btn btn-success mt-3">
      </form>
    </main>
  
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous">
    </script>
</body>
</html>