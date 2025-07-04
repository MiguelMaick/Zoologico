<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menú Principal - Zoológico</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #e8d8c3;
    }

    header {
      background-color: #49ae27;
      color: #ffffff;
    }

    .card-title {
      color: #ffffff;
    }

    .card-text {
      color: #ffffff;
    }

    .card-body {
      background-color: #d4a017;
    }

    .btn-custom {
      background-color: #3b2f2f;
      color: #ffffff;
      border: none;
    }

    .btn-custom:hover {
      background-color: #49ae27;
    }

    .btn-logout {
      background-color: #1e1e1e;
      color: #ffffff;
      border: none;
    }

    .btn-logout:hover {
      background-color: #d4a017;
    }
  </style>
</head>
<body>
  <header class="py-4">
    <div class="container text-center">
      <h1 class="display-5">Sistema de Gestión del Zoológico</h1>
      <p class="lead">Bienvenido al panel administrativo</p>
    </div>
  </header>

  <div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <div class="col">
        <div class="card text-center h-100">
          <div class="card-body">
            <h5 class="card-title"><strong>Especies</strong></h5>
            <p class="card-text">Consulta, filtra y administra las especies del zoológico.</p>
            <a href="especies.html" class="btn btn-custom"><strong>Ir a Especies</strong></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center h-100">
          <div class="card-body">
            <h5 class="card-title"><strong>Hábitats</strong></h5>
            <p class="card-text">Gestiona los hábitats según su clima y continente.</p>
            <a href="habitats.html" class="btn btn-custom"><strong>Ir a Hábitats</strong></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center h-100">
          <div class="card-body">
            <h5 class="card-title"><strong>Zonas</strong></h5>
            <p class="card-text">Administra las zonas del zoológico y su recorrido.</p>
            <a href="zonas.html" class="btn btn-custom"><strong>Ir a Zonas</strong></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center h-100">
          <div class="card-body">
            <h5 class="card-title"><strong>Itinerarios</strong></h5>
            <p class="card-text">Define recorridos y tiempos estimados de visita.</p>
            <a href="itinerarios.html" class="btn btn-custom"><strong>Ir a Itinerarios</strong></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center h-100">
          <div class="card-body">
            <h5 class="card-title"><strong>Guías</strong></h5>
            <p class="card-text">Consulta y edita la información del personal guía.</p>
            <a href="guias.html" class="btn btn-custom"><strong>Ir a Guías</strong></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center h-100">
          <div class="card-body">
            <h5 class="card-title"><strong>Cuidadores</strong></h5>
            <p class="card-text">Administra las áreas y especies asignadas a cuidadores.</p>
            <a href="cuidadores.html" class="btn btn-custom"><strong>Ir a Cuidadores</strong></a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="#" class="btn btn-logout"><strong>Cerrar Sesión</strong></a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
