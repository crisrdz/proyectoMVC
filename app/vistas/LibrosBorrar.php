<?php include "Head.php" ?>
  <title>Biblioteca - Eliminar libro</title>
</head>
<body>
  <?php include_once "Header.php" ?>
  <main class="viewport-height">
    <div class="mw-100 h-auto position-relative">
      <img src="<?php print RUTA_APP."public/img/carousel01.jpg"?>" class="w-100 carousel-img" alt="..." height="200px">
      <h2 class="display-2 position-absolute top-50 start-50 translate-middle w-100 text-center text-light">
          Eliminar libro
      </h2>
    </div>

    <section class="row justify-content-around m-auto my-5">
      <article class="col-9 bg-white rounded shadow fw-light p-5 position-relative">
        <a class="btn btn-primary position-absolute top-0 start-0 my-2 ms-3" href='<?php print RUTA_APP."libros/"; ?>'><i class="fas fa-arrow-left"></i></a>
          
        <form action='<?php print RUTA_APP."libros/borrar/"; ?>' method="POST" class="mt-3">
          <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="tituloAyuda" disabled="true" value="<?php print $data["titulo"]; ?>">
            <div id="tituloAyuda" class="form-text">Título del libro.</div>
          </div>

          <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="number" class="form-control" id="autor" name="autor" aria-describedby="autorAyuda" disabled="true" value="<?php print $data["autor"]; ?>">
            <div id="autorAyuda" class="form-text">ID del autor del libro.</div>
          </div>

          <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="number" class="form-control" id="editorial" name="editorial" aria-describedby="editorialAyuda" disabled="true" value="<?php print $data["editorial"]; ?>">
            <div id="editorialAyuda" class="form-text">ID de la editorial del libro.</div>
          </div>

          <p class="text-danger fw-normal my-3">ADVERTENCIA: Una vez borrado el registro NO se podrá recuperar.</p>

          <input type="hidden" value="<?php print $data["id"]; ?>" name="id">
          
          <div class="text-center">
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </div>
        </form>


      </article>
    </section>
    
  </main>
  <?php include_once "Footer.php" ?>