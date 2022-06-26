<?php

use Marrios\Router\HttpRouter;

$router = new HttpRouter();

$router->get("/noticias", [App\Modules\Commands\Noticias::class, "index"])->run();
