<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sucesso - NX Web Manager
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
            <a class="nav-link" href=dashboard.php>
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
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <i class="material-icons">attach_money</i>
              <p>Declarar Venda</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="clients.php">
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

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" style="margin-top:-20px" src="check.png" />
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">A viatura está declarada com vendida.</h4>
                  <h5 class="card-title">Deseja associá-la a algum cliente?</h5>
                  <form action="associate.php">
                  <button type="submit" class="btn btn-primary" >Associar</button></form>
            <form action="dashboard.php">
            <button type="submit" class="btn btn-success" >Voltar</button></form>
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
</body>

</html>



