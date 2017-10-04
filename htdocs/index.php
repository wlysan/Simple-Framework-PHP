
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>        
        <div class="panel panel-default">
            
            <div class="panel-body">
                <ul class="nav nav-tabs navbar-inverse">
                    <li role="presentation" class="active"><a href="../../../Menu">Home</a></li>
                    <li role="presentation"><a href="../../../Cadastro/">Cadastro</a></li>
                    <li role="presentation"><a href="../../../Login/Logar">Login</a></li>
					<li role="presentation"><a href="../../../ReCaptcha/Teste">ReCaptcha</a></li>
                    <!--<li role="presentation"><a href="../../../Crawler/Teste">Crawler</a></li>-->
                </ul>
            <?php
    
                require_once ('System/ConfigBase.php');
                $start = new ConfigBase();

            ?>        
        </div>
    </body>
</html>
