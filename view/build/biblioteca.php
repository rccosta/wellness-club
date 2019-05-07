<button class="button is-danger is-rounded modal-button" href=#modal>Ver modal</button>
<!-- MODAL START -->
<div id="modal" class="modal">
<div class="modal-background"></div>
<div class="modal-content">
<p class="image is-4by3">
<img src="https://bulma.io/images/placeholders/1280x960.png" alt="">
</p>
</div>
<button class="modal-close is-large" aria-label="close"></button>
</div>
<!-- MODAL END -->

<!-- NAVBAR -->
<header>
      <div class="container">
          <div class="hero-body">
          <nav class="navbar is-transparent">
            <!-- Logotipo -->
            <div class="navbar-brand">
              <a href="#" class="navbar-item is-large"><img src="img/logo.png" alt="Welness Club"></a>
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
                  <a href="#" class="navbar-link" ><span class="avatar"><img src="img/avatar-4.jpg" alt="avatar"></span> Olá, Rodrigo</a>
                    <div class="navbar-dropdown navbar-start is-boxed">              
                    <div class="dropdown-item">
                      <p>
                        <strong>Rodrigo Costa</strong>
                        <small>Plano W Basic</small>
                      </p>
                    </div>
                    
                      <a class="navbar-item" href="#"><i class="lnr lnr-user"></i> Meus dados</a>
                      <a class="navbar-item" href="#"><i class="lnr lnr-pie-chart"></i> Minhas metas</a>
                      <a class="navbar-item" href="#"> <i class="lnr lnr-star"></i> Ranking</a>
                      <a class="navbar-item" href="#"><i class="lnr lnr-film-play"></i> Videoteca</a>
                      <hr class="navbar-divider">
                      <a class="navbar-item" href="#"><i class="lnr lnr-exit"></i> Encerrar sessão</a>
                    </div>
                </div>
                <!--Final da dropdown  -->
              </div>  
          </nav>
          </div>
        </div>
     </header>

     <!--  Planos e preços -->
     <div class="pricing-table is-comparative">
     <div class="pricing-plan is-warning">
    <div class="plan-header">Startups</div>
    <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>40</span>/month</div>
    <div class="plan-items">
      <div class="plan-item" data-feature="Storage">20GB</div>
      <div class="plan-item" data-feature="Domains">25</div>
      <div class="plan-item" data-feature="Bandwidth">1TB</div>
      <div class="plan-item" data-feature="Email Boxes">-</div>
    </div>
    <div class="plan-footer">
      <button class="button is-fullwidth">Choose</button>
    </div>
  </div>
  <!-- Cores -->
  <!-- Preto sem o is -->
  <!-- Vermelho is-danger -->
  <!-- Azul is-active -->
  <!-- amarelo is-warning -->
  </div>


  <form action="">
  <fieldset class="columns">
    <p class="column">
    <input id="switchRoundedOutlinedDefault" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined" checked="checked">
    <label for="switchRoundedOutlinedDefault">Musculação</label>
    </p>

     
  </fieldset>
  </form>