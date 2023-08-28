<?php
define("ROOT","http://projetos/PHP%20com%20PDO%20-%20CRUD%20completo/");
define("CSS","assets/css/");
define("JS","assets/js/");
define("IMG","assets/img/");

function url($uri = null){
    if($uri){
        return ROOT.$uri;
    }
    return ROOT;
}