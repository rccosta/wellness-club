<?php session_start();
	require_once '../../Config.php';
?>
<!--  O código acima é muito importante -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wellness Club <?php echo _VERSAO?></title>
<!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Meta -->

<!-- Meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Wellness Club ..." />
<meta 	name="keywords" content="">
<meta name="author" content="WRed Consultoria &amp; Informática" />

<!-- Favicon icon -->
<link
	rel="icon"
	href="<?php echo _URL_SISTEMA; ?>view/assets/images/favicon.ico"
	type="image/x-ic	on">
<!-- Google font-->
<link
	href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800"
	rel="stylesheet">
<!-- Required Fremwork -->
<link
	rel="stylesheet"
	type="text/css"
	href="<?php echo _URL_SISTEMA; ?>view/vendor/bootstrap/css/bootstrap.min.css">
<!-- waves.css -->
<link
	rel="stylesheet"
	href="<?php echo _URL_SISTEMA; ?>view/vendor/waves/css/waves.min.css"
	type="text/css"
	media="all">
<!-- feather icon -->
<link
	rel="stylesheet"
	type="text/css"
    href="<?php echo _URL_SISTEMA; ?>view/vendor/feather/css/feather.css">
    
    <!-- Style.css -->
<link
	rel="stylesheet"
	type="text/css"
	href="<?php echo _URL_SISTEMA; ?>view/assets/css/style.css">

	<link rel="stylesheet" type="text/css" href="<?php echo _URL_SISTEMA; ?>view/assets/css/pages.css">
	<link rel="stylesheet" type="text/css" href="<?php echo _URL_SISTEMA; ?>view/assets/css/master.css">
	<!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo _URL_SISTEMA; ?>view/vendor/sweetalert2/sweetalert2.css">
	
    <!-- Required Jquery -->
	<script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/vendor/jquery/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/vendor/jquery-ui/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/vendor/popper.js/js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- waves js -->
	<script src="<?php echo _URL_SISTEMA; ?>view/vendor/waves/js/waves.min.js"></script>
	<!-- jquery slimscroll js -->
	<script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/vendor/jquery-slimscroll/js/jquery.slimscroll.js"></script>
	<!-- sweet alert js -->
	<script src="<?php echo _URL_SISTEMA; ?>view/vendor/sweetalert2/sweetalert2.js"></script>
	<script src="<?php echo _URL_SISTEMA; ?>view/vendor/sweetalert2/core.js"></script>
	 <!-- parsley -->
    <script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/vendor/parsleyjs/parsley.min.js"></script>
    <script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/vendor/parsleyjs/i18n/pt-br.js"></script>
    <!-- jQuery-Mask-Plugin -->
    <script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/vendor/jQuery-Mask-Plugin/jquery.mask.min.js"></script>  
    <!-- jquery.blockUI -->
    <script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/vendor/jquery.blockUI/jquery.blockUI.js"></script> 
	<!-- Custom js -->
	<script src="<?php echo _URL_SISTEMA; ?>view/assets/js/pcoded.min.js"></script>
	<script type="text/javascript" src="<?php echo _URL_SISTEMA; ?>view/assets/js/script.min.js"></script>
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
    <style>
        .pcoded[theme-layout="vertical"][vertical-placement="left"][vertical-nav-type="expanded"][vertical-effect="shrink"] .pcoded-content {
        	margin-left: 0px;
        }
        
        .form-control.parsley-error {
            border: red 1px solid;
        }
        .parsley-errors-list {
            font-size: 10px;
            color: red;
        }
    </style>
</head>
<input type="hidden" id="url_sistema" name="url_sistema" value="<?php echo _URL_SISTEMA; ?>" />
<body>
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-bar"></div>
	</div>
<header id="pcoded" class="pcoded">	
	<div class="pcoded-overlay-box"></div>
	<div class="navbar-wrapper">
		<?php include ('navbar.php'); ?>
	</div>
</header>