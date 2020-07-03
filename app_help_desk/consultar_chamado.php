<html>
  <head>
    <meta charset="utf-8" />
    <title>App Chamados</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Chamados
      </a>
      <a href="index.php">Sair</a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
            <form method="get" action="chamado_002.php">
              Consulta de chamado
              <input name="Chamado" type="text" class="text" placeholder="Buscar Chamado">
              <a href="#"><button>Buscar</button></a>
            </div>
            
            
            <div class="card-body">
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h6>0002</h6>
                  <h5 class="card-title">Manutenção de impressora</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Impressora</h6>
                  <p class="card-text">Impressora esá iprimindo manchado com riscos.</p>

                </div>
              </div>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h6>0001</h6>
                  <h5 class="card-title">Falha de hd</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Hardware</h6>
                  <p class="card-text">Ao ligar o computador aparece a mensagem de disco cheio pedindo para liberar espaço, preciso salvar meus dados porem por problema no computador não me permite.</p>

                </div>
              </div>

              <div class="row mt-5">
                <div class="col-6">
                <form action="home.php" method="post">
                        <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
