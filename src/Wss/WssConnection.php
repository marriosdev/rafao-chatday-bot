<?php

namespace App\Wss;

class WssConnection
{
    public $wssServer;
    public $wssPort;
    public $msg;

    public function __construct()
    {    
        
    }

    public function send(Array $msg)
    {
        $this->msg = $msg;    
        \Ratchet\Client\connect("wss://chat-day.herokuapp.com/wss")->then(function($conn) {
                $conn->send(json_encode($this->msg));
                $conn->close();
            }
        );
    }
}