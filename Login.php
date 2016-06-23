<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">

  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body >
  <section class="container">
    <div class="login">
      <h1>Clinica Odontologica</h1>
      <form method="post">
        <p><input type="text" name="txtdni" value="" placeholder="Ingrese su dni"></p>
        <p><input type="password" name="txtcontrasena" value="" placeholder="Contraseña"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Recuerdame
          </label>
        </p>
        <p class="submit"><input type="submit" name="entrar" value="Login"></p>
      </form>
    </div>
  </section>
    
    <?php
        if ($_POST) {
            
            if (isset($_POST['txtdni']) && isset($_POST['txtcontrasena'])) {
                $dni = $_POST['txtdni'];
                $link = mysqli_connect("localhost","root");
                $tipo =null;
                mysqli_select_db($link, "bd_odontograma");
                $result = mysqli_query($link, "select * from usuario where username='".$dni."'");    
                if (mysqli_num_rows($result) > 0) {
                    $contrasena = $_POST['txtcontrasena'];
                    $usuario = mysqli_query($link, "select * from usuario as u inner join persona as p on u.codpersona = p.cod_persona where u.contrasena='$contrasena' and u.username ='$dni'");    
                    if (mysqli_num_rows($usuario) > 0) {
                        while ($row = mysqli_fetch_row($usuario)) {
                            session_start();
                            $_SESSION['codper'] = $row[5];
                            $tipo = $row[17];
                            if ($tipo == 1) {
                                header("location:inicioPaciente.php");
                            }
                            else if($tipo == 2)
                            {
                                header("location:inicio.php");
                            }
                        }
                        
                        
                    }
                    else
                    {
                        echo "<center>Contreña incorreta ?</center>";
                    }
                    
                }                 
                else {
                    echo "<center><br>Usuario no registrado<br><a href=registrar.php>Registrarse</a></center>";
                }
            }
                
        } 
    ?>
    

</body>
</html>

