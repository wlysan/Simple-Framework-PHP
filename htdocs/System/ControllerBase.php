<?php

    class ControllerBase
    {
        protected function view ($nome)
        {
            return require_once('Areas/'.$nome.'/Views/'.$nome.'View.phtml');
        }
        
        protected function viewAC($nome,$ac)
        {
            return require_once('Areas/'.$nome.'/Views/'.$ac.'View.phtml');
        }
        
        protected function model ($nome)
        {
            return require_once('Areas/'.$nome.'/Models/'.$nome.'Model.php');
        }
        
        protected function viewmodel ($nome)
        {
            return require_once('Areas/'.$nome.'/ViewModel/'.$nome.'ViewModel.php');
        }
        
        protected function helpers ($nome)
        {
            return require_once('Areas/'.$nome.'/HelpersModels/'.$nome.'ControllerHelper.php');
        }
    }
