<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Clientes - NX Web Manager
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
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
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Listagem de Clientes</h4>
                  <p class="card-category">Todos os clientes registados na base de dados. Os números das viaturas 1 a 5 correspondem às viaturas vendidas ao cliente.</p>
                 <a href="addcustomer.php"><i class="material-icons" style="font-size:40px;color:white;display: block;float:right">plus_one</i></a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                         ID
                        </th>        
                        <th>
                          Nome
                        </th>
                        <th>
                          Telefone
                        </th>
                        <th>
                          e-Mail
                        </th>
                        <th>
                          NIF
                        </th>
                        <th style="text-align: center">
                         Viatura 1
                       </th>
                       <th style="text-align: center">
                         Viatura 2
                       </th>
                       <th style="text-align: center">
                         Viatura 3
                       </th>
                       <th style="text-align: center">
                         Viatura 4
                       </th>
                       <th style="text-align: center">
                         Viatura 5
                       </th>
                       <th>
                        Editar
                      </th>
                    </thead>
                    <tbody>
<?php
  
  $connect = mysqli_connect(/**************************/) or die (header('Location: error.php'));
  mysqli_set_charset($connect,"utf8");
  $query = 'SELECT * FROM customers ORDER BY primary_id ASC;';
  $rs = mysqli_query($connect,$query);

  if ($rs == false){
  $_SESSION['erro'] = mysqli_error($connect);
  header('Location: error.php'); 
  die();
}
  
  while ($result = mysqli_fetch_array($rs)) {
    echo '<tr> <!--tr é row/linha-->
                        <td> <!--td é celula-->
                        '.$result["primary_id"].'
                        </td>
                        <td>
                        '.$result["name"].'
                        </td>
                        <td>
                        '.$result["telephone"].'
                        </td>
                        <td>
                        '.$result["email"].'
                        </td>
                        <td>
                        '.$result["nif"].'
                        </td>                        
                        <td>
                        ';
                        if ($result["carsold1"] == "")
                          echo 'Nenhuma';
                        else
                          echo $result["carsold1"];
                        echo'</td>
                        <td>
                        ';
                        if ($result["carsold2"] == "")
                          echo 'Nenhuma';
                        else
                          echo $result["carsold2"];
                        echo'</td>
                        <td>
                        ';
                        if ($result["carsold3"] == "")
                          echo 'Nenhuma';
                        else
                          echo $result["carsold3"];
                        echo'
                        </td>
                        <td>
                        ';
                        if ($result["carsold4"] == "")
                          echo 'Nenhuma';
                        else
                          echo $result["carsold4"];
                        
                        echo'</td><td>';
                        if ($result["carsold5"] == "")
                          echo 'Nenhuma';
                        else
                          echo $result["carsold5"];
                        echo'</td>
                        <td>
                        <form action="editcustomer.php" method="GET"><input type="hidden" name="c_id" value="'.$result["primary_id"].'"><button class="btn btn-info" type="submit">Editar</button></form>
                        </td>
                     </tr>';
                     
  }
  mysqli_close($connect);
  ?>               
                    </tbody>
                  </table>
                </div>
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
</body>

</html>