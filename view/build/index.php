<?php include ('templates/header.php'); ?>

<section class="padrao">
  <div class="container">
  <div class="columns">
      <div class="column is-one-quarter">
          <?php include ('templates/sidebar-home.php'); ?>
      </div>

      <div class="column">


      <div class="notification is-danger">
  <button class="delete"></button>
  <h1>Importante</h1>
  <p>
    Para que você apreveite ao máximo a plataform, precisamos que preencha todos os campos corretamente. <strong>Lembramos</strong> não divulgamos seus resultados a não ser que nos permita. Desejamos boa sorte nessa jornada e estamos na torcida para juntos melhorar seu estilo de vida.
  </p>
  <br>
  <p><a class="button is-rounded is-dark">Atualizar dados</a></p>
</div>

   
   
      <canvas class="line-chart"></canvas>
      <script>
        var ctx = document.getElementsByClassName("line-chart");
        //Qual o tipo do grárico?
        var chartGraph = new Chart(ctx, {
          type: 'line',
          data:{
            labels: ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],
            datasets: [{
              label: "OBJETIVO",
              data:[12.5, 12.5, 12.5, 12.5, 12.5, 12.5, 12.5, 12.5, 12.5, 12.5, 12.5, 12.5, ],
              borderWidth:3,
              borderColor:'rgba(77, 166, 253, 0.85)',
              backgroundColor: 'transparent',
            },

            {
              label: "SEU PROGRESSO",
              data:[5, 10, 15, 15, 10, 5, 15, 20, 10, 12, 5, 14],
              borderWidth:3,
              borderColor:'rgba(0, 184, 148,1.0)',
              backgroundColor: 'transparent',
            }]      
          },
          // options:{
          //   title:{
          //     display: true,
          //     fontSize:80,
          //     text: "Gráfico do seu desenvolvimento"
          //   },
          // }, 
      });
      </script>    
    </div>
    </div>

  </div>
  </div>
</section>

<section class="padrao">
  <div class="container">
  <div class="is-divider" data-content="Preferências"></div>
      <h1 class="title is-1">Suas preferências</h1>

      <div class="columns">
          <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
              </div>            
              <div class="card-content">
                <div class="content">
                
                  <div class="is-divider" data-content="Dieta"></div>  
                    <div class="tags are-medium hero">
                      <span class="tag is-primary ">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag ">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag">Escolha 1</span>
                    </div>
                    
              </div>

              <div class="content">
                <a href="http://localhost/websites/wellness/build/configuracao.php" class="button">Editar</a>
                </div>

            </div>
          </div>
        </div>

        <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
              </div>            
              <div class="card-content">
                <div class="content">
                <div class="is-divider" data-content="Suplementação"></div>  
                    <div class="tags are-medium hero">
                      <span class="tag is-primary ">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag ">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag ">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag">Escolha 1</span>
                    </div>
                 
                    <div class="content">
                <a href="http://localhost/websites/wellness/build/configuracao.php" class="button">Editar</a>
                </div>
                           
              </div>
            </div>
          </div>
        </div>

        <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
              </div>            
              <div class="card-content">
                <div class="content">
                    <div class="is-divider" data-content="Plano de treino"></div>  
                    <div class="tags are-medium hero">
                      <span class="tag">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag is-primary">Escolha 1</span>
                    </div>                          
                </div>

                <div class="content">
                <a href="http://localhost/websites/wellness/build/configuracao.php" class="button">Editar</a>
                </div>
            </div>
          </div>
        </div>

        <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
              </div>            
              <div class="card-content">
                <div class="content">
                <div class="is-divider" data-content="PNL / Coach"></div>  
                    <div class="tags are-medium hero">
                      <span class="tag">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag is-primary">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag">Escolha 1</span>
                    </div>

                    <div class="tags are-medium hero">
                      <span class="tag ">Escolha 1</span>
                    </div>

                    <div class="content">
                <a href="http://localhost/websites/wellness/build/configuracao.php" class="button">Editar</a>
                </div>
                           
              </div>
            </div>
          </div>
        </div>
        
       

      </div>
  </div>
</section>




<!-- final do conteúdo -->
<?php include ('templates/footer.php'); ?>