<?php include "Head.php" ?>
  <title>Biblioteca - Libros</title>
</head>
<body>
  <?php include_once "Header.php" ?>
  <main class="viewport-height">
    <div class="mw-100 h-auto position-relative">
      <img src="<?php print RUTA_APP."public/img/carousel01.jpg"?>" class="w-100 carousel-img" alt="..." height="200px">
      <h2 class="display-2 position-absolute top-50 start-50 translate-middle w-100 text-center text-light">
          Lista libros
      </h2>
    </div>

    
      <!-- Contenido -->
    <section class="row justify-content-around m-auto my-5">
      <article class="col-9 bg-white rounded shadow fw-light pt-3 text-center">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Editorial</th>
                <th scope="col">Modificar</th>
                <th scope="col">Borrar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              for ($i=0; $i < count($data); $i++) { 
                print "<tr>";
                print "<td>".$data[$i]["id"]."</td>";
                print "<td>".$data[$i]["titulo"]."</td>";
                print "<td>".$data[$i]["autor"]."</td>";
                print "<td>".$data[$i]["editorial"]."</td>";
                print "<td><a class='btn btn-primary' href='".RUTA_APP."libros/modificar/".$data[$i]["id"]."'><i class='fas fa-user-edit'></i> </a></td>";
                print "<td><a class='btn btn-danger' href='".RUTA_APP."libros/borrar/".$data[$i]["id"]."'><i class='fas fa-trash-alt'></i></a></td>";
                print "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
        <a class='btn btn-success m-2 mb-4' href='<?php print RUTA_APP."libros/crea/"; ?>'>Crear un libro <i class="fas fa-plus"></i></a>
      </article>
    </section>
  </main>
  
  <?php include_once "Footer.php" ?>