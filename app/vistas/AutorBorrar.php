<?php include "Head.php" ?>
  <title>Biblioteca - Eliminar autor</title>
</head>
<body>
  <?php include_once "Header.php" ?>
  <main class="viewport-height">
    <div class="mw-100 h-auto position-relative">
      <img src="<?php print RUTA_APP."public/img/carousel02.jpg"?>" class="w-100 carousel-img" alt="..." height="200px">
      <h2 class="display-2 position-absolute top-50 start-50 translate-middle w-100 text-center text-light">
          Eliminar autor
      </h2>
    </div>

    <section class="row justify-content-around m-auto my-5">
      <article class="col-9 bg-white rounded shadow fw-light p-5 position-relative">
      <a class="btn btn-primary position-absolute top-0 start-0 my-2 ms-3" href='<?php print RUTA_APP."autor/"; ?>'><i class="fas fa-arrow-left"></i></a>
          
        <form action='<?php print RUTA_APP."autor/borrar/"; ?>' method="POST" class="mt-3">
          <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" aria-describedby="nombresAyuda" disabled="true" value="<?php print $data["nombres"]; ?>">
            <div id="nombresAyuda" class="form-text">Nombres del autor.</div>
          </div>

          <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" aria-describedby="apellidosAyuda" disabled="true" value="<?php print $data["apellidos"]; ?>">
            <div id="apellidosAyuda" class="form-text">Apellidos del autor.</div>
          </div>

          <div class="mb-3">
            <label for="nacimiento" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="nacimiento" name="nacimiento" aria-describedby="nacimientoAyuda" disabled="true" value="<?php print $data["nacimiento"]; ?>">
            <div id="nacimientoAyuda" class="form-text">Fecha de nacimiento del autor.</div>
          </div>

          <div class="mb-3">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" aria-describedby="paisAyuda" disabled="true" value="<?php print $data["nacionalidad"]; ?>">
            <div id="nacionalidadAyuda" class="form-text">Nacionalidad del autor.</div>
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