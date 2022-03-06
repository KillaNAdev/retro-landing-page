<?php
 	include("config.php");
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Home |  <?php echo $sitename ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <meta name="description" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="" />
    <meta name="theme-color" content= <?php echo $hexcolor ?>

    <meta name="twitter:card" content="summary">
    <meta property="og:image" content="./images/logo.png">

    <link href="https://fonts.googleapis.com/css?family=Exo:500,500italic,700,700italic,400,400italic,600,600italic,900,900italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./style/index.css" />
    <link rel="icon" href="/images/logo.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-0c38nfCMzF8w8DBI+9nTWzApOpr1z0WuyswL4y6x/2ZTtmj/Ki5TedKeUcFusC/k" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">


</head>




<body>

<div class="rainbow-text ascii-art center">
  
 ██ ▄█▀ ██▓ ██▓     ██▓     ▄▄▄       ███▄    █  ▄▄▄      
 ██▄█▒ ▓██▒▓██▒    ▓██▒    ▒████▄     ██ ▀█   █ ▒████▄    
▓███▄░ ▒██▒▒██░    ▒██░    ▒██  ▀█▄  ▓██  ▀█ ██▒▒██  ▀█▄  
▓██ █▄ ░██░▒██░    ▒██░    ░██▄▄▄▄██ ▓██▒  ▐▌██▒░██▄▄▄▄██ 
▒██▒ █▄░██░░██████▒░██████▒ ▓█   ▓██▒▒██░   ▓██░ ▓█   ▓██▒
▒ ▒▒ ▓▒░▓  ░ ▒░▓  ░░ ▒░▓  ░ ▒▒   ▓▒█░░ ▒░   ▒ ▒  ▒▒   ▓▒█░
░ ░▒ ▒░ ▒ ░░ ░ ▒  ░░ ░ ▒  ░  ▒   ▒▒ ░░ ░░   ░ ▒░  ▒   ▒▒ ░
░ ░░ ░  ▒ ░  ░ ░     ░ ░     ░   ▒      ░   ░ ░   ░   ▒   
░  ░    ░      ░  ░    ░  ░      ░  ░         ░       ░  ░
                                                          
                   
</div>

<section class="medias" > 

<a class="rainbow-text" id="github" href=<?php echo $github ?> >Github | </a><a    class="rainbow-text" id="store" href=<?php echo $store ?>  >Store | </a><a  class="rainbow-text" id="discord" href=<?php echo $discord ?> >Discord </a>
</section>

</body>


<script src="/style/index.js"></script>

</html>