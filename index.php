<?php

/** Arquivo de configuração do sistema */
include_once('Classes/Config.inc.php');

/** @var array parametros passados via URL */
$url = Url::getParametros();

include_once("Pages/topo.php");
if (file_exists("Pages/{$url[0]}.php")) {
    include_once("Pages/{$url[0]}.php");
} else if ($url[0] == "sac"){
    echo'<script>window.location="http://177.19.248.64:8195/sac/open.do?action=open&sys=SAC"</script>';
}else {
    include_once("Pages/erro404.php");
}
include_once("Pages/rodape.php");
