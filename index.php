<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de Usuarios</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="container py-5">
  <h2 class="mb-4 text-center">Registro de Usuario</h2>

  <form id="formUsuario" class="border p-4 rounded bg-light">
    <div class="mb-3">
      <label>Nombre completo</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Correo electrónico</label>
      <input type="email" name="correo" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Contraseña</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Fecha de nacimiento</label>
      <input type="date" name="fecha" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Registrar</button>
  </form>

  <hr class="my-5">

  <h3 class="text-center">Usuarios Registrados</h3>
  <div id="tablaUsuarios"></div>

  <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="formEditar">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarLabel">Editar Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" id="editarId">
          <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" id="editarNombre" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Correo</label>
            <input type="email" name="correo" id="editarCorreo" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

  <script src="scripts.js"></script>
</body>
</html>
