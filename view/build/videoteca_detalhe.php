<?php include ('templates/header.php'); ?>
<!-- Inicio do conteúdo -->
<section class="padrao">
  <div class="container">
   <!-- breadcrumb -->
  <nav class="breadcrumb navbar-end" aria-label="breadcrumbs">
  <ul>
    <li><a href="http://localhost/websites/wellness/build/">Home</a></li>
    <li><a href="http://localhost/websites/wellness/build/videoteca.php">Videoteca</a></li>
    <li class="is-active"><a href="#" aria-current="page">Nutrição</a></li>
  </ul>
</nav>
<!--Final  breadcrumb -->

    <div class="columns">
      <!-- Coluna -->
      <div class="column is-one-fifth">
      <?php include ('templates/menu-lateral.php'); ?>
     <hr class="divider">
      <div class="field">
  <label class="label">Envie sua dúvida</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" type="email" placeholder="Extra small">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope fa-xs"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check fa-xs"></i>
    </span>
  </div>
</div>

<div class="field">
  <div class="control has-icons-left has-icons-right">
    <input class="input" type="email" placeholder="Normal">
    <span class="icon is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-right">
      <i class="fas fa-check"></i>
    </span>
  </div>
</div>
      </div>
      <!-- Coluna -->
      <div class="column">
        <div class="conteudos">
            <h1>Nutrição</h1>
            <hr>
            <div class="columns">
                <!-- Coluna -->
                <div class="column is-full embed">
                    <iframe src="https://player.vimeo.com/video/215561640"></iframe>
                </div>
                <!-- Coluna --> 
            </div>

            <div class="columns">
            <div class="column">
            <div class="is-divider" data-content=""></div>
            <a class="button is-primary is-outlined" href="javascript:history.back()">Voltar</a>
            </div>
            
            </div>
      </div>
    </div>

  </div>
</section>

<!-- Final do conteúdo -->
<?php include ('templates/footer.php'); ?>