<?php

/**
 * Cria um array com os parâmetros passados via url
 *
 * @author Josinaldo
 */

class Url {

    /**
     * getURL
     * Retorna um array com a URL atual
     * @return array
     */
    public static function getParametros() {
        /** Checa se a url existe e é válida */
        if (isset($_GET['url']) && is_string($_GET['url'])) {
            /** Gera uma array dividindo a string pela / */
            return explode('/', str_replace('//', '/', $_GET['url']));
        } else {
            /** Inicializa apenas com o login */
            return array('home');
        }
    }

}
