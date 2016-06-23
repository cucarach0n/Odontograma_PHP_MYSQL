<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Happy template" />
	<meta name="keywords" content="happy, template" />	
	<link rel="stylesheet" href="css/main.css" type="text/css" />
        <script src="scripts/jquery-2.1.4.js"></script>
        <script src="scripts/angular.js"></script>
        <link href="css/estilosOdontograma.css" rel="stylesheet" type="text/css"/>
	<title>Clinica Odontologica</title>
</head>
<body ng-app="app" >
        <?php
        session_start();
        if ($_SESSION['codper'] != null) {
            $user = $_SESSION['codper'];
            $nombre = null;

            $link = mysqli_connect("localhost","root");
            mysqli_select_db($link, "bd_odontograma");
            $result = mysqli_query($link, "select * from persona where cod_persona = $user");
            while ($row = mysqli_fetch_row($result)) {
                $nombre = $row[1];
            }
        }
        else
        {
            header("location:login.php");
        }
        
        
        ?>
	<div class="wrap">
		<div id="cabecera">
			<div id="detallelogo">
				<h1><a href="#">Clinica<br />Odontologica</a></h1>
			</div>
			<div id="detallesuser">
				<h3><?php echo "Bienvenido $nombre"  ?></h3><br/>
				<a href="login.php">Cerrar secion</a>
			</div>
		</div>
		
            <div id="menu" ng-controller="dientes">
			<center><ul>
				<li><a href="#">Inicio</a></li>
                                <li><a href="registrar_paciente.php">Registrar Paciente</a></li>
                                <li><a href="odontograma.php">Registrar Odontograma</a></li>
				<li><a href="#">Comparar Odontogramas</a></li>
			</ul></center>
		</div>
            <div id="text" >
                <form method="POST" id="form1">
                    <table>
                        <tr>
                            <td>Buscar por DNI</td>
                            <td><input type="text" id="txtbuscar" name="txtbuscar"/></td>
                            <td colspan="3"><input type="button" id="btnbuscar" name="btnbuscar" value="Buscar" /></td>
                        </tr>
                        <tr>
                            <td>Nombre</td>
                            <td><input type="text" id="txtnombre" disabled value="" name="txtnombre"/><input type="hidden" id="txtcodigo" value=""/></td>
                            <td>apellido paterno</td>
                            <td><input type="text" id="txtapellidopaterno" disabled value="" name="txtapellidopaterno"/></td>
                            <td>apellido materno</td>
                            <td><input type="text" id="txtapellidomaterno" disabled value="" name="txtapellidomaterno"/></td>
                        </tr>
                    </table>
                </form> </div>
                <odontogramageneral></odontogramageneral>
            </div>

		<div id="green_bubble">
			<p><a href="#">Acerca de</a><a href="#">Mision</a><a href="#">Vision</a></p>
		</div>
	</div>

	<div id="footer">
		<div class="wrap">
			<div id="bubble"><p>Una linda sonrisa a tu alcanse</p></div>
			<div id="copyright">
				<p>Copyright &copy; 20015</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>

        <!-- Angular Modulos-->
        <script type="text/javascript" src="scripts/modulos/app.js"></script>
        <!-- Angular Controladores-->
        <script type="text/javascript" src="scripts/controladores/controller.js"></script>
        <!--Angular Directives-->
        <script type="text/javascript" src="scripts/directivas/canvasodontograma.js"></script>
        <script type="text/javascript" src="scripts/directivas/opcionescanvas.js"></script>
        <script type="text/javascript" src="scripts/directivas/odontogramaGeneral.js"></script>
        
        <script>
            $btnbuscar = $('#btnbuscar');
            $txtbuscar = $('#txtbuscar');
            $txtnombre = $('#txtnombre');
            $txtapellidopaterno = $('#txtapellidopaterno');
            $txtapellidomaterno = $('#txtapellidomaterno');
            $txtcodigo = $('#txtcodigo');
            $btnbuscar.click(function(){
                $.ajax({
                    url:'odontogramaRegistros.php',
                    dataType:'json',
                    type:'POST',
                    data:{dni:$txtbuscar.val()},
                    success:function(data)
                    {
                        $txtnombre.val(data[0].nombre);
                        $txtapellidopaterno.val(data[0].apellido_paterno);
                        $txtapellidomaterno.val(data[0].apellido_materno);
                        $txtcodigo.val(data[0].cod_persona);
                    }
                });
            });
        </script>
</body>
</html>