<?php

/**
 * Classe que implementa as funções de insert, update, read e delete no banco.
 *
 * @author Josinaldo
 */
abstract class Crud extends Conn {

    /** @var PDO */
    private $conn;

    /** @var string */
    private $table;

    /** @var string */
    private $query;

    /** @var PDOStatement */
    private $stmt;

    /**
     * __construct
     * Inicializa a conexao e o nome da tabela
     * 
     * @param string $table nome da tabela
     */
    public function __construct($table) {
        $this->conn = parent::getConn();
        $this->table = $table;
    }

    /**
     * Cadastrar
     * Cadastra uma nova tupla no banco
     * 
     * @param array $dados informações que serão cadastrados no banco
     * @throws PDOException
     * @return int ID da tupla inserida
     */
    public function Cadastrar($dados) {
        /** @var string */
        $places = implode(", ", array_keys($dados));

        /** @var string */
        $values = (count($dados)) ? ":" . implode(", :", array_keys($dados)) : "";

        /** Query para inserir os dados no banco */
        $this->query = "INSERT INTO {$this->table}
                        ({$places}) VALUES ($values)";

        /** Executa a consulta no banco */
        $this->executar($dados);

        /** @return int ID da tupla inserida */
        return $this->conn->lastInsertId();
    }

    /**
     * Editar
     * Edita uma tupla no banco
     * 
     * @param array $dados informações que serão cadastrados no banco
     * @throws PDOException
     */
    public function Editar($dados) {

        /** @var string places */
        $places = "id = :id";

        /** inclue os campos do $array que serão editados */
        foreach (array_keys($dados) as $key) {
            $places .= ", {$key} = :{$key}";
        }

        /** Query para editar tupla selecionada */
        $this->query = "UPDATE {$this->table}
                        SET {$places}
                        WHERE id = :id";

        /** Executa a consulta no banco */
        $this->executar($dados);
    }

    /**
     * Excluir
     * Exclui uma tupla no banco
     * 
     * @param array $id ID da tupla a ser excluida
     * @throws PDOException
     */
    public function Excluir($id) {

        /** @var array */
        $dados = array("id" => $id);

        /** query para excluir uma tupla */
        $this->query = "DELETE FROM {$this->table}
                        WHERE id = :id";

        /** Executa a consulta no banco */
        $this->executar($dados);
    }
    
    public abstract function Buscar($dados);

    /**
     * Consultar
     * Executa uma consulta no banco
     * 
     * @param string $query
     * @param array $dados
     * @throws PDOException
     * @return array Dados de retorno da consulta
     */
    protected function Consultar($query, $dados) {
        /** @var string */
        $this->query = $query;

        /** Executa a consulta no banco */
        $this->executar($dados);

        /** @var array */
        $retorno = array();

        /** Preenche o array de retorno com os dados da consulta */
        while ($row = $this->stmt->fetch()) {
            $retorno[] = $row;
        }

        /** @return array resultado da consulta */
        return $retorno;
    }

    /**
     * executar
     * prepara o statment e executa a query
     * 
     * @throws PDOException
     * @param array $dados dados que serão inseridos na consulta
     */
    private function executar($dados = null) {

        /** Inicializa o statment */
        $this->stmt = $this->conn->prepare($this->query);

        /** Executa a consulta */
        $this->stmt->execute($dados);
    }

}
