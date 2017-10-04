<?php
    class ConfigDB
    {
        private $_host = "localhost";
        private $_db_name = "rise_together";
        private $_username = "root";
        private $_password = "";
        
        public function GetConfig()
        {
            $connect['host'] = $this->_host;
            $connect['db_name'] = $this->_db_name;
            $connect['username'] = $this->_username;
            $connect['password'] = $this->_password;
            
            return $connect;
        }
    }


//----------------- CONFIGURAÇÕE DB -------------------//





