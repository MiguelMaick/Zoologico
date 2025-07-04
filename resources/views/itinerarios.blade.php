<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestión de Itinerarios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header con navegación -->
  <header class="bg-primary py-3 mb-4">
    <div class="container d-flex justify-content-between align-items-center">
      <h1 class="text-white h4 mb-0">Zoológico - Panel de Administración</h1>
      <nav>
        <ul class="nav">
          <li class="nav-item"><a class="nav-link text-white" href="index.html">Menú Principal</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="especies.html">Especies</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="habitats.html">Hábitats</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="zonas.html">Zonas</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="itinerarios.html">Itinerarios</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="guias.html">Guías</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="cuidadores.html">Cuidadores</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="container mt-4">
    <h2 class="mb-4">Gestión de Itinerarios</h2>

    <!-- Filtros -->
    <div class="row mb-3">
      <div class="col-md-4">
        <select class="form-select" id="filtroDuracion">
          <option value="">Todas las duraciones</option>
          <option value="1h">1 hora</option>
          <option value="2h">2 horas</option>
          <option value="3h">3 horas o más</option>
        </select>
      </div>
    </div>

    <!-- Tabla -->
    <table class="table table-bordered">
      <thead class="table-light">
        <tr>
          <th>Nombre del Itinerario</th>
          <th>Duración</th>
          <th>Zonas Incluidas</th>
          <th>Especies Destacadas</th>
          <th>Guía Asignado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Aventura Africana</td>
          <td>2h</td>
          <td>Zona África</td>
          <td>León, Elefante</td>
          <td>María López</td>
          <td><button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarItinerarioModal">Editar</button></td>
        </tr>
        <tr>
          <td>Exploración Polar</td>
          <td>1h</td>
          <td>Zona Ártica</td>
          <td>Oso Polar, Pingüino</td>
          <td>Juan Pérez</td>
          <td><button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarItinerarioModal">Editar</button></td>
        </tr>
      </tbody>
    </table>

    <a href="index.html" class="btn btn-secondary">Volver al menú principal</a>
  </div>

  <!-- Modal de edición -->
  <div class="modal fade" id="editarItinerarioModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Itinerario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Nombre del Itinerario</label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Duración</label>
              <select class="form-select">
                <option>1h</option>
                <option>2h</option>
                <option>3h</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Zonas Incluidas</label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Especies Destacadas</label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Guía Asignado</label>
              <input type="text" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Guardar cambios</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
