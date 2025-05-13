<?php
include 'db.php';
$resultado = $conexion->query("SELECT * FROM usuarios");

echo '<table class="table table-bordered">';
echo '<thead><tr><th>Nombre</th><th>Correo</th><th>Fecha</th><th>Acciones</th></tr></thead><tbody>';

while ($fila = $resultado->fetch_assoc()) {
  $id = $fila['id'];
  $nombre = htmlspecialchars($fila['nombre'], ENT_QUOTES);
  $correo = htmlspecialchars($fila['correo'], ENT_QUOTES);
  $fecha = $fila['fecha_nacimiento'];

  echo "<tr>
          <td>{$nombre}</td>
          <td>{$correo}</td>
          <td>{$fecha}</td>
          <td>
            <button class='btn btn-warning btn-sm' onclick='abrirModalEditar($id, \"$nombre\", \"$correo\")'>Editar</button>
            <button class='btn btn-danger btn-sm' onclick='eliminarUsuario($id)'>Eliminar</button>
          </td>
        </tr>";
}

echo '</tbody></table>';
?>
