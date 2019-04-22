<?php
session_start();
require_once '../../Config.php';
?>
<div class="main-body">
	<div class="page-wrapper">
		<div class="page-body">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-header borderless">
							<h5>Videoteca</h5>
							<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis vitae tellus ac facilisis. Mauris bibendum ultrices nulla, vitae pellentesque felis interdum vitae. Fusce posuere lacus vitae dignissim vulputate. Ut suscipit ex in mauris dapibus, id viverra massa ultricies. Nullam faucibus quis leo eu ultricies. Integer convallis nisl lectus, in tristique odio sagittis at. Sed laoreet dictum lectus, eget semper justo accumsan non. Curabitur gravida eget neque vitae bibendum.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="card">
						<div class="card-block">
							<h6 class="sub-title">Conteúdos</h6>
							<ul class="basic-list text-center">
								<li class="">
									<h6>
										<a
											class="linkConteudo"
											href="#"
											data-xcategoria="702771">Nutrição</a>
									</h6>
								</li>
								<li class="">
									<h6>
										<a
											class="linkConteudo"
											href="#"
											data-xcategoria="702743">Exercício Físico</a>
									</h6>
								</li>
								<li class="">
									<h6>Educação Financeira</h6>
								</li>
								<li class="">
									<h6>Coaching PNL</h6>
								</li>
								<li class="">
									<h6>Medicina Preventiva</h6>
								</li>
								<li class="">
									<h6>Seja um Influencer</h6>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div
					id="divLista"
					class="col-lg-9"></div>
			</div>
		</div>
	</div>
</div>
<script>
Videoteca.inicia();
</script>