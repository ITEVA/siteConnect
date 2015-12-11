<?php

/** Arquivo de configuração do sistema */
include_once('Classes/Config.inc.php');

/** @var array parametros passados via URL */
$url = Url::getParametros();

include_once("Pages/topo.php");
if (file_exists("Pages/{$url[0]}.php")) {
    include_once("Pages/{$url[0]}.php");
} else {
    include_once("Pages/erro404.php");
}
include_once("Pages/rodape.php");
