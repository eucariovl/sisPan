<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
      <a class="btn-floating btn-large waves-effect waves-light red pulse btn modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
<!--Modal para agregar usuario-->
  <div id="modal1" class="modal modal">
    <div class="modal-content">
      <h4 >Agregar Usuario</h4>
      <div class="row">
        <form class="col s12" method="post" action='<?php echo base_url()."welcome/addUser";?>'>
          <div class="row modal-form-row">
            <div class="input-field col s6">
              <input id="nombre" type="text" name="nombre" class="validate" required>
              <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s6">
              <input id="apellidos" name="apellidos" type="text" class="validate" required>
              <label for="apellidos">Apellidos</label>
            </div>
          </div>      
          <div class="row">
            <div class="input-field col s6">
              <input id="telefono" type="tel" name="telefono" class="validate" required>
              <label for="telefono">Teléfono</label>
            </div>
            <div class="input-field col s6">
              <input id="correo" name="correo" type="email" class="validate" required>
              <label for="correo">Correo</label>
            </div>
          </div>   
          <div class="row">
            <div class="input-field col s6">
              <input id="departamento" type="text" name="departamento" class="validate" required>
              <label for="departamento">Departamento</label>
            </div>
            <div class="input-field col s6">
              <input id="comite_municipal" name="comite_municipal" type="text" class="validate" required>
              <label for="comite_municipal">Comité municipal</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="delegacion" type="text" name="delegacion" class="validate" required>
              <label for="delegacion">Delegación</label>
            </div>
            <div class="input-field col s6">
              <input id="comision" name="comision" type="text" class="validate" required>
              <label for="comision">Comisión</label>
            </div>
          </div>  
          <div class="row">
            <div class="input-field col s6">
              <input id="celular" type="text" name="celular" class="validate" required>
              <label for="celular">Teléfono celular</label>
            </div>
            <div class="input-field col s3">
              <input id="password" name="password" type="password" class="validate" required>
              <label for="password">Contraseña</label>
            </div>
            <div class="input-field col s3">
              <input id="nivel" name="nivel" type="text" class="validate" required>
              <label for="nivel">Tipo de usuario</label>
            </div>
          </div> 
          <div class="row">
            <div class="input-field col s6">
            <button class="btn waves-effect light-green darken-2" type="submit">Guardar
              <i class="material-icons right">save</i>
            </button>
          </div>
          <div class="input-field col s6">
            <a class=" modal-action modal-close waves-effect light-green darken-2 btn-flat left">Cerrar
              <i class="material-icons right">close</i>
            </a>
          </div>
          </div>          
        </form>
      </div>
    </div>
  </div>
<!-- Tabla de usuarios-->
<table>
  <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Teléfono</th>
    <th>Correo</th>
    <th>Depto</th>
    <th>Comite</th>
    <th>Delegación</th>
    <th>Comisión</th>
    <th>Celular</th>
    <th></th>
  </tr>
  <?php
          foreach ($data->result() as $user) {
            echo "<tr>";
            echo "<td>$user->nombre</td>";
            echo "<td>$user->apellidos</td>";
            echo "<td>$user->telefono</td>";
            echo "<td>$user->correo</td>";
            echo "<td>$user->departamento</td>";
            echo "<td>$user->comite_municipal</td>";
            echo "<td>$user->delegacion</td>";
            echo "<td>$user->comision</td>";
            echo "<td>$user->celular</td>";
            echo '<td><i class="material-icons red-text center">delete</i></td>';
            echo "</tr>";
          }?> 
</table>  
    </div>
</body>

    <!-- Compiled and minified JavaScript -->
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
     var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });           
  </script>