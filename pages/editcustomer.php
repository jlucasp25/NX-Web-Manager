<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Editar Cliente - NX Web Manager
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  
  <link rel="stylesheet" type="text/css" href="css/dropzone.css" />
  <script type="text/javascript" src="js/dropzone.js"></script>

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />


</head>

<body class="">
  <div class="wrapper ">
   <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo">
        <img src="logo.gif" style="height:100px;margin:0 auto;display: block">
        <a href="#" class="simple-text logo-normal">
          NX Web Manager
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Painel Inicial</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="addcar.php">
              <i class="material-icons">add_circle_outline</i>
              <p>Adicionar Viatura</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="listagem.php">
              <i class="material-icons">assignment</i>
              <p>Listagem</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ordenacao.php">
              <i class="material-icons">reorder</i>
              <p>Ordenação</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="sales.php">
              <i class="material-icons">attach_money</i>
              <p>Declarar Venda</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <i class="material-icons">group</i>
              <p>Clientes</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="bugreport.php">
              <i class="material-icons">bug_report</i>
              <p>Reportar problemas</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Bem-vindo!</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
          
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" target="_blank" rel="noopener noreferrer" href="http://www.farcar.pt">
                  <i class="material-icons">web</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <i class="material-icons">close</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
<?php 
  $connect = mysqli_connect(/**************************/) or die (header('Location: error.php'));
  mysqli_set_charset($connect,"utf8");
  $query = 'SELECT * FROM customers WHERE primary_id = '.$_GET['c_id'].';';
  $rs = mysqli_query($connect,$query);
  if ($rs == false) {
    $_SESSION['erro'] = mysqli_error($connect);
    header('Location: error.php'); 
    die();
}
$result = mysqli_fetch_array($rs);
?>
      <div class="content" style="margin-top:40px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Editar Cliente</h4>
                  <p class="card-category">Edite as informações de um cliente.</p>
                </div>
                <div class="card-body">
                  <form method="post" action="editcustomer_sql.php" autocomplete="off">
                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome</label>
                          <input name="name" type="text" class="form-control" required <?php echo 'value="'.$result['name'].'"'; ?> >
                        </div>
                      </div>
                    
                    
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Telefone</label>
                          <input name="telephone" type="number" class="form-control" <?php echo 'value="'.$result['telephone'].'"'; ?>>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">e-Mail</label>
                          <input name="email" type="email" class="form-control" <?php echo 'value="'.$result['email'].'"'; ?>>
                        </div>
                      </div>
         
                    <div class="col-md-8">
                      <div class="form-group">
                        <label class="bmd-label-floating">Morada</label>
                        <input name="address" type="text" class="form-control" <?php echo 'value="'.$result['address'].'"'; ?>>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Cidade</label>
                        <input name="city" type="text" class="form-control" <?php echo 'value="'.$result['city'].'"'; ?>>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Profissão</label>
                        <input name="job" type="text" class="form-control" <?php echo 'value="'.$result['job'].'"'; ?>>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">NIF / Nº Contribuinte</label>
                        <input name="nif" type="number" class="form-control" <?php echo 'value="'.$result['nif'].'"'; ?>>
                      </div>
                    </div>
                  </div> 
                <input type="hidden" name="c_id" <?php echo 'value="'.$result['primary_id'].'"'; ?> >
                  <button type="submit" class="btn btn-primary pull-right">Submeter</button>
                </form>
                <div class="clearfix"></div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<footer class="footer">
      <div class="container-fluid">
        <div class="copyright float-right" style="">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script> <i class="material-icons">format_paint</i>Design by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
          <br>
          <i class="material-icons">memory</i>Coding by João Lucas Pires 
        </div>
      </div>
    </footer>
  </div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/i18n/defaults-*.min.js"></script>

</body>

</html>