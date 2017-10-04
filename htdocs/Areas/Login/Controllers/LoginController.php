<?php
    //require_once ('Areas/Login/ViewModelLogin/LoginViewModel.php');      
    //use ViewModelLogin\LoginViewModel as Lg;
    
    class Login extends ControllerBase
    {  
        public function Index()
        {            
            echo "Função index";
        }
        public function Logar()
        {            
            $this->view('Login');            
        }
        
        public function Cadastro(array $dados = null)
        {        
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            
            if($nome != null && $senha != null )
            {
                $this->model('Login');
                $model = new LoginModel();  
                $model->ChecarLogin($nome,$senha);
            }else {
                echo "Login e ou senha inválidos!";
            }
           
        }
    }