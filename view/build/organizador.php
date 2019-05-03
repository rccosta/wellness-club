<form action="" class="padrao">
                    <ul id="progresso">
                        <li class="ativo">Peso</li>
                        <li>Meta</li>
                        <li>Fotos</li>
                        <li>Interesses</li>
                        <li>Anamnese</li>
                    </ul>

                   <fieldset class="row">
                       <div class="col-md-12 text-center">
                        <h2 >Informe seu peso</h2>
                        <p>
                        Seu peso atual e o desejado é de extrema importância para nós. Gostaríamos de saber em que ponto você está e para qual ponto quer chegar. Preencha seu peso atual (peso de hoje) e qual o peso desejado. Ex: Qual o peso que você já teve que mais te agradou ate hoje ou o peso que você se sente mais confortável?
                        </p>
                        <br><hr><br>
                        </div>
                        <p class="col-md-6">
                            <input type="text" class="form-control" placeholder="Digite seu peso atual">                        
                        </p>
                        <p class="col-md-6">
                            <input type="text" class="form-control" placeholder="Digite seu peso desejado">
                        </p>
                        <p class="col-md-12">
                            <input type="button" class="direita" name="next" value=" Avançar">
                            <input type="button" class="esquerda disabled" name="next" aria-disabled="true" value=" voltar">
                        </p>
                   </fieldset>

                   <fieldset class="row">
                       <div class="col-md-12 text-center">
                        <h2 >Definir sua meta</h2>
                        <p>
                        Defina em quantas semanas você deseja eliminar seu peso “extra”. Seu cérebro só entende uma tarefa quando deixa claro para ele... quantos kg eliminar e em quantos dias para finalizar essa tarefa.
                        </p>
                        <br><hr><br>
                        </div>
                        <p class="col-md-4">
                            <input type="date" class="form-control" placeholder="Data de inicio">                        
                        </p>
                        <p class="col-md-4">
                            <input type="text" class="form-control" placeholder="Digite seu peso desejado">
                        </p>

                        <p class="col-md-4">
                            <input type="text" class="form-control" placeholder="Digite seu peso desejado">
                        </p>
                        <p class="col-md-12">
                            <input type="submit" name="prev" class="direita" name="next" value=" Avançar">
                            <input type="submit"  name="next" class="esquerda disabled" name="next" value=" voltar">
                        </p>
                   </fieldset>

                   <fieldset class="row">
                       <div class="col-md-12 text-center">
                        <h2 >Selecione 3 fotos iniciais</h2>
                        <p>
                        Tire uma foto de frente, uma de lado e outra de costas em um fundo neutro com roupas leves de ginastica ou traje de banho para que possamos acompanhar sua evolução através das imagens. Em muitos casos, percebemos a mudança muito mais rápida no visual do que na balança. As imagens não serão compartilhadas sem a sua permissão.
                        </p>
                        <br><hr><br>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="img/humano-frente-m.png" class="img-fluid" alt="logotipo" srcset="">
                            <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Escolha uma foto</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
                        </div>
                        
                        <div class="col-md-4 text-center">
                            <img src="img/humano-frente-m.png" class="img-fluid" alt="logotipo" srcset="">
                             <input type="file" name="arquivo" id="arquivo" />                              <span>imagem de perfil</span>
                        </div>

                        <div class="col-md-4 text-center">
                            <img src="img/humano-frente-m.png" class="img-fluid" alt="logotipo" srcset="">
                             <input type="file" name="arquivo" id="arquivo" />                              <span>imagem de costas</span>
                        </div>
                        
                        <p class="col-md-12">
                            <input type="button" class="direita" name="next" value=" Avançar">
                            <input type="button" class="esquerda disabled" name="next" aria-disabled="true" value=" voltar">
                           
                        </p>
                   </fieldset>
                </form>