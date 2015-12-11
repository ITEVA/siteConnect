<?php

/**
 * Cria a conexão com o banco e retorna um objeto PDO
 *
 * @author Josinaldo
 */
abstract class Conn {

    /** Configurações de acesso ao banco */
    private static $Host = HOST;
    private static $User = USER;
    private static $Pass = PASS;
    private static $Dbsa = DBSA;

    /** @var PDO */
    private static $Connect = null;

    /**
     * Conecta com o banco de dados com o pattern singleton.
     * Retorna um objeto PDO!
     */
    private static function conectar() {
        try {
            if (self::$Connect == null) {
                $dsn = 'mysql:host=' . self::$Host . ';dbname=' . self::$Dbsa;
                $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
                self::$Connect = new PDO($dsn, self::$User, self::$Pass, $options);
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
    }

    /** Retorna um objeto PDO Singleton Pattern. */
    protected static function getConn() {
        return self::Conectar();
    }

}
