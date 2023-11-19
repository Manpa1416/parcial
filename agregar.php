
<html lang="en">

<head>
   

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">


   <title>Formulario De Registro</title>
</head>

<body>
   <img class="wave" src="img/">
   <div class="container">
      <div class="img">
         <img src="img/admin.svg">
      </div>
      <div class="login-content">
         <form method="post" action="">
            <img src="img/admin2.svg">
            <h2 class="title">Registro de Usuario</h2>
            <?php

            include("controlador.php");
            ?>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Nombres</h5>
                  <input id="nombres" type="text" class="input" name="nombres">
               </div>
            </div>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Apellidos</h5>
                  <input type="apellidos" id="text" class="input" name="apellidos">
               </div>
            </div>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Usuario</h5>
                  <input type="usuario" id="text" class="input" name="usuario">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="password">
               </div>
               
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Rol</h5>
                  <input type="rol" id="text" class="input" name="rol">
               </div>
            </div>
            <input name="btnregistro2" class="btn" type="submit" value="Registrar">
            <input class="btn" type="button" value="Retroceder" onclick="goBack()">
         </form>
      </div>
   </div>
   <script src="js/fontawesome.js"></script>
   <script src="js/main.js"></script>
   <script src="js/main2.js"></script>
   <script> function goBack() { window.history.back();} </script>

</body>

</html>