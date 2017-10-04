<?php

    class ConfigBase
    {
        private $_url;
        private $_explode;
        public $_controller;
        public $_action;
        
        public function ConfigBase()
        {
            $this->SetUrl();
            $this->SetExplode();
            $this->SetController();
            $this->SetAction();
            require_once ('System/ConfigDB.php');
            require_once ('System/ControllerBase.php');
            require_once ('System/ModelBase.php');
            
            $controller = $this->_controller;
            $controller;
            $ac = $this->_action;             
           
            if(isset($controller) && $controller != '')
            { 
                if(file_exists('Areas/'.$controller.'/Controllers/'.$controller.'Controller.php'))
                {
                    require_once('Areas/'.$controller.'/Controllers/'.$controller.'Controller.php');
                    $system = new $controller();
                                 
                    if(method_exists($system,$this->_action))
                    {
                        $system->$ac();
                    }else
                    {
                        require_once ('Areas/Error/Views/ErrorView.phtml.');
                    }                   
                                     
                }else
                {
                    require_once ('Areas/Error/Views/ErrorView.phtml.');
                }
            }
            
            
        }
        
        public function SetUrl()
        {
            $_GET['url'] = (isset($_GET['url']) ? $_GET['url'].'/' : '/');
            $this->_url = $_GET['url'];
        }
        
        private function SetExplode()
        {
            $this->_explode = explode('/',$this->_url);
        }
        
        private function SetController()
        {
            $this->_controller = ($this->_explode[0] == null ? '' : $this->_explode[0]);
        }
        
        private function SetAction()
        {          
            $this->_action = ($this->_explode[1] == null ? 'Index' : $this->_explode[1]);
        }
    }

