<div class="container">
<div class="login">

	<table class="responsive-table">
        <thead>
          <tr>
              <th>Fecha pago</th>
              <th>Fecha vencimiento</th>
              <th>Aprovado</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($pagos->result() as $pago) {
          	$x='No';
          	if($pago->approved=='1'){
          		$x="Sí";}
          	echo "<tr>";
          	echo "<td>$pago->date</td>";
          	echo "<td>$pago->end_subscription</td>";
          	echo "<td>$x</td>";
          	echo "</tr>";
          }?> 
        </tbody>
      </table>
</div>
</div>
</BODY>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);

  });

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });                  
  </script>