<?php
      

      include "conexao.php";

      $conn = connection();

      try {

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM jogos WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $id = $_GET['id'];
        $stmt->execute();

        foreach($stmt->fetchAll() as $k=>$v) {
      

       $id         = $v['id'];
       $titulo     = $v['titulo'] ;
       $categoria  = $v['categoria'] ;
       $valor      = $v['valor'] ;
       


        }
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      $conn = null;
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GameTOY</title>
  <?php
    include "header.php";
    ?>
     <!-- DataTables -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php
    include "sidebar.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa"> Informações do JOGO</i></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index_jog.php">GAMES</a></li>
              <li class="breadcrumb-item active">Informações</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
 
        <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-eye">  INFORMAÇÕES</i></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

             <!-- Main content -->
             <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> JOGOS
                   
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Dados
                  <address>
                    <strong><?php echo $titulo; ?></strong><br>
                    CATEGORIA:<?php echo $categoria; ?> <br>
                    PREÇO: <?php echo $valor; ?><br>
                  </address>
                </div>

             
            </div>
          </div>
      </div>
    </section>
   <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include "footer.php";
  ?>

</body>
</html>