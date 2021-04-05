<?php
require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);
/* 
*   Controllers
*/
$router->namespace("Source\Controllers");

/* 
*   Web
*   home
*/
$router->group(null);
$router->get("/", "Web:home");
$router->get("/{filter}", "Web:home");
$router->get("/", "Web:home");

/*
*   Web
*   blog
*/

$router->group("/blog");
$router->get("/", "Web:blog");
$router->get("/{filter}", "Web:post");
$router->get("/categoria/{filter]", "Web:category");

/*
 *  Web 
 *  contact
 */

$router->group("/contato");
$router->get("/", "Web:contact");
$router->post("/", "Web:contact");
$router->get("/{sector}", "Web:contact");

/*
 *  Web 
 *  admin
 */

$router->group("/admin");
$router->get("/", "Web:contact");

/*
 *  Web
 *  error
 */
$router->group("/ooops");
$router->get("/{errcode}", "Web:error");

$router->dispatch();

if($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}