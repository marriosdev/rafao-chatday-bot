<?php

namespace App\Modules;

use App\Wss\WssConnection;

class Command
{
    protected $wssServer;
    protected $wssConnection;

    public function __construct()
    {
        $this->wssConnection = new WssConnection(); 
    }
}