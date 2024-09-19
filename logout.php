<?php 
    include('inicia_sessao.php');
    // Limpa variáveis de sessão
    session_unset();
    // Destrói a sessão
    session_destroy();
    // Volta para página inicial
    header('Location: index.php');
?>