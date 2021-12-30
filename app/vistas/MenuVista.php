<?php include "Head.php" ?>

    <title>Biblioteca</title>
</head>
<body>
    <?php include_once "Header.php" ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php print RUTA_APP."public/img/carousel01.jpg"?>" class="d-block w-100 carousel-img" alt="..." height="550px">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-2">
                        Libros
                    </h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php print RUTA_APP."public/img/carousel02.jpg"?>" class="d-block w-100 carousel-img" alt="..." height="550px">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-2">
                        Autores
                    </h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php print RUTA_APP."public/img/carousel03.jpg"?>" class="d-block w-100 carousel-img" alt="..." height="550px">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-2">
                        Editoriales
                    </h2>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Contenido -->
    <section class="row justify-content-around text-center m-auto mb-5 mt-5">
        <article class="col-5 bg-white rounded shadow pd-3 fw-light">
            <h4 class="my-3">
                <i class="fas fa-users-cog"></i>
                Administración de libros, autores y editoriales
            </h4>
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A aperiam iusto, repudiandae excepturi perspiciatis commodi quidem maxime est voluptas rem magni rerum. Harum corrupti optio asperiores excepturi iste perferendis sunt.
            </p>
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A aperiam iusto, repudiandae excepturi perspiciatis commodi quidem maxime est voluptas rem magni rerum. Harum corrupti optio asperiores excepturi iste perferendis sunt.
            </p>
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A aperiam iusto, repudiandae excepturi perspiciatis commodi quidem maxime est voluptas rem magni rerum. Harum corrupti optio asperiores excepturi iste perferendis sunt.
            </p>
        </article>
        
        <article class="col-5 bg-white rounded shadow pd-3 fw-light">
            <h4 class="my-3">
                <i class="fas fa-phone-square-alt"></i>
                Soporte para lo que necesites
            </h4>
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A aperiam iusto, repudiandae excepturi perspiciatis commodi quidem maxime est voluptas rem magni rerum. Harum corrupti optio asperiores excepturi iste perferendis sunt.
            </p>
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A aperiam iusto, repudiandae excepturi perspiciatis commodi quidem maxime est voluptas rem magni rerum. Harum corrupti optio asperiores excepturi iste perferendis sunt.
            </p>
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A aperiam iusto, repudiandae excepturi perspiciatis commodi quidem maxime est voluptas rem magni rerum. Harum corrupti optio asperiores excepturi iste perferendis sunt.
            </p>
        </article>
    </section>

    <?php include_once "Footer.php" ?>