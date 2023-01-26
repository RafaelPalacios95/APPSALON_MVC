<?php 

namespace Clases;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email{

    public $email;
    public $nombre;
    public $token;
    public function __construct($email, $nombre, $token){
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){
      
        //Crear la instancia de PHPMailer
        $mail = new PHPMailer(true);
   
        //Configurar SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true; 
        $mail->Username = '35159d459c468e';
        $mail->Password='19841a3d51488e';
        
        $mail->Port = 2525;

        $mail->setFrom('cuentas@appsalon.com', 'Mailer');
        $mail->addAddress('palacioscorona95@gmail.com', 'AppSalon.com');
        $mail->Subject = "Confirma tu cuenta";

        //Set html
        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";

        $contenido = "<html>";
        $contenido.= "<p><strong>Hola ". $this->nombre."</strong> Has creado tu cuenta en appsalon, solo debes confirmarla en el siguiente enlace</p>";

        $contenido.= "<p>Presiona aquí: <a  href='http://localhost:3000/public/confirmar-cuenta?token=".$this->token."'>Confirmar cuenta</a></p>";

        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;
        $mail->AltBody = "Esto es texto alternativo sin html";

        //Enviar el mail
        $mail->send();
        

    }

    public function enviarInstrucciones(){
        //Crear la instancia de PHPMailer
        $mail = new PHPMailer(true);
   
        //Configurar SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true; 
        $mail->Username = '35159d459c468e';
        $mail->Password='19841a3d51488e';
        
        $mail->Port = 2525;

        $mail->setFrom('cuentas@appsalon.com', 'Mailer');
        $mail->addAddress('palacioscorona95@gmail.com', 'AppSalon.com');
        $mail->Subject = "Restablece tu cuenta";

        //Set html
        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";

        $contenido = "<html>";
        $contenido.= "<p><strong>Hola ". $this->nombre."</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";

        $contenido.= "<p>Presiona aquí: <a  href='http://localhost:3000/public/recuperar?token=".$this->token."'>Reestablecer Password</a></p>";

        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;
        $mail->AltBody = "Esto es texto alternativo sin html";

        //Enviar el mail
        $mail->send();
    }
}