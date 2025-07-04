<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestión de Hábitats</title>
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
    <h2 class="mb-4">Gestión de Hábitats</h2>

    <!-- Filtros -->
    <div class="row mb-3">
      <div class="col-md-4">
        <select class="form-select" id="filtroContinente">
          <option value="">Todos los continentes</option>
          <option value="África">África</option>
          <option value="Asia">Asia</option>
          <option value="América">América</option>
          <option value="Antártida">Antártida</option>
        </select>
      </div>
    </div>

    <!-- Tabla -->
    <table class="table table-bordered">
      <thead class="table-light">
        <tr>
          <th>Nombre del Hábitat</th>
          <th>Continente</th>
          <th>Clima</th>
          <th>Especies Asociadas</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Sabana</td>
          <td>África</td>
          <td>Cálido</td>
          <td>León, Elefante</td>
          <td><button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarHabitatModal">Editar</button></td>
        </tr>
        <tr>
          <td>Selva Tropical</td>
          <td>América</td>
          <td>Húmedo</td>
          <td>Tigre, Mono</td>
          <td><button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarHabitatModal">Editar</button></td>
        </tr>
      </tbody>
    </table>

    <a href="index.html" class="btn btn-secondary">Volver al menú principal</a>
  </div>

  <!-- Modal de edición -->
  <div class="modal fade" id="editarHabitatModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Hábitat</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Nombre del hábitat</label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Continente</label>
              <select class="form-select">
                <option>África</option>
                <option>Asia</option>
                <option>América</option>
                <option>Antártida</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Clima</label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Especies asociadas</label>
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