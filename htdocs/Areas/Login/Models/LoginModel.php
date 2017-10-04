<?php
    
    class LoginModel extends ModelBase
    {        
        protected $_Model;
        
        public function ChecarLogin($nome,$senha)
        {
            $model = $this->_Model = new ModelBase();
            $conn = $model->conn;               
            $sql = "SELECT * FROM `Users` WHERE `Name` = '{$nome}' "
            . "AND `Pass` = '{$senha}'"
            . "AND `Status` = '1'; ";
                
            foreach ($conn->query($sql) as $key) {
                echo $key['Name'];
            } 
        }
    }
