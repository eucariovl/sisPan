  <div class="container">
  <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Agregado correctamente</span>
          <p>Muchas gracias por subir su pago. en un lapso no mayor a 24hrs será aprobado
          Saludos!</p>
          <p>Para cualquier duda o aclaración favor de escribirnos al correo <b>carlos920228@gmail.com</b>
        </div>
      </div>
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
  </script>