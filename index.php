<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="styles.css">
    <?php
        include('inicia_sessao.php');
        if(empty($_SESSION['login'])){
            header("Location: login.html");
        }
        
        echo "<h1>Olá ".$_SESSION['login']['nomecliente'];
    ?>
</head>
<body>
    <div class="retangulo">
        <div>
            <h1>Seja Bem-vindo</h1>
        </div>
        <div>
            <button class="botao" onclick="window.location.href='includes/cadastrocidade.html';">Cadastrar Cidade</button>
            <button class="botao" onclick="window.location.href='listarcidade.php';">Listar Cidades</button>
            <button class="botao" onclick="window.location.href='cadastroClientes.php';">Cadastrar Clientes</button>
            <button class="botao" onclick="window.location.href='listarcliente.php';">Listar Clientes</button>
            <button class="botao" onclick="window.location.href='logout.php';">Logout</button>
        </div>
    </div>
</body>
</html>
