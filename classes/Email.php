<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;


class Email{

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){

        //Crear el objeto de email
        
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '4854ab06218ec1';
        $mail->Password = '4881055f5b2ccf';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = "Confirma tu cuenta";

        //Set HTML
        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";

        $contenido="<html>";
        $contenido .= "<p>Hola <strong> " . $this->nombre .  " </strong> Haz creado tu cuenta en App Salon, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aqui: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        //Enviar contenido
        $mail->send();

        
    }

    public function enviarInstrucciones(){
          //Crear el objeto de email
        
          $mail = new PHPMailer();
          $mail->isSMTP();
          $mail->Host = 'smtp.mailtrap.io';
          $mail->SMTPAuth = true;
          $mail->Port = 2525;
          $mail->Username = '4854ab06218ec1';
          $mail->Password = '4881055f5b2ccf';
  
          $mail->setFrom('cuentas@appsalon.com');
          $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
          $mail->Subject = "Reestablece tu contraseña";
  
          //Set HTML
          $mail->isHTML(true);
          $mail->CharSet = "UTF-8";
  
          $contenido="<html>";
          $contenido .= "<p>Hola  <strong> " . $this->nombre . " </strong>Haz solicitado reestablecer tu contraseña, da click en el siguiente enlace para reestablecerla</p>";
          $contenido .= "<p>Presiona aqui: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablecer contraseña</a> </p>";
          $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
          $contenido .= "</html>";
  
          $mail->Body = $contenido;
  
          //Enviar contenido
          $mail->send();
    }
}