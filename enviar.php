<?php
   $destino = "frmweb@sistemasinformaticos.dev";
   $nombre = $_POST["nombre"];
   $correo = $_POST["correo"];
   $telefono = $_POST["telefono"];
   $mensaje = $_POST["mensaje"];
   $contenido = "\nNombre: " . $nombre. "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
   mail($destino,"I.T.P.I.A.I", $contenido);
   header("Location:contactenos.php");
?>

					