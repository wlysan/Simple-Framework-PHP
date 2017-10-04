<?php

    class ModelBase
    {
        protected $conn;
        public $_tabela;
        
        public function ModelBase()
        {
            $connect = new ConfigDB();
            $dados = $connect->GetConfig();
            $this->conn = new PDO("mysql:host={$dados['host']};dbname={$dados['db_name']}", $dados['username'], $dados['password']);
        }        
        
        
        /*** CRUD AINDA NÃO TERMINADO ***/
        public function insert ( Array $dados)
        {
            $campos = implode(", ", array_keys($dados));
            $valores = "'".implode("','", array_values($dados))."'";
            return $this->conn->query(" INSERT INTO `{$this->_tabela}` ({$campos}) VALUES ({$valores})");
        }
        
        public function read ($where = null)
        {
            $where = ($where != null ? "WHERE '.{$where}.'" : "");
            $q = $this->conn->query("SELECT * FROM `{$this->_tabela}` {$where} ;");
            $q->setFetchMode(PDO::FETCH_ASSOC);
            return $q->fetchAll();
        }
        
        public function update ( Array $dados, $where)
        {
            foreach( $dados AS $find => $val)
            {
                $campos[] = "{$ind} = '{$val}'";
            }
            $campos = implode(", ", $campos);
            return $this->conn->query(" UPDATE `{$this->_tabela}` SET {$campos} WHERE {$where}");
        }
        
        public function delete ( $where )
        {
            return $this->conn->query(" UPDATE FROM `{$this->_tabela}` WHERE {$where} ");
        }
    }   
        
    
    

    