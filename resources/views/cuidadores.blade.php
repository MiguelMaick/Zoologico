<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestión de Cuidadores</title>
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
    <h2 class="mb-4">Gestión de Cuidadores</h2>

    <!-- Filtros -->
    <div class="row mb-3">
      <div class="col-md-4">
        <input type="date" class="form-control" id="filtroFecha" placeholder="Filtrar por fecha de ingreso">
      </div>
    </div>

    <!-- Tabla -->
    <table class="table table-bordered">
      <thead class="table-light">
        <tr>
          <th>Nombre del Cuidador</th>
          <th>Área Asignada</th>
          <th>Fecha de Ingreso</th>
          <th>Especies Asignadas</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Carlos Ramírez</td>
          <td>Zona África</td>
          <td>2023-01-10</td>
          <td>León, Elefante</td>
          <td><button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarCuidadorModal">Editar</button></td>
        </tr>
        <tr>
          <td>Ana Torres</td>
          <td>Zona Ártica</td>
          <td>2022-06-15</td>
          <td>Oso Polar, Pingüino</td>
          <td><button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarCuidadorModal">Editar</button></td>
        </tr>
      </tbody>
    </table>

    <a href="index.html" class="btn btn-secondary">Volver al menú principal</a>
  </div>

  <!-- Modal de edición -->
  <div class="modal fade" id="editarCuidadorModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Cuidador</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Área Asignada</label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Fecha de Ingreso</label>
              <input type="date" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Especies Asignadas</label>
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
