<?php
  
    include('conecta.php');

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
          
    $sql = "SELECT COUNT(*) FROM adminlogin WHERE nome = :elemento AND senha = :cu";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':elemento', $nome);
    $stmt->bindParam(':cu', $senha);

    // Executando a consulta
    $stmt->execute();

    // Obtendo o resultado
    $resultado = $stmt->fetchColumn();

    // Verificando se o elemento já existe no banco de dados
    if ($resultado > 0) {
        header("Location: adminpage.php");
    } else {
        echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
    }
                
?>