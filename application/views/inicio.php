<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
    <div class="login">
    <form class="col s12" method="post" action='<?php echo base_url()."usuario/update";?>'>
      <div class="row">
        <div class="input-field col s6">
           <i class="material-icons prefix">account_circle</i>
          <input id="first_name" name="first_name" type="text" class="validate" required value="<?php $use=$user[0];echo $use->first_name;?>">
          <label for="first_name">Nombre</label>
        </div>
        <div class="input-field col s6">
           <i class="material-icons prefix">account_circle</i>
          <input id="last_name" name="last_name" type="text" class="validate" required value="<?php $use=$user[0];echo $use->last_name;?>">
          <label for="last_name">Apellidos</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="telephone" name="telephone" type="tel" class="validate" required value="<?php $use=$user[0];echo $use->telephone;?>">
          <label for="icon_telephone">Teléfono</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">access_time</i>
          <input id="horario" name="horario" type="text" class="validate" required value="<?php $use=$user[0];echo $use->horario;?>">
          <label for="email">Horario</label>
        </div>
        <div class="=input-field col s12">
          <div id="map"></div>
        </div>  
      </div>
       
        <button class="btn waves-effect light-green darken-2" type="submit" name="action">Actualizar
    <i class="material-icons right">sync</i>
  </button>
  </form>
  </div>
</div>
</div>
</body>

    <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);

  });

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });  
  function buscar(){
  var content = document.getElementById("geolocation-test");

  if (navigator.geolocation)
  {
    navigator.geolocation.getCurrentPosition(function(objPosition)
    {
      var lon = objPosition.coords.longitude;
      var lat = objPosition.coords.latitude;
      document.getElementById('longitud').value=lon;
      document.getElementById('latitud').value=lat;

    }, function(objPositionError)
    {
      switch (objPositionError.code)
      {
        case objPositionError.PERMISSION_DENIED:
          alert("No se ha permitido el acceso a la posición del usuario"); 
        break;
        case objPositionError.POSITION_UNAVAILABLE:
          alert("No se ha podido acceder a la información de su posición.");
        break;
        case objPositionError.TIMEOUT:
          alert("El servicio ha tardado demasiado tiempo en responder.");
        break;
        default:
          alert("Error desconocido.");
      }
    }, {
      maximumAge: 75000,
      timeout: 15000
    });
  }
  else
  {
    alert("Su navegador no soporta la API de geolocalización");
  }
};  
function initMap() {
  // The location of Uluru
  var uluru = {lat: 19.4968732, lng:-99.72326729999999};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}          
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9C6vyT7mAcas5zxhj0NaK2LZpI-ifWbc&callback=initMap">
    </script>  