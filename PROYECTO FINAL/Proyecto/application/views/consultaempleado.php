<?php
$data = $this->Modelos->verempleado();
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Registro</title>
    
  </head>
  <body  background="https://raw.githubusercontent.com/infinity416/Ingeneria-Software/master/PROYECTO%20FINAL/Proyecto/application/imagenes/f.jpg">
       <div class="container-fluid slider d-flex row justify-content-center  align-items-center" >
      
      <!--tabla de datos-->
       <div class="card login-form col-md-9 " >
                        <div class="card-body">

  <h1> <center>Empleados</center></h1>
  <form>
      <table class="table table-striped ">
           <tr>
           <th>Folio</th>
          <th>Nombre</th> 
          <th>Primer Apellido</th>
           <th>Segundo Apellido</th>
           <th>Perfil</th> 
          <th>Contraseña</th>
           <th>Colonia</th>
           <th>Calle</th>
           <th>Telefono</th>
          </tr>
      
      <?php
          foreach($data as $fila)
          {
          ?>


           <tr>
           <td class="from  "><?=$fila['folio'];?> </td>
         <td> <?=$fila['nombre'];?> </td> 
         <td> <?=$fila['apellido_1'];?> </td>
         <td> <?=$fila['apellido_2'];?> </td>
         <td> <?=$fila['perfil'];?> </td> 
         <td> <?=$fila['contrasena'];?> </td>
         <td> <?=$fila['colonia'];?> </td>
         <td> <?=$fila['calle'];?> </td> 
         <td> <?=$fila['telefono'];?> </td>
       </tr>
         <tr>
          <td></td>
          <td></td> 
          <td></td>
          <td></td>
          <td></td>
          <td></td> 
          <td></td>
          <td></td>
          <td></td>
         </tr>

         <?php
         }
         ?>
</table>


</form> 

</div>
<br>
                                   <center> <a  type="submit"  href="ex" class="btn btn-light btn-block col-md-6" style="background-color:lightblue">Salir</a>
                                       </center>
                                    <br>
</div>
</div>
      <!--fin tabla-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>