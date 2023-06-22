<?php
  
$conn = "";
   
try {
    $servername = "localhost:127.0.0.1";
    $dbname = "paginalogin";
    $nome = "root";
    $senha = "";
   
    $conn = new PDO(
        "mysql:host=$servername; dbname=paginalogin",
        $nome, $senha
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
?>