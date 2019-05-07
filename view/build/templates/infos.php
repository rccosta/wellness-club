<section class="informacoes">
<div class="hero-body">
<div class="container">
    <div class="columns">
     <div class="column is-half">        
        <h1><?php echo  ($_SESSION['INDEX_USUARIO']->xNome . ' ' .  $_SESSION['INDEX_USUARIO']->xSobrenome)?></h1>
        <p>Seu plano atual é WBasic</p>
        <a href="http://localhost/websites/wellness/build/planos.php" class="tooltip" data-tooltip="Edite seus dados">Alterar Plano</a> 
    </div>
    <div class="column">
        <div class="info">
        <hgroup>
            <h2>Peso atual</h2>
            <h3><span><?php echo (  $_SESSION['INDEX_USUARIO_META'] == NULL ? '--' : $_SESSION['INDEX_USUARIO_META']->vPesoDesejado) ?></span> Kg</h3>
        </hgroup>
        </div>
    </div>

    <div class="column">
        <div class="info">
        <hgroup>
            <h2>Peso desejado</h2>
            <h3><span><?php echo (  $_SESSION['INDEX_USUARIO_META'] == NULL ? '--' : $_SESSION['INDEX_USUARIO_META']->vPesoDesejado) ?></span> Kg</h3>
        </hgroup>
        </div>
    </div>
    <div class="column">
        <div class="info">
            <hgroup>
            <h2>Pontuação</h2>
            <h3><span><?php echo $_SESSION['INDEX_USUARIO']->nPontos ?></span> Pts </h3>
            </hgroup>                   
        </div>
    </div>            
    </div>
    </div>
</div>
</section>