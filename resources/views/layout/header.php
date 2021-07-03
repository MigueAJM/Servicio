
<?php
    /* 
    *   Se comprueba si no existe la variable $_SESSION
    *   Iniciamos una session
    *   Inicializamos la variable $email en false
    */
    if  (!isset($_SESSION)){
      session_start();
      $email = "";
    }
    /* 
    *   La variable $email sera = a la ternaria (condición que disminuye el código),
    *   si existe la variable $_SESSION $email = al valor que tiene la variable $_SESSION en su indice email
    *   de lo contrario sera false
    *   a $id_session se le asigna el valor que nos retorna la función session_id()
    */
    $email = isset($_SESSION["email"]) ? $_SESSION["email"] : "";
    $id_session = session_id();
?>
<!-- ===== header ===== -->
<header class="header">
    <div class="logo grid">
        <img src="../img/logo.jpg" alt="Logo del TecNM-Roque">
        <div><p><?=$email?></p></div>
    </div>
    <!-- ===== menu ===== -->
    <div class="container">
        <nav class="nav">
            <ul class="nav__list grid">
                <li class="nav__item active">
                    <a href="#Home">Home</a>
                </li>
                <?php
                    /* 
                    *   Verificamos si email es diferente de false, de ser asi mostramos en el nav
                    *       -Servicio Social
                    *       -Residencias
                    *   de lo contrario mostramos 
                    *       -categoria1
                    *       -categoria2
                    */
                    if ($email !== ""){
                        echo "<li class='nav__item'><a href='#ServicioSocial'>Servicio Social</a></li>";
                        echo "<li class='nav__item'><a href='#Residencias'>Residencias</a></li>";
                        echo "<li class='nav__item'><a href='../../Access/logout.php'>exit</a></li>";
                    }
                    else{
                        echo "<li class='nav__item'><a download='informa1.pdf'  href='#categoria1'>categoria1</a></li>";
                        echo "<li class='nav__item'><a href='#categoria2'>categoria2</a></li>";
                        echo "<li class='nav__item'><a href='../../Access'>Sing in</a></li>";
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>

