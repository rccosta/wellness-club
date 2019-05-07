<?php include ('templates/header-login.php'); ?>
<!-- Inicio do conteúdo -->
<section class="login-page">
    <div class="container">
        <div class="box-primeiro-acesso">
     
            <div class="columns">               
          
                <div class="column is-8 is-offset-2">
                <h1>Parabéns <span><?php echo $_SESSION['INDEX_USUARIO']->xNome?></span>, seja bem vindo <br> <small>Este é seu primeiro acesso</small></h1>
                    <a href="<?php echo _URL_SISTEMA; ?>configuracao/" class="btn-padrao cor-1">Vamos configurar?</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Final do conteúdo -->
<?php include ('templates/footer-login.php'); ?>
