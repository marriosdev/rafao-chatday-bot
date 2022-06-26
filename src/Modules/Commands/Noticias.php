<?php

namespace App\Modules\Commands;

use App\Wss\WssConnection;
use App\Modules\Command;

class Noticias extends Command
{   
    public function index()
    {
        $this->wssConnection->send(["msg"=>"Buscando noticias", "name"=>"BOT [Rafão]"]);
        return json_encode(["Certo"]);  
    }
}
