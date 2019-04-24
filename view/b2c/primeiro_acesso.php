<?php
session_start();
require_once '../../Config.php';

$anamnese = json_decode($_SESSION['PARAMETROS']['ANAMNESE']['xPerguntas']);
?>
<div class="main-body">
	<div class="page-wrapper">
		<div class="page-body">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-header borderless">
							<h5>Configurando Primeiro Acesso</h5>
							<span>Para que possamos lhe entregar o melhor resultado físico e bem-estar em geral, precisamos saber um pouco mais sobre seus dados atuais e um pouquinho dos seus hábitos. Baseado nessas informações que iremos configurar a melhor experiência possível em nosso Wellness Club.</span>
						</div>
					</div>
				</div>
			</div>
			<form
				id="primeiroAcessoForm"
				data-parsley-validate=""
				data-parsley-trigger="focusin focusout">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header borderless">
								<h5>1. Seu Peso</h5>
								<span>Seu peso atual e o desejado é de extrema importância para nós. Gostaríamos de saber em que ponto você está e para qual ponto quer chegar. Preencha seu peso atual (peso de hoje) e qual o peso desejado. Ex: Qual o peso que você já teve que mais te agradou ate hoje ou o peso que você se sente mais confortável?</span>
							</div>
							<div class="card-block">
								<div class="form-group row">
									<div class="col-sm-6">
										<input
											id="vPesoInicial"
											name="vPesoInicial"
											required="required"
											type="text"
											class="form-control form-control-normal fill"
											placeholder="Seu Peso Atual">
									</div>
									<div class="col-sm-6">
										<input
											id="vPesoDesejado"
											name="vPesoDesejado"
											required="required"
											type="text"
											class="form-control form-control-normal fill"
											placeholder="Seu Peso Desejado">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header borderless">
								<h5>2. Definir Meta</h5>
								<span>Defina em quantas semanas você deseja eliminar seu peso “extra”. Seu cérebro só entende uma tarefa quando deixa claro para ele... quantos kg eliminar e em quantos dias para finalizar essa tarefa.</span>
							</div>
							<div class="card-block">
								<div class="form-group row">
									<div class="col-sm-6">
										<select
											name="indPrazo"
											required="required"
											class="form-control fill">
											<option value="">Selecione Sua Meta</option>
											<option value="4">4 Semanas</option>
											<option value="8">8 Semanas</option>
											<option value="12">12 Semanas</option>
											<option value="16">16 Semanas</option>
											<option value="20">20 Semanas</option>
										</select>
									</div>
									<div class="col-sm-3">
										<input
											id="dInicio"
											name="dInicio"
											required="required"
											type="text"
											class="form-control form-control-normal fill"
											placeholder="Data De Inicio">
									</div>
									<div class="col-sm-3">
										<input
											name="dTermino"
											type="text"
											class="form-control form-control-normal fill"
											readonly
											placeholder="Data Final">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header borderless">
										<h5>3. Fotos Iniciais</h5>
										<span>Tire uma foto de frente, uma de lado e outra de costas em um fundo neutro com roupas leves de ginastica ou traje de banho para que possamos acompanhar sua evolução através das imagens. Em muitos casos, percebemos a mudança muito mais rápida no visual do que na balança. As imagens não serão compartilhadas sem a sua permissão.</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header borderless">
										<h5>Foto Frente</h5>
									</div>
									<div
										class="card-block"
										style="text-align: center;">
										<input
											hidden="true"
											id="xFotoFrente"
											name="xFotoFrente" /> <img
											id="previewing_1"
											src="<?php echo _URL_SISTEMA; ?>view/assets/images/humano-frente-m.png"
											width="auto"
											height="300px" />
									</div>
									<div class="custom-file">
										<label
											class="btn btn-info btn-block"
											for="file1"> <input
											data-fileindex="1"
											id="file1"
											type="file"
											style="display: none;"> Enviar Foto
										</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header borderless">
										<h5>Foto Perfil</h5>
									</div>
									<div
										class="card-block"
										style="text-align: center;">
										<input
											hidden="true"
											id="xFotoPerfil"
											name="xFotoPerfil" /> <img
											id="previewing_2"
											src="<?php echo _URL_SISTEMA; ?>view/assets/images/humano-perfil-m.png"
											width="auto"
											height="300px" />
									</div>
									<div class="custom-file">
										<label
											class="btn btn-info btn-block"
											for="file2"> <input
											data-fileindex="2"
											id="file2"
											type="file"
											style="display: none;"> Enviar Foto
										</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header borderless">
										<h5>Foto Costas</h5>
									</div>
									<div
										class="card-block"
										style="text-align: center;">
										<input
											hidden="true"
											id="xFotoCostas"
											name="xFotoCostas" /> <img
											id="previewing_3"
											src="<?php echo _URL_SISTEMA; ?>view/assets/images/humano-costas-m.png"
											width="auto"
											height="300px" />
									</div>
									<div class="custom-file">
										<label
											class="btn btn-info btn-block"
											for="file3"> <input
											data-fileindex="3"
											id="file3"
											type="file"
											style="display: none;"> Enviar Foto
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header borderless">
								<h5>4. Seus Interesses</h5>
								<span>Esta área (dieta, plano de treinos, pnl/coaching e suplementação) consideramos umas das mais importantes na sua configuração, pois são estes dados que definirão seu perfil de cliente, seus hábitos, seus objetivos, seu comportamento. Nossa missão é entregar exclusividade em relação aos nossos serviços para que seus resultados tenha o máximo de satisfação possivel.</span>
							</div>
							<div class="card-block">
								<div class="row">
									<div class="col-sm-3">
										<h4 class="sub-title">Dieta</h4>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													data-parsley-required="true"
													data-parsley-mincheck="1"
													data-parsley-maxcheck="2"
													data-parsley-errors-container="#xInteresseDietaMessageHolder"
													name="xInteresseDieta[]"
													value="T"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Tradicional</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseDieta[]"
													value="K"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Kato</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseDieta[]"
													value="V"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Vegetariana</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseDieta[]"
													value="P"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Paleo</span>
												</label>
											</div>
										</div>
										<div id="xInteresseDietaMessageHolder"></div>
									</div>
									<div class="col-sm-3">
										<h4 class="sub-title">Plano De Treinos</h4>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													data-parsley-required="true"
													data-parsley-mincheck="1"
													data-parsley-maxcheck="2"
													data-parsley-errors-container="#xInteresseTreinoMessageHolder"
													type="checkbox"
													name="xInteresseTreino[]"
													value="M"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Musculação</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseTreino[]"
													value="C"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Corrida</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseTreino[]"
													value="F"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Funcional</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseTreino[]"
													value="O"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Outros</span>
												</label>
											</div>
										</div>
										<div id="xInteresseTreinoMessageHolder"></div>
									</div>
									<div class="col-sm-3">
										<h4 class="sub-title">PNL / COACH</h4>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													data-parsley-required="true"
													data-parsley-mincheck="1"
													data-parsley-maxcheck="2"
													data-parsley-errors-container="#xInteresseCoachMessageHolder"
													type="checkbox"
													name="xInteresseCoach[]"
													value="NH"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Novos Hábitos</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseCoach[]"
													value="C"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Crenças</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseCoach[]"
													value="F"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Foco</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseCoach[]"
													value="D"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Disciplina</span>
												</label>
											</div>
										</div>
										<div id="xInteresseCoachMessageHolder"></div>
									</div>
									<div class="col-sm-3">
										<h4 class="sub-title">Suplementação</h4>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													data-parsley-required="true"
													data-parsley-mincheck="1"
													data-parsley-maxcheck="2"
													data-parsley-errors-container="#xInteresseSuplementacaoMessageHolder"
													type="checkbox"
													name="xInteresseSuplementacao[]"
													value="M"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Mexe</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseSuplementacao[]"
													value="P"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Proteínas</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseSuplementacao[]"
													value="L"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Lanches</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<label> <input
													type="checkbox"
													name="xInteresseSuplementacao[]"
													value="E"> <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span> <span>Emagrecimento</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="checkbox-fade fade-in-primary col-sm-12">
												<div id="xInteresseSuplementacaoMessageHolder"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header borderless">
								<h5>5. Anamnese Corporal</h5>
								<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis vitae tellus ac facilisis. Mauris bibendum ultrices nulla, vitae pellentesque felis interdum vitae. Fusce posuere lacus vitae dignissim vulputate. Ut suscipit ex in mauris dapibus, id viverra massa ultricies. Nullam faucibus quis leo eu ultricies. Integer convallis nisl lectus, in tristique odio sagittis at. Sed laoreet dictum lectus, eget semper justo accumsan non. Curabitur gravida eget neque vitae bibendum.</span>
							</div>
							<div class="card-block">
    							<?php foreach ($anamnese as $key => $value) : ?>
    							<div
									class="row"
									style="margin-bottom: 10px;">
									<div class="col-sm-12">
										<h4
											class="sub-title"
											style="margin-bottom: 5px;"><?php echo ($key + 1) . '. '. $value->xPergunta?></h4>
										<div id="xAnamneseMessageHolder_<?php echo $key?>"></div>
									</div>
									<div class="col-sm-6">
										<div class="form-radio">
											<?php foreach ($value->xAlternativas as $alternativa) : ?>
											<div class="radio radio-inline">
												<input
													hidden="hidden"
													name="xAnamnese[<?php echo $key?>][cod]"
													value="<?php echo $value->cod ?>"> <input
													hidden="hidden"
													name="xAnamnese[<?php echo $key?>][xPergunta]"
													value="<?php echo $value->xPergunta?>"> <label> <input
													type="radio"
													data-parsley-required="true"
													data-parsley-errors-container="#xAnamneseMessageHolder_<?php echo $key?>"
													name="xAnamnese[<?php echo $key?>][xResp]"
													onclick="$('#xAnamnese_inputfield_<?php echo $key?>').prop('disabled', <?php echo $alternativa->isHabilitaTextField == 'S' ? 'false' : 'true'?>); $('#xAnamnese_inputfield_<?php echo $key?>').prop('required', <?php echo ($alternativa->isHabilitaTextField == 'S' && $value->requiredTextField == 'S') ? 'true' : 'false'?>); $('#xAnamnese_inputfield_<?php echo $key?>').parsley().reset();"
													value="<?php echo $alternativa->key?>"> <i class="helper"></i><?php echo $alternativa->value?>
												</label>
											</div>
											<?php endforeach;?>
										</div>
									</div>
									<div class="col-sm-6">
									<?php if($value->hasTextField == 'S') :?>
										<input
											id="xAnamnese_inputfield_<?php echo $key?>"
											name="xAnamnese[<?php echo $key?>][xRespTxt]"
											type="text"
											disabled="disabled"
											class="form-control"
											placeholder="<?php echo $value->textFieldPlaceHolder?>">
										<?php endif;?>
									</div>
								</div>
    							<?php endforeach;?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center">
						<button
							id="btnConfirmar"
							class="btn btn-success btn-round waves-effect waves-light">Confirmar Configuração Inicial</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
PrimeiroAcesso.inicia();
</script>