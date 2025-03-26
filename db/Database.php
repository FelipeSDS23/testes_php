<?php

class Database {

  private static string $servername = "localhost";
  private static string $username = "root";
  private static string $password = "root";
  private static string $database = "testes_php";

  /*
  *Realiza a conexão com o banco de dados
  */
  public static function connect() {
    try {
      $conn = new PDO("mysql:host=" . self::$servername . ";dbname=" . self::$database, self::$username, self::$password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
      die();
    }
  }

}

?>