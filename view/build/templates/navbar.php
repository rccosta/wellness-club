  <header>
      <div class="container">
          <div class="hero-body">
          <nav class="navbar is-transparent">
            <!-- Logotipo -->
            <div class="navbar-brand">
              <a href="<?php echo _URL_SISTEMA; ?>/index" class="navbar-item is-large"><img src="<?php echo _URL_SISTEMA; ?>/view/build/img/logo.png" alt="Welness Club"></a>
              <!-- Elemento que só aparecerá responsivamente -->
              
              <span  class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
              </span>      
            </div>
            <!-- Navvar Menu -->
            <div id="navMenu" class="navbar-menu navbar-end">        
                <a href="#" class="navbar-item"><i class="lnr lnr-alarm"></i> Noticias</a>
                <a href="#" class="navbar-item"><i class="lnr lnr-bubble"></i> Mensagens</a>
                <!-- Dropdown -->
                <div class="navbar-item has-dropdown  is-hoverable">
                  <a href="#" class="navbar-link" ><span class="avatar" ><img src="<?php echo _URL_SISTEMA; ?>/view/build/img/avatar-4.jpg" alt="avatar"></span> Olá, <?php echo $_SESSION['INDEX_USUARIO']->xNome ?></a>
                    <div class="navbar-dropdown navbar-start is-boxed">              
                    <div class="dropdown-item">
                      <p>
                        <strong><?php echo ($_SESSION['INDEX_USUARIO']->xNome . ' ' . $_SESSION['INDEX_USUARIO']->xSobrenome) ?></strong>
                        <small>Plano W Basic</small>
                      </p>
                    </div>
                    
                      <a class="navbar-item tooltip " href="#" data-tooltip="Edite seus dados"><i class="lnr lnr-user"></i> Meus dados</a>
                      <a class="navbar-item tooltip " href="<?php echo _URL_SISTEMA; ?>configuracao" data-tooltip="Verifique suas metas"><i class="lnr lnr-pie-chart"></i> Configuração</a>
                      <a class="navbar-item tooltip " href="#" data-tooltip="Sua posição no ranking"> <i class="lnr lnr-star"></i> Ranking</a>
                      <a class="navbar-item tooltip " href="<?php echo _URL_SISTEMA; ?>videoteca/" data-tooltip="Assista vídeos" ><i class="lnr lnr-film-play"></i> Videoteca</a>
                      <hr class="navbar-divider">
                      <a class="navbar-item tooltip" href="<?php echo _URL_SISTEMA; ?>login/" data-tooltip="Ahhhh! Já vai sair?"><i class="lnr lnr-exit"></i> Encerrar sessão</a>
                    </div>
                </div>
                <!--Final da dropdown  -->
              </div>  
          </nav>
          </div>
        </div>
     </header>
