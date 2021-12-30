<?php include "Head.php" ?>
  <title>Biblioteca - Alta libro</title>
</head>
<body>
  <?php include_once "Header.php" ?>
  <main class="viewport-height">
    <div class="mw-100 h-auto position-relative">
      <img src="<?php print RUTA_APP."public/img/carousel01.jpg"?>" class="w-100 carousel-img" alt="..." height="200px">
      <h2 class="display-2 position-absolute top-50 start-50 translate-middle w-100 text-center text-light">
          Alta libro
      </h2>
    </div>

    <section class="row justify-content-around m-auto my-5">
      <article class="col-9 bg-white rounded shadow fw-light p-5 position-relative">
      <a class="btn btn-primary position-absolute top-0 start-0 my-2 ms-3" href='<?php print RUTA_APP."libros/"; ?>'><i class="fas fa-arrow-left"></i></a>
        
      <form action='<?php print RUTA_APP."libros/crea/"; ?>' method="POST" class="mt-3">
        <div class="mb-3">
          <label for="titulo" class="form-label">Titulo</label>
          <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="tituloAyuda">
          <div id="tituloAyuda" class="form-text">Ingresa el título del libro.</div>
        </div>

        <div class="mb-3">
          <label for="autor" class="form-label">Autor</label>
          <input type="number" class="form-control" id="autor" name="autor" aria-describedby="autorAyuda">
          <div id="autorAyuda" class="form-text">Ingresa el ID del autor.</div>
        </div>

        <div class="mb-3">
          <label for="editorial" class="form-label">Editorial</label>
          <input type="number" class="form-control" id="editorial" name="editorial" aria-describedby="editorialAyuda">
          <div id="editorialAyuda" class="form-text">Ingresa el ID de la editorial.</div>
        </div>

        <div class="mb-3">
          <label for="isdn" class="form-label">ISDN</label>
          <input type="text" class="form-control" id="isdn" name="isdn" aria-describedby="isdnAyuda">
          <div id="isdnAyuda" class="form-text">Ingresa el ISDN del libro.</div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success">Crear</button>
        </div>
      </form>
      

      </article>
    </section>
    
  </main>
  <?php include_once "Footer.php" ?>