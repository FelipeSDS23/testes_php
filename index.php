<?php

include_once './db/Database.php';
include_once './classes/Pessoa.php';
include_once './controllers/PessoaController.php';

$conn = Database::connect();

if(isset($_GET)) {
    include_once __DIR__ . '/views/dashboard.php';
}

if(isset($_GET['action']) && $_GET['action'] == 'cadastrar') {
    PessoaController::index();
}

if(isset($_POST) && !empty($_POST)) {
    PessoaController::store($conn);
}

?>