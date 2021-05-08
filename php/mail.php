<?php
//Enviar la informacion al correo
    $destinatario = 'adonysmundotech@gmail.com, shantylove@gmail.com';
    $mensaje = 'mensaje';
    $correo  = 'correo';
    $nombre  = 'nombre';
if (!$_POST) {
    //No se realizara nada
?>
<?php
}
else {
    //Recoleccion de los datos
    $cuerpo .= "Nombre: "  . $_POST["nombre"]   . "\r\n"; 
    $cuerpo .= "Correo: "  . $_POST["correo"]   . "\r\n";
	$cuerpo .= "Mensaje: " . $_POST["mensaje"]  . "\r\n";
	//Metadatos del envio
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    //Pagina de confirmacion
    include 'mail.html'; 
}
?>