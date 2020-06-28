<?php
      
     
      include "conexao.php";
      
      $conn = connection();
      
      try {
        
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        // prepare sql and bind parameters

        

        $stmt = $conn->prepare("UPDATE  jogos SET   titulo=:titulo, categoria=:categoria,valor=:valor WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':valor', $valor);
      
        $id         = $_GET['id'] ;
        $titulo     = $_POST['titulo'] ;
        $categoria  = $_POST['categoria'];
        $valor      = $_POST['valor'];

        $stmt->execute();
      
       // echo "Distribuidora cadastrada com sucesso!";
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      $conn = null;
      header('Location: index_jog.php');
      ?>