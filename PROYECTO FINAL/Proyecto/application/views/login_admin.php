<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login/Sign Up</title>
</head>
<body background="https://raw.githubusercontent.com/infinity416/Ingeneria-Software/master/PROYECTO%20FINAL/Proyecto/application/imagenes/f.jpg">
    
  <section>
      <br>
      <br>
      <br>
    <div class="container-fluid slider d-flex row justify-content-center  align-items-center" >
      
                    <div class="card login-form col-md-5 " >
                        <div class="card-body">
                            <center><img src="https://raw.githubusercontent.com/infinity416/Ingeneria-Software/master/PROYECTO%20FINAL/Proyecto/application/imagenes/l2.png" alt=""  width="300" height="100"></center>
                            <h3 class="card-title text-center ">ADMINISTRADOR</h3>
                            <hr>
                            <br>

                                <!--
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                            <center>
                                <form action="paraadmin" method="POST">
                                    <!-- to error: add class "has-danger" -->

                                    <div class="form-group col-md-10">
                                        <label for="text" style="float:left;">Administrador</label>
                                        <input type="text" class="form-control form-control-sm" name="ADMINISTRADOR"
                                            aria-describedby="" id="ADMINISTRADOR">
                                    </div>
                                    <br>
                                    <div class="form-group col-md-10">
                                        <label for="password" style="float:left;">Contraseña</label>
                                        <input type="password" class="form-control form-control-sm" name="CONTRASENA" id="CONTRASENA">
                                    </div>
                                    <br>
                                      <center>
           <input type="submit" name="guardar" class="btn btn-light btn-block col-md-6"
                                        style="background-color:lightblue">
            </center>
                                       
                                    <br>
                                </form>
                            
                            </center>    
                            </div>
                        </div>
                    </div>
            


  </section>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>