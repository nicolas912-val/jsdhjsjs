<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>
  <?php include 'navbar.php'; ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Bienvenido a Mi Sitio de Perros</h5>
          <p>Todo lo que necesitas saber sobre nuestros amigos peludos</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Adopta un Amigo</h5>
          <p>Encuentra el compañero perfecto para tu hogar</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Cuidados y Accesorios</h5>
          <p>Los mejores productos para el bienestar de tu perro</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container mt-5">
    <h2 class="text-center">Nuestros Servicios</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="images/service1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Adopción</h5>
            <p class="card-text">Ayudamos a encontrar un hogar para perros necesitados.</p>
            <a href="adopcion.php" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="images/service2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Cuidado y Salud</h5>
            <p class="card-text">Consejos y productos para mantener a tu perro sano y feliz.</p>
            <a href="curiosidades.php" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="images/service3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Accesorios</h5>
            <p class="card-text">Encuentra los mejores productos para tu perro.</p>
            <a href="accesorios.php" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <h2 class="text-center">Últimas Noticias</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="media">
          <img class="mr-3" src="images/news1.jpg" alt="Noticia 1">
          <div class="media-body">
            <h5 class="mt-0">Nuevos Productos</h5>
            <p>Hemos añadido una nueva gama de productos para el cuidado de tu perro. ¡Visítanos y descúbrelos!</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="media">
          <img class="mr-3" src="images/news2.jpg" alt="Noticia 2">
          <div class="media-body">
            <h5 class="mt-0">Evento de Adopción</h5>
            <p>Únete a nuestro próximo evento de adopción y encuentra a tu nuevo mejor amigo. ¡Te esperamos!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5 mb-5">
    <h2 class="text-center">Testimonios</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>Gracias a este sitio encontré al mejor compañero. ¡Recomiendo este servicio a todos!</p>
              <footer class="blockquote-footer">Ana Pérez</footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>El proceso de adopción fue muy fácil y rápido. ¡Estamos muy felices con nuestro nuevo amigo!</p>
              <footer class="blockquote-footer">Luis González</footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>Un excelente lugar para encontrar productos de calidad para nuestros perros.</p>
              <footer class="blockquote-footer">María Fernández</footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
