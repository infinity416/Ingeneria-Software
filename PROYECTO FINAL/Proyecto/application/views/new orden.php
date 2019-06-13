<!Doctype html>
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
      <!--tabla de datos-->
      <br>
      <br>
      <br>  
      <div class="container-fluid slider d-flex row justify-content-center  align-items-center" >
         
        <div class="card login-form col-md-8" >
            <center><img src="imagenes/l2.png" alt=""  width="400" height="100"></center>
      <form action="Altaorden" method="POST">
          <h3> <label for="inputTitulo "><center>Datos para la orden</center></label>
          <hr></h3>
            <div class="form-row text-muted">
              
                    <div class="form-group col-md-3 ">
                      <label for="inputNombre4">Nombre</label>
                      <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputApellido4">Apellido</label>
                      <input type="text" class="form-control" name="ape" >
                    </div>
                  </div>
            <br>
                  <h3> <label for="inputTitulo "><center>Vivienda</center></label>
                    <hr></h3>
                    <div class="form-row ">
            <div class="form-group col-md-4">
              <label for="text">Colonia</label>
              <input type="text" class="form-control" name="colo">
            </div>
              <div class="form-group col-md-3">
                <label for="text">Calle</label>
                <input type="text" class="form-control" name="cal">
              </div>
              <div class="form-group col-md-2">
                  <label for="inputZip">Numero Exterior</label>
                  <input type="text" class="form-control" name="num_ext">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Numero Interior</label>
                    <input type="text" class="form-control" name="num_int">
                  </div>
              <div class="form-group col-md-3">
                  <label for="inputCity">Telefono</label>
                  <input type="text" class="form-control" name="cel">
                </div>
            </div>

              <br>
                  <h3> <label for="inputTitulo "><center>Orden</center></label>
                    <hr></h3>

                    <div class="form-row ">
                     <div class="form-group col-md-4">
    <label for="exampleFormControlSelect1">Platillos</label>
    <select class="form-control" name="pla">
      <option>Empanadas</option>
      <option>Jugo de carne</option>
      <option>Choripan</option>
      <option>Ensaladas</option>
      <option>Milanesas</option>
      <option>Pastas caseras</option>
      <option>Paquetes de parrilla</option>
      <option>Alfajores</option>
      <option>Postre italiano de la Nonna</option>
    </select>

    <br>
      <div class="form-group col-md-10">
                <label for="date">Fecha</label>
                <input type="date" name="fech" class="form-control" placeholder="">
              </div>
    </div>
</div>


            <br>
            <br>
           
            
            
           <center><input type="submit" name="guardar" class="btn btn-light btn-block col-md-6"
                                        style="background-color:lightblue"></center>
            <hr>
      
        </form>
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