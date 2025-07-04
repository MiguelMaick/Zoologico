<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestión de Especies</title>
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
    <h2 class="mb-4">Gestión de Especies</h2>

    <!-- Filtros -->
    <div class="row mb-3">
      <div class="col-md-3">
        <input type="text" class="form-control" id="filtroNombre" placeholder="Buscar por nombre">
      </div>
      <div class="col-md-3">
        <select class="form-select" id="filtroTipo">
          <option value="">Todos los tipos</option>
          <option value="Mamífero">Mamífero</option>
          <option value="Ave">Ave</option>
          <option value="Reptil">Reptil</option>
        </select>
      </div>
      <div class="col-md-3">
        <select class="form-select" id="filtroHabitat">
          <option value="">Todos los hábitats</option>
          <option value="Sabana">Sabana</option>
          <option value="Selva">Selva</option>
          <option value="Ártico">Ártico</option>
        </select>
      </div>
      <div class="col-md-3">
        <select class="form-select" id="filtroZona">
          <option value="">Todas las zonas</option>
          <option value="África">África</option>
          <option value="Asia">Asia</option>
          <option value="Zona Fría">Zona Fría</option>
        </select>
      </div>
    </div>

    <!-- Tabla -->
    <table class="table table-bordered" id="tablaEspecies">
      <thead class="table-light">
        <tr>
          <th>Nombre</th>
          <th>Nombre Científico</th>
          <th>Tipo</th>
          <th>Hábitat</th>
          <th>Zona</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>León</td>
          <td>Panthera leo</td>
          <td>Mamífero</td>
          <td>Sabana</td>
          <td>África</td>
          <td><button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal">Editar</button></td>
        </tr>
        <tr>
          <td>Tigre de Bengala</td>
          <td>Panthera tigris tigris</td>
          <td>Mamífero</td>
          <td>Selva</td>
          <td>Asia</td>
          <td><button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal">Editar</button></td>
        </tr>
        <tr>
          <td>Pingüino Emperador</td>
          <td>Aptenodytes forsteri</td>
          <td>Ave</td>
          <td>Ártico</td>
          <td>Zona Fría</td>
          <td><button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal">Editar</button></td>
        </tr>
      </tbody>
    </table>

    <a href="index.html" class="btn btn-secondary">Volver al menú principal</a>
  </div>

  <!-- Modal de edición -->
  <div class="modal fade" id="editarModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Especie</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre">
            </div>
            <div class="mb-3">
              <label for="cientifico" class="form-label">Nombre Científico</label>
              <input type="text" class="form-control" id="cientifico">
            </div>
            <div class="mb-3">
              <label for="tipo" class="form-label">Tipo</label>
              <select class="form-select" id="tipo">
                <option>Mamífero</option>
                <option>Ave</option>
                <option>Reptil</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="habitat" class="form-label">Hábitat</label>
              <input type="text" class="form-control" id="habitat">
            </div>
            <div class="mb-3">
              <label for="zona" class="form-label">Zona</label>
              <input type="text" class="form-control" id="zona">
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
