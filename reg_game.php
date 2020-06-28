<?php
      
     
      include "conexao.php";
      
      $conn = connection();
      
      try {
        
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO jogos (titulo,categoria,valor)
        VALUES (:titulo, :categoria, :valor)");
        $stmt->bindParam(':titulo',$titulo );
        $stmt->bindParam(':categoria', $categoria );
        $stmt->bindParam(':valor', $valor);
      
       


      $titulo     = $_POST['titulo'] ;
      $categoria  = $_POST['categoria'];
      $valor      = $_POST['valor'];
        
        $stmt->execute();
      
        echo "PARABENS! MAIS UM JOGO CADASTRADO";
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      $conn = null;
      header('Location: index_jog.php');
      ?>