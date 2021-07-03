<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Login</title>
    <!-- Importa librerias de estilos de Materialize, DataTable e Iconos -->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/dataTables.materialize.css"/>
    <link type="text/css" rel="stylesheet" href="../css/default.css"/>
    <link rel="icon" type="image/x-icon" href="../fonts/favicon.ico" />
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col s12 m8 offset-m2">
      <div class="card">
        <div class="card-content">
          <span class='card-title'>Access control</span>
          <br>
          <form id='form_login' name='form_login' method="post">
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="email" id='email' class="validate">
                <label for="email" class='active'>Email: </label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="password" name="passwd" id='passwd' class="validate">
                <label for="passwd" class='active'>Password: </label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 center-align">
                <a id="btnLogin" class='waves-effect waves-light btn'>
                  Sing in
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
                                                     -->
    <script type="text/javascript" src="../js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/dataTables.materialize.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="./validate.js"></script>
</body>
</html>