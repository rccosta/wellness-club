<?php
session_start();
require_once '../../Config.php';
?>
<div class="main-body">
	<div class="page-wrapper">
		<div class="page-body">
			<div class="row">
			<?php if($_SESSION['INDEX_USUARIO']->isConfigurado == 'N'):?>
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-header borderless">
							<h5>Precisamos saber mais sobre você :D teste</h5>
						</div>
						<div class="card-block">
							<p>Pelo que vi aqui é seu primeiro acesso, ficamos muito felizmes por ter nos escolhido.</p>
							<p>Agora precisamos coletar algumas informações para sempre lhe entregar o melhor conteudo de nossa plataforma..</p>
							<a
								href="#/b2c/primeiroacesso/"
								class="btn btn-success btn-round waves-effect waves-light">Vamos lá!</a>
						</div>
					</div>
				</div>
			<?php endif;?>
			</div>
		</div>
	</div>
</div>