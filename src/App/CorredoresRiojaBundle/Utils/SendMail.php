<?php

namespace App\CorredoresRiojaBundle\Utils;

class SendMail {
    
    private $mailer;
    
    function __construct($mailer) {
        $this->mailer = $mailer;
    }
    
    public function sendemail ($to){
        
        $message = \Swift_Message::newInstance() 
                ->setSubject("Registro en CorredoresRioja")
                ->setFrom('corredoresrioja@gmail.com')
                ->setTo($to)
                ->setBody("Bienvenido a corredores por La Rioja");
        
        $this -> mailer -> send($message);
        
        
    }

    
    
    
    
}
