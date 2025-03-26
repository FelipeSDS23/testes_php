<?php

class PessoaController {

    /*
    *Mostra página de cadastro
    */
    static public function index() {
        header("Location: views/cadastro.php");
        exit(); // Garante que o script pare de executar
    }

    /*
    *Realiza o armazenamento dos dados cadastrais no banco de dados
    */
    static public function store($conn) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $altura = $_POST['altura'];

        //Instancia novo objeto pessoa
        $pessoa = new Pessoa($nome, $idade, $altura);

        //Realiza a persistência do objeto pessoa no banco de dados
        $pessoa->store($conn);

        unset($_POST);

        header("Location: views/dashboard.php");
        exit(); // Garante que o script pare de executar
    }

}

?>