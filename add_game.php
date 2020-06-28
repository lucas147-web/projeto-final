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
            <h1 class="m-0 text-dark">JOGO +</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index_jog.php">Games</a></li>
              <li class="breadcrumb-item active"> JOGO +   </li>
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
              <h3 class="card-title">ADICIONAR JOGOS</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form"  name="form_jogo" id="form_jogo" method="POST" action="reg_game.php">
                <div class="card-body">
                  
                      <div class="form-group">
                          <label for="exampleInputEmail1">Título</label>
                          <input type="text" class="form-control" id="titulo" name="titulo" required>
                      </div>

                      <div class="form-group">
                          <label for="exampleInputPassword1">CATEGORIA</label>
                          <input type="text" class="form-control" id="categoria" name="categoria" required>
                      </div>

                      <div class="form-group">
                          <label for="exampleInputPassword1">PREÇO</label>
                          <input type="text" class="form-control" id="valor" name="valor" required>
                      </div>


                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">cadastrar</button>
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