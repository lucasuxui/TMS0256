<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Hotelaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        function confirmarEstadia() {
            alert("Check-in confirmado!");
        }
    </script>
</head>
<body>
    <!-- Barra de Navegação (Header)-->
    <nav class="navbar d-flex justify-content-evenly border fs-3">
        <a class="nav-link active p-3" aria-current="page" href="home.html">CRM4SH.com</a>          
        <a class="nav-link active p-3" aria-current="page" href="home.html#informacoes">Informações</a>        
        <a class="nav-link active p-3" href="home.html#servicos">Serviços</a>
        <a class="nav-link active p-3" href="imoveisFiltro.html">Imóveis Disponíveis</a>                      
        
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-dark dropdown-toggle fs-4" data-bs-toggle="dropdown" aria-expanded="false">
                Acessar
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item fs-4" href="Login.html">Acessar</a></li>
                <li><a class="dropdown-item fs-4" href="cadastro.html">Cadastrar</a></li>
            </ul>
        </div>
    </nav>

    <div class="conteiner-sm pt-3 m-auto d-flex justify-content-center">
        <div class="conteiner-sm d-flex justify-content-between" style="width: 80%">
            <h1 class="">Imóveis Alugados</h1>            
        </div>
    </div>

    <div class="conteiner-sm pt-3 m-auto" style="width: 80%; display: flex;">              
        <div class="card m-2" style="width: 38rem;">
            <div class="card-body">
                <h5 class="card-title">Lago dos Descansos</h5>
                <p class="card-text">O Lado dos Descansos conta com uma excelente extrutura para aquele momento de calmaria. Uma ótima opção para os casais apaixonados. Principais refeições estão inclusas no pacote promocional Acomodações com até 2 quartos Incrível por do sol.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Principais refeições estão inclusas no pacote promocional</li>
                <li class="list-group-item">Acomodações com até 2 quartos</li>
                <li class="list-group-item">Incrível por do sol</li>
            </ul>
            <div class="card-body d-flex justify-content-between">
                <div class="text-center">
                    <span>Check-in</span>
                    <div>16 de agosto, 15h</div>
                </div>
                <div class="text-center">
                    <span>Check-out</span>
                    <div>26 de agosto, 12h</div>
                </div>
            </div>
            <div class="card-body d-flex justify-content-center">
                <button type="button" class="btn btn-primary btn-lg" onclick="confirmarEstadia()">Confirmar Estadia</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>