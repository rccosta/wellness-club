<?php include ('templates/header.php'); ?>
<!-- Inicio do conteúdo -->

<section class="padrao">
    <div class="container">               
        <form class="form-padrao" action="">
            <ul id="progresso" class="">
                <li class="<?php echo $_GET['p'] == 1 ? 'ativo' : ''?>">Peso</li>
                <li class="<?php echo $_GET['p'] == 2 ? 'ativo' : ''?>">Meta</li>
                <li class="<?php echo $_GET['p'] == 3 ? 'ativo' : ''?>">Fotos</li>
                <li class="<?php echo $_GET['p'] == 4 ? 'ativo' : ''?>">Interesses</li>
                <li class="<?php echo $_GET['p'] == 5 ? 'ativo' : ''?>">Anamnese</li>
            </ul>

<?php if($_GET['p'] == 1) :?>
            <fieldset>               
            <legend>Informe seus dados</legend>
            <div class="columns ">
                <div class="column">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque illum beatae quo eveniet voluptas quas hic cumque maxime. Impedit veritatis maxime obcaecati illum ipsa, earum dolorum labore ea hic voluptatem!
                </div>
            </div>
            <div class="columns"> 
                <div class="column is-half">
                    <label for="pesoAtual">Peso atual</label>
                    <input class="input"  type="text" placeholder="Primary input">                   
                </div>

                <div class="column">
                <label for="pesoDesejado">Peso desejado</label>
                        <input type="text" class="input" id="pesoDesejado" placeholder="Digite seu peso atual" required> 
                </div>
                </div>

                <div class="columns">
                <div class="column">
                    <input type="submit" name="next" class="direita next"  value=" Avançar">
                    <input type="submit"  name="prev" class="esquerda prev"  value=" voltar">
                </div>
                </div>
            </fieldset>
<?php endif;?>
<?php if($_GET['p'] == 2) :?>
            <fieldset>               
            <legend>Definir sua meta</legend> <br>
            <div class="columns">
                <div class="column">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque illum beatae quo eveniet voluptas quas hic cumque maxime. Impedit veritatis maxime obcaecati illum ipsa, earum dolorum labore ea hic voluptatem!
                </div>
            </div>
            <div class="columns"> 
                <div class="column is-half">
                <label for="dataInicio">Meta</label>
                <select class="custom-select" required>
                    <option value="">Selecione sua meta</option>
                    <option value="1">4 semanas</option>
                    <option value="2">8 semanas</option>
                    <option value="3">16 semanas</option>
                    <option value="4">20 semanas</option>
                </select>                  
                </div>

                <div class="column">
                    <label for="dataInicio">Data de inicio</label>
                    <input type="date" class="form-control" id="dataInicio" placeholder="Data de inicio" required>  
                </div>

                </div>
                <div class="columns">
                <div class="column">
                    <input type="submit" name="next" class="direita next"  value=" Avançar">
                    <input type="submit"  name="prev" class="esquerda prev"  value=" voltar">
                </div>
                </div>
            </fieldset>
<?php endif;?>
<?php if($_GET['p'] == 3) :?>
            <fieldset>               
            <legend>Selecione 3 fotos iniciais</legend> <br>
            <div class="columns">
                <div class="column">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque illum beatae quo eveniet voluptas quas hic cumque maxime. Impedit veritatis maxime obcaecati illum ipsa, earum dolorum labore ea hic voluptatem!
                </div>
            </div>
            <div class="columns"> 
                <div class="column">
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Selecionar uma foto</label>
                        <span class="valid-feedback">Foto selecionada!</span>
                    </div>                  
                </div>

                <div class="column">
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Selecionar uma foto</label>
                        <span class="valid-feedback">Foto selecionada!</span>
                    </div>                  
                </div>

                <div class="column">
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Selecionar uma foto</label>
                        <span class="valid-feedback">Foto selecionada!</span>
                    </div>                  
                </div>
                </div>
                <div class="columns">
                <div class="column">
                    <input type="submit" name="next" class="direita next"  value=" Avançar">
                    <input type="submit"  name="prev" class="esquerda prev"  value=" voltar">
                </div>
                </div>
            </fieldset>
<?php endif;?>
<?php if($_GET['p'] == 4) :?>
            <fieldset>               
            <legend>Seus interesses</legend>
            <div class="columns">
                <div class="column">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque illum beatae quo eveniet voluptas quas hic cumque maxime. Impedit veritatis maxime obcaecati illum ipsa, earum dolorum labore ea hic voluptatem!
                </div>
            </div>
            

            <div class="columns">
                <!-- Coluna Dieta -->
                <div class="column campos">
                    <h1>Sua dieta</h1>
                    <div class="is-divider" data-content="Escolher"></div>
                    <div class="field">
                        <input id="d1" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                        <label for="d1">Dieta Kato</label>
                    </div>

                    <div class="field">
                        <input id="d2" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                        <label for="d2">Dieta Vegana</label>
                    </div>

                    <div class="field">
                        <input id="d3" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                        <label for="d3">Dieta Tradicional</label>
                    </div>

                    <div class="field">
                        <input id="d4" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-normal is-outlined" checked="checked">
                        <label for="d4">Dieta Páleo</label>
                    </div>
                </div>
                <!-- Final da Coluna Dieta -->

                 <!-- Coluna Plano de treino -->
                <div class="column campos">
                <h1>Plano de treino</h1>
                    <div class="is-divider" data-content="Escolher"></div>
                        <div class="field">
                            <input id="p1" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                            <label for="p1">Treinos de corrida</label>
                        </div>

                        <div class="field">
                            <input id="p2" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                            <label for="p2">Treino de Musculação</label>
                        </div>

                        <div class="field">
                            <input id="p3" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                            <label for="p3">Treino Funcional</label>
                        </div>

                        <div class="field">
                            <input id="p4" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-normal is-outlined" checked="checked">
                            <label for="p4">Outros Treinos</label>
                        </div>
                </div>
                 <!-- Final da coluna plano de treino -->

                 <!-- Coluna PNS -->
                <div class="column campos">
                <h1>PNL / Coach</h1>
                    <div class="is-divider" data-content="Escolher"></div>
                        <div class="field">
                            <input id="pl1" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                            <label for="pl1">Novos Hábitos</label>
                        </div>

                        <div class="field">
                            <input id="pl2" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                            <label for="pl2">Eliminar Cresnças</label>
                        </div>

                        <div class="field">
                            <input id="pl3" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                            <label for="pl3">Aumentar Foco</label>
                        </div>

                        <div class="field">
                            <input id="pl4" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-normal is-outlined" checked="checked">
                            <label for="pl4">Melhorar disciplina</label>
                        </div>
                </div>
                <!-- FInal da coluna PNL -->
                
                <!-- coluna Suplementação -->
                <div class="column campos">
                <h1>Suplementação</h1>
                <div class="is-divider" data-content="Escolher"></div>
                    <div class="field">
                        <input id="s1" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                        <label for="s1">Para Emagrecer</label>
                    </div>

                    <div class="field">
                        <input id="s2" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                        <label for="s2">Com Lanches</label>
                    </div>

                    <div class="field">
                        <input id="s3" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-outlined is-normal" checked="checked">
                        <label for="s3">Com Proteínas</label>
                    </div>

                    <div class="field">
                        <input id="s4" type="checkbox" name="switchRoundedOutlinedDefault" class="switch is-rounded is-normal is-outlined" checked="checked">
                        <label for="s4">Com Mexe</label>
                    </div>
                </div>
                <!-- Final da coluna suplementação -->
            </div>
               
              
                <div class="columns">
                <div class="column">
                    <input type="submit" name="next" class="direita next"  value=" Avançar">
                    <input type="submit"  name="prev" class="esquerda prev"  value=" voltar">
                </div>
                </div>
            </fieldset>
<?php endif;?>
        </form>       
    </div>
</section>

<!-- final do conteúdo -->
<?php include ('templates/footer.php'); ?>