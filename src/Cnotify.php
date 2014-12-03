<?php

namespace Anax\notification;

class Cnotify{

//use \Anax\DI\TInjectable;
  private $sessionVariable = 'notificationMessage';
private $session = null;
public function __construct($session){
        $this->session = $session;

        
     
    }



public function insertMessage($message){
    
    $content = "<div class='alert alert-success' role='alert'>". $message." </div>";
    $this->session->set('notificationMessage', $content);

    return $content;
    
}


    public function hasMessage(){
        $this->insertMessage("test message");
        $ok = $this->session->has('notificationMessage');
        if($ok){
            return true;
        }
        else {
            return false;
        }
    }

public function showMessage()
    {
        $ok = $this->session->has('notificationMessage');
        if($ok){
            echo $this->session->get("notificationMessage");
           

            $this->clearSession();
        }
        else{
        }
        
        
    }
    public function clearSession(){
        $this->session->set('notificationMessage', null);
    }



   
}
