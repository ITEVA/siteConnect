<?php

/** Configurações do site */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'vertrigo');
define('DBSA', 'teste');

/** @var string */
$host = is_string($_SERVER["HTTP_HOST"]) ? $_SERVER["HTTP_HOST"] : "" ;
define('RAIZ', "http://{$host}/siteConnect");

/**
 * __autoload
 * Buscar e inclue o arquivo da classe
 * 
 * @param string nome da classe
 * @throws Exception
 */
function __autoload($Class) {
    $cDir = array('DAO', 'Business', 'Entity', 'Exception');
    $iDir = null;
    foreach ($cDir as $dirName) {
        if (!$iDir && file_exists(__DIR__ . "/{$dirName}/{$Class}.class.php")) {
            include_once (__DIR__ . "/{$dirName}/{$Class}.class.php");
            $iDir = true;
        }
    }
    if (!$iDir) {
        trigger_error("Não foi possível incluir {$Class}.class.php", E_USER_ERROR);
        die;
    }
}

/** 
 * databr
 * Formata data aaaa-mm-dd para dd/mm/aaaa
 * 
 * @param string $datasql data no formato do banco
 * @return string data no formato br
 */
function databr($datasql) {
    if (!empty($datasql)) {
        $p_dt = explode('-', $datasql);
        $data_br = $p_dt[2] . '/' . $p_dt[1] . '/' . $p_dt[0];
        return print $data_br;
    }
}

/**
 * datasql
 * Formata data dd/mm/aaaa para aaaa-mm-dd
 *
 * @param string $databr data no formato br
 * @return string data no formato do banco
 */
function datasql($databr) {
    if (!empty($databr)) {
        $p_dt = explode('/', $databr);
        $data_sql = $p_dt[2] . '-' . $p_dt[1] . '-' . $p_dt[0];
        return $data_sql;
    }
}

/**
 * dateTimebr
 * Formata dateTime aaaa-mm-dd hh:ii:ss para dd/mm/aaaa hh:ii:ss
 *
 * @param string $dateTimeSql data no formato do banco
 * @return string data e tempo no formato br
 */
function dateTimebr($dateTimeSql) {
    if (!empty($dateTimeSql)) {
        $dateTimeSeparado = explode(' ', $dateTimeSql);
        $p_dt = explode('-', $dateTimeSeparado[0]);
        $dateTime_br = $p_dt[2] . '/' . $p_dt[1] . '/' . $p_dt[0] . ' ' . $dateTimeSeparado[1];
        return $dateTime_br;
    }
}

/**
 * dateTimesql
 * Formata dateTime dd/mm/aaaa hh:ii:ss para aaaa-mm-dd hh:ii:ss
 *
 * @param string $dateTimeBr data no formato br
 * @return string data e tempo no formato do banco
 */
function dateTimesql($dateTimeBr) {
    if (!empty($dateTimeBr)) {
        $dateTimeSeparado = explode(' ', $dateTimeBr);
        $p_dt = explode('/', $dateTimeSeparado[0]);
        $dateTime_sql = $p_dt[2] . '-' . $p_dt[1] . '-' . $p_dt[0] . ' ' . $dateTimeSeparado[1];
        return $dateTime_sql;
    }
}
