<?php

include_once './db/Database.php';
include_once './classes/Pessoa.php';

$conn = Database::connect();

include_once './views/cadastro.php';

if(!empty($_POST)) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];

    //Instancia novo objeto pessoa
    $felipe = new Pessoa($nome, $idade, $altura);

    //Realiza a persistência do objeto pessoa no banco de dados
    $felipe->store($conn);
}

?>