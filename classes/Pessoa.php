<?php

class Pessoa {
    protected $nome;
    protected $idade;
    protected $altura;

    public function __construct(String $nome, Int $idade, Float $altura) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
    }

    public function info() {
        return "$this->nome tem $this->idade anos e $this->altura"."cm de altura.";
    }

    public function store($conn) {
        try {
            $sql = "INSERT INTO pessoas (nome, idade, altura) VALUES ('$this->nome', '$this->idade', '$this->altura')";
            $conn->exec($sql);
            echo "New record created successfully";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}

?>