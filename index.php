<?php
require_once __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

$router->namespace("Source\App");

//INDEX
$router->group(null);
$router->get("/","Web:index");

//Cadastro
$router->group("cadastrar");
$router->get("/","Web:cadastro");
$router->get("/aluno","Web:cadaluno");
$router->get("/escola","Web:cadescola");
$router->get("/matricula","Web:cadmatricula");
//FUNC_Cadastro
$router->post("/aluno/func_cadaluno","Web:func_cadaluno");
$router->post("/escola/func_cadescola","Web:func_cadescola");
$router->post("/matricula/func_cadmatricula","Web:func_cadmatricula");

//Listagem
$router->group("listar");
$router->get("/","Web:listagem");
$router->get("/aluno","Web:listaluno");
$router->get("/escola","Web:listescola");
$router->get("/matricula","Web:listmatricula");

//Excluir
$router->group("excluir");
$router->get("/aluno/{id}","Web:exaluno");
$router->get("/escola/{id}","Web:exescola");
$router->get("/matricula/{id_matricula}/{id_aluno}","Web:exmatricula");

//Editar
$router->group("editar");
$router->get("/aluno/{id_aluno}","Web:editaluno");
$router->get("/escola/{id_escola}","Web:editescola");
$router->get("/matricula/{id_matricula}/{id_aluno}/{id_escola}","Web:editmatricula");
//FUNC_Editar
$router->post("/aluno/func_editaluno","Web:func_editaluno");
$router->post("/escola/func_editescola","Web:func_editescola");
$router->post("/matricula/func_editmatricula","Web:func_editmatricula");


//Erro
$router->group("erro");
$router->get("/{errcode}","Web:error");

$router->dispatch();

if($router->error()){
    $router->redirect("/error/{$router->error()}");
}


