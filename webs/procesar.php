<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];
$para='alejandra.rothermel@yahoo.com';
$titulo='Mensaje de Saber de Violines';
$header='From:'.$email;
$msjCorreo="Nombre:$nombre\n Apellido:$apellido\n E-Mail:$email\n Mensaje:$mensaje";

if($_POST['submit']){
if(mail($para,$titulo,$msjCorreo,$header)){
echo"<script language='javascript'>
alert('Mensaje enviado, muchas gracias por contactarse.');
window.location.href='http://www.saberdeviolines.orgfree.com/';
</script>";
}else{
echo'Falló el envío';
}
}
?>