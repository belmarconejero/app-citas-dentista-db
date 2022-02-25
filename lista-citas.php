<?php  include 'partials/header.php';?>
<h2 class='display-4 text-center'> Listado de citas</h2>
<nav><a class="btn btn-info" href="index.php"><i class="bi bi-arrow-return-left"></i>Añadir cita</a></nav>
​
<div class="table-responsive">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nª Registro</th>
      <th scope="col">Paciente</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Fecha cita</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Modificar</th>
      <th scope="col">Eliminar</th>
      
      
    </tr>
  </thead>
  <tbody>
  <?php 
  include 'listar.php';
  ?>
  </tbody>
</table>
</div>
​
<?php  include 'partials/footer.php';?>