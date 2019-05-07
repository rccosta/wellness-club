<?php
session_start();
require_once '../../Config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wellness Club</title>
    <link rel="stylesheet" href="<?php echo _URL_SISTEMA; ?>/view/build/css/master.css"> 
    <link rel="stylesheet" href="<?php echo _URL_SISTEMA; ?>/view/build/css/bulma-extensions.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <!-- Carregar font ícones -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Chart -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    
   <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo _URL_SISTEMA; ?>view/vendor/sweetalert2/sweetalert2.css">
    <!-- sweet alert js -->
	<script src="<?php echo _URL_SISTEMA; ?>view/vendor/sweetalert2/sweetalert2.js"></script>
	<script src="<?php echo _URL_SISTEMA; ?>view/vendor/sweetalert2/core.js"></script>
	
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-1.12.1.min.js" integrity="sha256-I1nTg78tSrZev3kjvfdM5A5Ak/blglGzlaZANLPDl3I=" crossorigin="anonymous"></script>
    
    <!-- jquery Utils -->
    <script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/assets/js/util/URLUtil.js?<?php echo _VERSAO?>"></script>
    <script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/assets/js/util/MessageUtil.js?<?php echo _VERSAO?>"></script>
    <script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/assets/js/util/AjaxUtil.js?<?php echo _VERSAO?>"></script>
    <script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/assets/js/util/serializeObjectUtil.js?<?php echo _VERSAO?>"></script>
    
    <!-- VIEW JS -->
    <?php
    require_once (_ABS_PATH . 'src/util/FileUtil.php');
    $_SESSION['LIST_VIEW_JS'] = null;
    $_SESSION['LIST_VIEW_JS'] = listFiles((_ABS_PATH . "view/"));
    foreach ($_SESSION['LIST_VIEW_JS'] as $viewJS) {
        if (stripos($viewJS, '.js') && ! stripos($viewJS, ".json")) {
            if (stripos($viewJS, "view/") && ! stripos($viewJS, "assets/") && ! stripos($viewJS, "vendor/")) {
                 echo "<script type='text/javascript' src='" . _URL_SISTEMA . substr($viewJS, stripos($viewJS, "view/")) . "?" . _VERSAO . "'></script>";
            }
        }
    }
    ?>
  </head>
  <body class="default">
<!-- Carregar navbar do site -->
<?php include ('templates/navbar.php'); ?>
<!-- carregar informações imediatas do usuário -->
<?php include ('templates/infos.php'); ?>