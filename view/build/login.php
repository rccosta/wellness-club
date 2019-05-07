<?php include ('templates/header-login.php'); ?>
<body class="login">
  <section class="login-page">
      <div class="container">
          <div class="columns">
              <div class="column is-2 is-offset-5">
                  <img src="<?php echo _URL_SISTEMA; ?>/view/build/img/logo.png" alt="logotipo">
              </div>
          </div>
          <div class="columns">
              <div class="column is-4 is-offset-4">
              	<form id="form" class="login" action="">             
                        <div class="is-divider" data-content="Fazer login"></div>
                        <p>                           
                            <input type="email" name="xEmail" required="required" placeholder="Digite seu e-mail">
                        </p>
                        <p>                           
                            <input type="password" name="xSenha" required="required" placeholder="Digite sua senha">
                        </p>
                        <p>
                            <input id="btnEnviar" type="submit" value="Enviar"> 
                            <small><a href="<?php echo _URL_SISTEMA; ?>recuperar_senha">esqueci minha senha</a></small>                      
                            <small><a href="<?php echo _URL_SISTEMA; ?>primeiro_acesso">Ir para a home</a></small>                      
                        </p>     
              	</form>
              </div>
          </div>
      </div>
  </section>
  <?php include ('templates/footer-login.php'); ?>
  <script>
  	Login.inicia();
  </script>
</body>
