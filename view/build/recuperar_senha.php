<?php include ('templates/header-login.php'); ?>
  <section class="login-page">
      <div class="container">
          <div class="columns">
              <div class="column is-2 is-offset-5">
                  <img src="img/logo.png" alt="logotipo">
              </div>
          </div>

          <div class="columns">
              <div class="column is-4 is-offset-4">
              <form class="login" action="">             
                        <div class="is-divider" data-content="Recuperar senha"></div>
                        <p>                           
                            <input type="email" required="required" placeholder="Digite seu e-mail">
                        </p>
                   
                        <p>
                            <input  type="submit" value="Enviar">                            
                            <small><a href="http://localhost/websites/wellness/build/login.php">Voltar para login</a></small>                      
                                              
                        </p>
                         
                                            
                    </form>
              </div>
          </div>
      </div>
  </section>
  <?php include ('templates/footer-login.php'); ?>
