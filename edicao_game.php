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
       $titulo     = $v['id'];
       $categoria  = $v['id'];
       $valor      = $v['id'];


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
  <title>Editar</title>
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
            
            <h3 class="text-primary"><i class="fas fa-paint-brush">Editar informações</i></h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index_jog.php">GAMES</a></li>
              <li class="breadcrumb-item active"> Edição </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
 
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Atualização de distribuidora</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form"  name="form_game" id="form_game" method="POST" action="editar.php?id=<?php echo $id; ?>">
                <div class="card-body">
                      

                     <div class="form-group">
                          <label>Id</label>
                          <input type="text" class="form-control" id="id" name="id" disabled value="<?php echo $id; ?>" >
                      </div>

                      <div class="form-group">
                          <label for="exampleInputEmail1">Tìtulo</label>
                          <input type="text" class="form-control" id="titulo" name="titulo" required value="<?php echo $titulo; ?>">
                      </div>

                      <div class="form-group">
                          <label for="exampleInputPassword1">Categoria</label>
                          <input type="text" class="form-control" id="categoria" name="categoria" required value="<?php echo $categoria; ?>">
                      </div>

                      <div class="form-group">
                          <label for="exampleInputPassword1">Preço</label>
                          <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $valor; ?>">
                      </div>


                  </div>
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
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