
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <title>Editar</title>
    
      
</head>
<body background="https://raw.githubusercontent.com/infinity416/Ingeneria-Software/master/PROYECTO%20FINAL/Proyecto/application/imagenes/f.jpg">
<br>
      <br>
      <br>  
      <div class="container-fluid slider d-flex row justify-content-center  align-items-center" >
         
        <div class="card login-form col-md-6" >
            <center><img src="imagenes/l2.png" alt=""  width="400" height="100"></center>
        <form action="cambioemple" method="POST">
        <center>
            <h3 class="card-title text-center">Editar empleado</h3>




       <div class="form-group  col-md-4 ">
        <label for="text">Folio:</label>
        <input type="text" class="form-control" name="folio">
      </div>
      <div class="form-grou  col-md-4">
        <label for="text">Nombre:</label>
        <input type="text" class="form-control" name="nombre">
      </div>
      <div class="form-group  col-md-4">
        <label for="text">Primer Apellido:</label>
        <input type="text" class="form-control" name="ape_1">
        
      </div>
      <div class="form-group  col-md-4">
        <label for="carrera">Segundo Apellido:</label>
        <input type="text" class="form-control" name="ape_2
" >
      </div>
      <div class="form-group  col-md-4">
        <label for="carrera">Perfil:</label>
        <input type="text" class="form-control" name="per" >
      </div>
      <div class="form-group  col-md-4">
        <label for="carrera">Contraseña:</label>
        <input type="text" class="form-control" name="con" >
      </div>
      <div class="form-group  col-md-4">
        <label for="carrera">Colonia:</label>
        <input type="text" class="form-control" name="colon" >
      </div>
      <div class="form-group  col-md-4">
        <label for="carrera">Calle:</label>
        <input type="text" class="form-control" name="call" >
      </div>
      <div class="form-group  col-md-4">
        <label for="carrera">Telefono:</label>
        <input type="text" class="form-control" name="tel" >
      </div>


    
     <center> <input type="submit" name="guardar" class="btn btn-light btn-block col-md-6"
                                        style="background-color:lightblue"></center>

    </form>
  </div>
</div>
</div>
</div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>