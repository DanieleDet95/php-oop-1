<?php

  trait TraitSendEmail
  {
    function sendEmail($email_dest,$email_soggetto){
      return 'Sent email to: '.$email_dest.' con oggetto '.$email_soggetto;
    }
  }

?>
