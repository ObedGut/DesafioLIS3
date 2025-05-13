$(document).ready(function () {
    mostrarUsuarios();
  
    $('#formUsuario').on('submit', function (e) {
      e.preventDefault();
      $.post('insert.php', $(this).serialize(), function (respuesta) {
        alert(respuesta);
        $('#formUsuario')[0].reset();
        mostrarUsuarios();
      });
    });
  
    function mostrarUsuarios() {
      $.get('fetch.php', function (data) {
        $('#tablaUsuarios').html(data);
      });
    }
  
    window.eliminarUsuario = function (id) {
      if (confirm('¿Eliminar usuario?')) {
        $.post('delete.php', { id: id }, function (respuesta) {
          alert(respuesta);
          mostrarUsuarios();
        });
      }
    };
  
    window.actualizarUsuario = function (id) {
      const nombre = prompt("Nuevo nombre:");
      const correo = prompt("Nuevo correo:");
      if (nombre && correo) {
        $.post('update.php', { id, nombre, correo }, function (res) {
          alert(res);
          mostrarUsuarios();
        });
      }
    };

    window.abrirModalEditar = function (id, nombre, correo) {
        $('#editarId').val(id);
        $('#editarNombre').val(nombre);
        $('#editarCorreo').val(correo);
        const modal = new bootstrap.Modal(document.getElementById('modalEditar'));
        modal.show();
      };
      
      $('#formEditar').on('submit', function (e) {
        e.preventDefault();
        $.post('update.php', $(this).serialize(), function (res) {
          alert(res);
          const modal = bootstrap.Modal.getInstance(document.getElementById('modalEditar'));
          modal.hide();
          mostrarUsuarios();
        });
      });      
  });
  