<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perros Disponibles para Adopción</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<?php include 'navbar.php'; ?>
  <?php include 'db_config.php'; ?>

  <div class="container mt-5">
    <h2 class="text-center">Perros Disponibles para Adopción</h2>
    <div class="row">
      <?php
      $sql = "SELECT * FROM perros";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo '<div class="col-md-4">';
              echo '<div class="card">';
              echo '<img class="card-img-top" src="' . $row["imagen"] . '" alt="' . $row["nombre"] . '">';
              echo '<div class="card-body">';
              echo '<h5 class="card-title">' . $row["nombre"] . '</h5>';
              echo '<p class="card-text">' . $row["descripcion"] . '</p>';
              echo '<a href="#" class="btn btn-primary">Adoptar</a>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
          }
      } else {
          echo "No hay perros disponibles para adopción.";
      }
      $conn->close();
      ?>
    </div>
  </div>
  <div class="container mt-5">
    <h2 class="text-center">Perros Disponibles para Adopción</h2>
    <div class="row">
      <!-- Aquí puedes añadir tarjetas (cards) con información de los perros disponibles -->
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="images/dog1.jpg" alt="Perro 1">
          <div class="card-body">
            <h5 class="card-title">Nombre del Perro</h5>
            <p class="card-text">Descripción breve del perro.</p>
            <a href="#" class="btn btn-primary">Adoptar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="images/dog2.jpg" alt="Perro 2">
          <div class="card-body">
            <h5 class="card-title">Nombre del Perro</h5>
            <p class="card-text">Descripción breve del perro.</p>
            <a href="#" class="btn btn-primary">Adoptar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="images/dog3.jpg" alt="Perro 3">
          <div class="card-body">
            <h5 class="card-title">Nombre del Perro</h5>
            <p class="card-text">Descripción breve del perro.</p>
            <a href="#" class="btn btn-primary">Adoptar</a>
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
