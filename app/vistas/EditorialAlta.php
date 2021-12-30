<?php include "Head.php" ?>
  <title>Biblioteca - Alta editorial</title>
</head>
<body>
  <?php include_once "Header.php" ?>
  <main class="viewport-height">
    <div class="mw-100 h-auto position-relative">
      <img src="<?php print RUTA_APP."public/img/carousel03.jpg"?>" class="w-100 carousel-img" alt="..." height="200px">
      <h2 class="display-2 position-absolute top-50 start-50 translate-middle w-100 text-center text-light">
          Alta editorial
      </h2>
    </div>

    <section class="row justify-content-around m-auto my-5">
      <article class="col-9 bg-white rounded shadow fw-light p-5 position-relative">
      <a class="btn btn-primary position-absolute top-0 start-0 my-2 ms-3" href='<?php print RUTA_APP."editorial/"; ?>'><i class="fas fa-arrow-left"></i></a>
        
      <form action='<?php print RUTA_APP."editorial/crea/"; ?>' method="POST" class="mt-3">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreAyuda">
          <div id="nombreAyuda" class="form-text">Ingresa el nombre de la editorial.</div>
        </div>

        <div class="mb-3">
          <label for="direccion" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="direccionAyuda">
          <div id="direccionAyuda" class="form-text">Ingresa la dirección de la editorial.</div>
        </div>

        <div class="mb-3">
          <label for="ciudad" class="form-label">Ciudad</label>
          <input type="text" class="form-control" id="ciudad" name="ciudad" aria-describedby="ciudadAyuda">
          <div id="ciudadAyuda" class="form-text">Ingresa la ciudad de la editorial.</div>
        </div>

        <div class="mb-3">
          <label for="pais" class="form-label">País</label>
          <input type="text" class="form-control" id="pais" name="pais" aria-describedby="isdnAyuda">
          <div id="paisAyuda" class="form-text">Ingresa el país de la editorial.</div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success">Crear</button>
        </div>
      </form>
      

      </article>
    </section>
    
  </main>
  <?php include_once "Footer.php" ?>