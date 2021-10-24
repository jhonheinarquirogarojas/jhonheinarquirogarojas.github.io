<?php
   $destino = "jhonheinar6@j-web.tk";
   $nombre = $_POST["nombre"];
   $correo = $_POST["correo"];
   $mensaje = $_POST["mensaje"];
   $contenido = "\nNombre: " . $nombre. "\nCorreo: " . $correo .  "\nMensaje: " . $mensaje;
   mail($destino,"Portafolio", $contenido);
   header("Location:index.html");
?>

					