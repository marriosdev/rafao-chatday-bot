<?php

require_once(__DIR__."/vendor/autoload.php");

use Marrios\Router\HttpRouter;

$router = new HttpRouter();

$router->get("/noticias", [App\Modules\Commands\Noticias::class, "index"])->run();


echo  "Ta on";