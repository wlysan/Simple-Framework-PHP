<?php

    class Cadastro extends ControllerBase
    {
       
        public function Index()
        {            
            $this->view('Cadastro');
        }
        
        public function Fornecedor()
        {       
            $this->Index();
            $this->viewAC('Cadastro','CadastroFornecedor');            
        }
        public function Cadastra_Fornecedor()
        {
            $dados = array();                        
            foreach($_POST as $key => $value){ 
                $dados += [$key => $value];
            } 
            print_r($dados);
        }
        
        public function Produto()
        {
           $this->Index();
        }
    }
