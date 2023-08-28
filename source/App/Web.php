<?php
namespace source\App;

class Web{
    public function index(){
        require_once __DIR__."/../../assets/index.php";
    }


                            //CADASTRO
    public function cadastro(){
        require_once __DIR__."/../../assets/cadastro/cadastro.php";
    }
    public function cadaluno(){
        require_once __DIR__."/../../assets/cadastro/cadaluno.php";
    }
    public function cadescola(){
        require_once __DIR__."/../../assets/cadastro/cadescola.php";
    }
    public function cadmatricula(){
        require_once __DIR__."/../../assets/cadastro/cadmatricula.php";
    }
    public function func_cadaluno(){
        require_once __DIR__."/../../assets/cadastro/func_cadaluno.php";
    }
    public function func_cadescola(){
        require_once __DIR__."/../../assets/cadastro/func_cadescola.php";
    }
    public function func_cadmatricula(){
        require_once __DIR__."/../../assets/cadastro/func_cadmatricula.php";
    }
    


                            //LISTAGEM
    public function listagem(){
        require_once __DIR__."/../../assets/listagem/listagem.php";
    }

    public function listaluno(){
        require_once __DIR__."/../../assets/listagem/listaluno.php";
    }

    public function listescola(){
        require_once __DIR__."/../../assets/listagem/listescola.php";
    }

    public function listmatricula(){
        require_once __DIR__."/../../assets/listagem/listmatricula.php";
    }


                            //EXCLUIR
    public function exaluno(){
        require_once __DIR__."/../../assets/deletar/exaluno.php";
    }
    public function exescola(){
        require_once __DIR__."/../../assets/deletar/exescola.php";
    }
    public function exmatricula(){
        require_once __DIR__."/../../assets/deletar/exmatricula.php";
    }


                            //EDITAR
    public function editaluno(){
        require_once __DIR__."/../../assets/editar/editaluno.php";
    }
    public function func_editaluno(){
        require_once __DIR__."/../../assets/editar/func_editaluno.php";
    }
    public function editescola(){
        require_once __DIR__."/../../assets/editar/editescola.php";
    }
    public function func_editescola(){
        require_once __DIR__."/../../assets/editar/func_editescola.php";
    }
    public function editmatricula(){
        require_once __DIR__."/../../assets/editar/editmatricula.php";
    }
    public function func_editmatricula(){
        require_once __DIR__."/../../assets/editar/func_editmatricula.php";
    }

    public function error($data){
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }

}
