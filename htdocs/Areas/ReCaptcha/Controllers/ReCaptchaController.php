<?php  
    //sitekey = 6LdPQTIUAAAAABCjtqKqX4sXlj9PHPvPDIOOMh34
    //secretkey = 6LdPQTIUAAAAAGOxAR35GcAhETBXMRkZqtv5TFNQ
    //<div class="g-recaptcha" data-sitekey="6LdPQTIUAAAAABCjtqKqX4sXlj9PHPvPDIOOMh34"></div>
    //<script src='https://www.google.com/recaptcha/api.js'></script>


    class ReCaptcha extends ControllerBase
    {  
        public function Index()
        {            
            echo "Função index";
        }

        public function Teste()
        {
            return $this->view('ReCaptcha');
        }
        
        public function CheckReCaptcha()
        {
            print_r($_POST['g-recaptcha-response']);
            
            $cap = $_POST['g-recaptcha-response'];
            
            echo "<br>Decode Json<br>";
                     
            if(isset($_POST['g-recaptcha-response']))
            {
                $captcha=$_POST['g-recaptcha-response'];
            }
            
            if(!$captcha){
                echo '<h2>Verifique o formulário captcha.</h2>';
                exit;
            }     
            $secretKey = "6LdPQTIUAAAAAGOxAR35GcAhETBXMRkZqtv5TFNQ";
            $ip = '';
            
            $resposta=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
            $respostaKeys = json_decode($resposta,true);
            echo $resposta . "<br>";
            print_r($resposta);
            if(intval($respostaKeys["success"]) !== 1) {
                echo '<h2>Você é um robo.</h2>';
            } else {
                echo '<h2>Congrats!</h2>';
            }
        }
    }

?>