<?php include ('inc/header.php'); ?>
<section class="padrao captar">
    <div class="container"> 
        <div class="row">
            <form action="" class="col-md-12">
                <!-- Dados Pessoais -->
                <fieldset class="row">
                    <legend>Você é?</legend>
                    <p class="col-md-4 text-center">
                        <input type="radio" id="alternativa1" name="alternativa" value="A" /> <label for="alternativa1"> Homem</label>        
                    </p> 
                    
                    <p class="col-md-4 text-center">
                        <input type="radio" id="alternativa2" name="alternativa" value="B" /> <label for="alternativa2"> Mulher</label>
                    </p>

                    <p class="col-md-4 text-center">
                        <input type="radio" id="alternativa3" name="alternativa" value="C" /> <label for="alternativa3"> Outro</label>
                    </p>
                </fieldset>

                 <!-- Atividade física -->
                 <fieldset class="row">
                     <legend>Seus dados</legend>     
                     
                     <label class="col-md-12">Informações pessoais</label> 
                    <p class="col-md-6">
                      <input type="text" placeholder="Qual o seu nome?">
                    </p>
                    <p class="col-md-6">
                      <input type="text" placeholder="Qual o seu e-mail?">
                    </p>

                    <p class="col-md-4">
                      <input type="text" placeholder="Qual a sua idade?">
                    </p>

                    <p class="col-md-4">
                      <input type="text" placeholder="Qual o seu peso?">
                    </p>

                    <p class="col-md-4">
                      <input type="text" placeholder="Qual a sua altura?">
                    </p>

                    <label class="col-md-12">Objetivos</label> 
                    
                    <p class="col-md-4">
                      <input type="text" placeholder="Qual o peso desejado?">
                    </p>

                    <p class="col-md-4">
                    <select name="prazo" id="prazo">
                        <option value="selecione">Selecione um prazo</option>
                        <option value="4sem">4 Semanas</option>
                        <option value="8sem">8 Semanas</option>
                        <option value="12sem">12 Semanas</option>
                        <option value="16sem">16 Semanas</option>
                    </select>
                    </p>

                    <p class="col-md-4">
                        <input type="date" name="data_nascimento" placeholder="Datad einicio" />
                    </p>
                </fieldset>

                <!-- Atividade física -->
                <fieldset class="row">
                    <legend>Atividade física</legend>
                    <label class="col-md-12">Informações importantes</label> 
                    <p class="col-md-6">
                    <select name="tipo" id="tipo">
                        <option value="selecione">Selecione um tipo</option>
                        <option value="tipo1">Caminhada</option>
                        <option value="tipo2">Corrida</option>
                        <option value="tipo3">Academia</option>
                        <option value="tipo4">Bike</option>
                        <option value="tipo4">Natação</option>
                        <option value="tipo4">Outro</option>
                    </select>
                    </p>

                    <p class="col-md-6">
                    <select name="frequencia" id="frequencia">
                        <option value="selecione">Frequência</option>
                        <option value="fa">1 a 2 vezes por semana</option>
                        <option value="fb">3 a 5 vezes por semana</option>
                        <option value="fc">5 a 7 vezes por semana</option>                 
                    </select>
                    </p>
                    <label class="col-md-12">Restrição médica</label> 
                    <p class="col-md-2">
                        <input type="radio" id="sim" name="alternativa" value="A" /> <label for="sim"> Sim</label>        
                    </p> 
                    
                    <p class="col-md-2">
                        <input type="radio" id="nso" name="alternativa" value="B" /> <label for="alternnsoativa2"> Não</label>
                    </p>

                    <p class="col-md-2">
                        <input type="radio" id="naosei" name="alternativa" value="C" /> <label for="naosei"> Ainda não sei</label>
                    </p>
                    <p class="col-md-12">
                      <input type="text" placeholder="Qual a redtrição">
                    </p>
                </fieldset>

                 <!-- Aliemntaçõa -->
                 <fieldset class="row">
                    <legend>Sua preferência alimentar</legend>
                    <p class="col-md-4">
                        <label class="col-md-12">Carnes</label>                   
                        <input type="checkbox" id="bovinas" name="alternativa" value="bovinas" /> <label for="bovinas">Bovinas</label>                
                        <input type="checkbox" id="suinas" name="alternativa" value="suinas" /> <label for="suinas">Suínas</label>
                        <input type="checkbox" id="aves" name="alternativa" value="aves" /> <label for="aves">Avês</label>
                        <input type="checkbox" id="todas" name="alternativa" value="todas" /> <label for="todas">Todas</label>
                    </p>

                    <p class="col-md-4">
                        <label class="col-md-12">Legumes</label>                   
                        <input type="checkbox" id="couveflor" name="alternativa" value="couveflor" /> <label for="couveflor">Couve-flor</label>                
                        <input type="checkbox" id="brocolis" name="alternativa" value="brocolis" /> <label for="brocolis">Brócolis</label>
                        <input type="checkbox" id="abobora" name="alternativa" value="abobora" /> <label for="abobora">Abóbora</label>
                        <input type="checkbox" id="cogumelo" name="alternativa" value="cogumelo" /> <label for="cogumelo">Cogumelo</label>
                    </p>

                    <p class="col-md-4">
                        <label class="col-md-12">Frutas</label>                   
                        <input type="checkbox" id="abacate" name="alternativa" value="abacate" /> <label for="abacate">Abacate</label>                
                        <input type="checkbox" id="banana" name="alternativa" value="banana" /> <label for="banana">Banana</label>
                        <input type="checkbox" id="coco" name="alternativa" value="coco" /> <label for="coco">Coco</label>
                        <input type="checkbox" id="castanhas" name="alternativa" value="castanhas" /> <label for="castanhas">Castanhas</label>
                    </p>
                </fieldset>

                 <!-- Rotina -->
                 <fieldset class="row">
                    <legend>Rotina</legend>
                </fieldset>

                 <!-- Finalização -->
                 <fieldset class="row">
                    <legend>Finalização</legend>
                </fieldset>
            </form>
        </div>
    </div>
</section>

<?php include ('inc/footer.php'); ?>