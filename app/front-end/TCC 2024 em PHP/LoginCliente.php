<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Hotelaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

      .custom-btn {
        min-width: 200px; 
        height: 200px; 
        border-radius: 15px; 
        background-color: #8DBAC8; 
        font-weight: bold; 
        font-size: 25px; 
      }

      .center-vertical {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90vh;
      }
    </style>
</head>
  <body>
    <!-- Barra de Navegação (Header)-->
    <nav class="navbar d-flex justify-content-evenly border fs-3">
      <a class="nav-link active p-3" href="#">CRM4SH.com</a>          
      <a class="nav-link active p-3" href="#informacoes">Informações</a>        
      <a class="nav-link active p-3" href="#servicos">Serviços</a>
      <a class="nav-link active p-3" href="imoveisFiltro.html">Imóveis Disponíveis</a>                      

      <div class="btn-group" role="group">
        <span class="btn btn-dark dropdown-toggle fs-4" data-bs-toggle="dropdown" aria-expanded="false">
          Olá, Cliente!
        </span>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item fs-4" href="#">Minha conta</a></li>
          <li><a class="dropdown-item fs-4" href="#">Sair</a></li> 
        </ul>
      </div>
    </nav>

    <!-- Botões no meio da tela -->
    <div class="center-vertical" style="margin-top: -50px;"> 
      <div class="d-flex justify-content-center mt-3">
        <a href="ReservasCliente.html">
          <button type="button" class="btn btn-light btn-lg me-2 custom-btn">
          <span class="text-dark">Reservas</span>
          </button>
        </a>
        
        <a href="FinanceiroCliente.html">
          <button type="button" class="btn btn-light btn-lg me-2 custom-btn">
          <span class="text-dark">Financeiro</span>
          </button>
        </a>
        
        <a href="PerfilCliente.html">
          <button type="button" class="btn btn-light btn-lg custom-btn">
            <span class="text-dark">Perfil</span>
          </button>
        </a>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>