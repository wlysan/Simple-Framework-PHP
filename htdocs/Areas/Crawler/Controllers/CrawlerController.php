<?php
    //Em desenvolvimento
    class Crawler extends ControllerBase
    {
        public function Crawler()
        {
            ini_set("max_execution_time", -1);
            ini_set("memory_limit", -1);            
        }

        public function Index()
        {            
            echo "Função index";
        }

        public function Teste()
        {
            return $this->view('Crawler');
        }

        function obter_links()
        {
            $url = $_POST['url'];
            print_r($url);
            if (!file_get_contents($url)){ return;}
            $conteudo = file_get_contents($url);
            ?>
                <script>
                    //var mycheck = document.getElementById('recaptcha-anchor').value;
                    //document.write(myChecked);
                    //var mycheck = myFrame.contentDocument.getElementById('aria-checked');
                    //mycheck.aria-checked = true;   

                    var check = document.getElementsByClassName("aria-checked");
                    document.write(check); 
                    check.aria-checked = true;      
                    document.write(check);
                </script>
            <?php 
            
            echo $conteudo;

            
            //$tratado = strip_tags($conteudo, "<a>");
            
            //preg_match_all("/<a(?:[^>]*)href=\"([^\"]*)\"(?:[^>]*)>(?:[^<]*)<\/a>/is", $tratado, $resultados);
         
            //return $resultados[1];
        }
    }