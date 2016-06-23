<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Happy template" />
	<meta name="keywords" content="happy, template" />	
	<link rel="stylesheet" href="css/main.css" type="text/css" />
        <script src="scripts/jquery-2.1.4.js"></script>
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
            $distritos = mysqli_query($link, "select * from distrito");
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
                <center>
                <form method="post" enctype="multipart/form-data">
                        <table>
                    <tr>
                        <td>Codigo</td>
                        <td><input type="text" name="txtcodigo" id="txtcodigo" value=""/></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" name="txtnombre" id="txtnombre" /></td>
                    </tr>
                    <tr>
                        <td>Apellido Paterno</td>
                        <td><input type="text" name="txtpaterno" id="txtpaterno" /></td>
                    </tr>
                    <tr>
                        <td>Apellido Materno</td>
                        <td><input type="text" name="txtmaterno" id="txtmaterno" /></td>
                    </tr>
                    <tr>
                        <td>DNI</td>
                        <td><input type="text" name="txtdni" id="txtdni" /></td>
                    </tr>
                    <tr>
                        <td>Fecha Nacimiento</td>
                        <td><input type="text" name="txtfechaNacimiento" id="txtfechaNacimiento" /></td>
                    </tr>
                    <tr>
                        <td>Genero</td>
                        <td><select name="ddlgenero" id="ddlgenero">
                                <option value="F">F</option>
                                <option value="M">M</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Direccion</td>
                        <td><input type="text" name="txtdireccion" id="txtdireccion" /></td>
                    </tr>                    <tr>
                        <td>Distrito</td>
                        <td>
                            <select name="ddldistrito" id="ddldistrito">
                                <?php
                                while ($row = mysqli_fetch_row($distritos)) {
                                    echo "<option value='$row[0]'>$row[1]</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td><input type="text" name="txttelefono" id="txttelefono" /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="txtemail" id="txtemail" /></td>
                    </tr>

                    <tr>
                        <td>Foto</td>
                        <td><input type="file" name="fufoto" id="fufoto" /></td>
                    </tr>
                    <tr>
                        <td colspan="1"><center><input type="submit" name="boton" id="btnguardar" value="Guardar"/><input type="submit" name="boton"  id="btnactualizar" value="Actualizar"/></center>
                        
                        </td>
                    </tr>
                        </table>
                        <table border="1">
                            <th>Nombre</th><th>Apelldio Paterno</th><th>Apellido Materno</th><th>DNI</th><th>Fecha Nacimiento</th><th>Genero</th><th>Direccion</th><th>Telefono</th><th>Email</th><th>Fecha Registro</th><th>Foto</th><th>Modificar</th>
                            <?php
                            // if ($_POST) {
                            $result = mysqli_query($link, "Select * from persona");
                            while ($row = mysqli_fetch_row($result)) {
                                echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[13]</td><td><a href='#' class='aEditar' id='aEditar' value='$row[4]'>Editar</a></td></tr>";
                            }
                            // }
                            ?>
                        </table>    
                </form>
                    
                
                
                </center>
            
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
<?php 
if ($_POST) {
    if ($_POST['boton'] == "Guardar") {
        $txtnombre = $_POST['txtnombre'];
        $txtpaterno = $_POST['txtpaterno'];
        $txtmaterno = $_POST['txtmaterno'];
        $txtdni = $_POST['txtdni'];
        $txtfechaNacimiento = $_POST['txtfechaNacimiento'];
        $ddlgenero = $_POST['ddlgenero'];
        $txtdireccion = $_POST['txtdireccion'];
        $txtdistrito = $_POST['ddldistrito'];
        $txttelefono = $_POST['txttelefono'];
        $txtemail = $_POST['txtemail'];
        $tempFoto = $_FILES['fufoto']['tmp_name'];
        $foto = $_FILES['fufoto']['name'];
        move_uploaded_file($tempFoto, 'fotos/' . $foto);


        $insertarPaciente = "insert into persona values ('','$txtnombre','$txtpaterno','$txtmaterno','$txtdni','$txtfechaNacimiento','$ddlgenero','$txtdireccion','$txttelefono','$txtemail',CURDATE(),1,$txtdistrito,'fotos/$foto')";
        $idPaciente = mysqli_query($link, $insertarPaciente);
        $ultimoCodigo = mysqli_insert_id($link);
        $insertarUsuario = "insert into usuario values ('','$txtdni','$txtdni',CURDATE(),1,$ultimoCodigo)";
        mysqli_query($link, $insertarUsuario);
    }
    if($_POST['boton'] == "Actualizar")
    {
        $txtnombre = $_POST['txtnombre'];
        $txtpaterno = $_POST['txtpaterno'];
        $txtmaterno = $_POST['txtmaterno'];
        $txtdni = $_POST['txtdni'];
        $txtfechaNacimiento = $_POST['txtfechaNacimiento'];
        $ddlgenero = $_POST['ddlgenero'];
        $txtdireccion = $_POST['txtdireccion'];
        $txtdistrito = $_POST['ddldistrito'];
        $txttelefono = $_POST['txttelefono'];
        $txtemail = $_POST['txtemail'];
        $tempFoto = $_FILES['fufoto']['tmp_name'];
        $foto = $_FILES['fufoto']['name'];
        $codpersona = $_POST['txtcodigo'];
        move_uploaded_file($tempFoto, 'fotos/' . $foto);
        
        $actualizarPaciente = "update persona set nombre = '$txtnombre',apellido_paterno = '$txtpaterno',apellido_materno = '$txtmaterno',dni = '$txtdni',fecha_nacimiento ='$txtfechaNacimiento',genero ='$ddlgenero',direccion ='$txtdireccion',telefono = '$txttelefono',email ='$txtemail',1,coddistrito =$txtdistrito,foto = 'fotos/$foto' where cod_persona = $codpersona";

        $actualizarUsuario = "update usuario set username = '$txtdni' where codpersona = $codpersona";
        mysqli_query($link, $actualizarUsuario);
    }
}
?>
    <script>
        
        $editar = $('.aEditar');
        $btnguardar = $('#btnguardar');
        $btnactualizar = $('#btnactualizar');
        
        $txtcodigo = $('#txtcodigo');
        $txtnombre = $('#txtnombre');
        $apellido_paterno = $('#txtpaterno');
        $apellido_materno = $('#txtmaterno');
        $dni = $('#txtdni');
        $fecha_nacimiento = $('#txtfechaNacimiento');
        $genero = $('#ddlgenero');
        $direccion = $('#txtdireccion');
        $telefono = $('#txttelefono');
        $email = $('#txtemail');
        $distrito = $('#ddldistrito');
        $foto = $('#fufoto');

        
        $editar.click(function(){
            $.ajax({
                    url:'odontogramaRegistros.php',
                    dataType:'json',
                    type:'POST',
                    data:{dni:$(this).attr('value')},
                    success:function(data)
                    {
                        console.log(data);
                        $txtcodigo.attr('value',data[0].cod_persona);
                        $txtnombre.val(data[0].nombre);
                        $apellido_paterno.val(data[0].apellido_paterno);
                        $apellido_materno.val(data[0].apellido_materno);
                        $dni.val(data[0].dni);
                        $fecha_nacimiento.val(data[0].fecha_nacimiento);
                        $("#ddlgenero > option[value ="+data[0].genero+ "]").attr('selected','selected');
                        $direccion.val(data[0].direccion);
                        $telefono.val(data[0].telefono);
                        $email.val(data[0].email);
                        $("#ddldistrito > option[value ="+data[0].coddistrito+ "]")

                        
                        //$btnactualizar.prop('disabled',false);
                        //$btnguardar.prop('disabled',true);
                    }
            });
            
        });
        
       /* function actualizar()
        {
            $btnactualizar.prop('disabled',true);
            $btnguardar.prop('disabled',false);
        }*/

    </script>
</body>
</html>