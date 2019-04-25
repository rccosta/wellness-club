<?php
session_start();
require_once '../../Config.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Captação de Leads</title>
    <link rel="stylesheet" href="<?php echo _URL_SISTEMA; ?>view/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo _URL_SISTEMA; ?>view/assets/css/master.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
</head>
<body>
<header>
    <div class="container">     
    <div class="row">
        <div class="col-md-11">
            <h1>Wellness Club</h1>
        </div>
            <div class="col-md-1 text-right">
                <a href="#" class="btn-padrao cor-1">
                    <i class="far fa-envelope-open"></i>
                </a>               
            </div>
            <hr>
        </div>
    </div> 
</header>
