<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Adicionar Viatura - NX Web Manager
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
          <li class="nav-item active">
            <a class="nav-link" href="#">
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

      <div class="content" style="margin-top:40px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Adicionar Veículo</h4>
                  <p class="card-category">Adicione um novo veículo para apresentação no Website</p>
                </div>
                <div class="card-body">
                  <form method="post" action="addcar_sql.php" autocomplete="off">
                    <div class="row">
                      <div class="col-md-3">
                         <label class="bmd-label-floating">Marca</label>
                        <div class="dropdown" style="margin-top:-10px">
                         <select class="selectpicker" name="brand">
                          <option value="Acura">Acura</option>
                          <option value="Alfa Romeo">Alfa Romeo</option>
                          <option value="Aston Martin">Aston Martin</option>
                          <option value="Audi">Audi</option>
                          <option value="Bentley">Bentley</option>
                          <option value="BMW">BMW</option>
                          <option value="Bugatti">Bugatti</option>
                          <option value="Cadillac">Cadillac</option>
                          <option value="Citroën">Citroën</option>
                          <option value="Chrysler">Chrysler</option>
                          <option value="Dacia">Dacia</option>
                          <option value="Daihatsu">Daihatsu</option>
                          <option value="Datsun">Datsun</option>
                          <option value="Dodge">Dodge</option>
                          <option value="Ferrari">Ferrari</option>
                          <option value="Fiat">Fiat</option>
                          <option value="Ford">Ford</option>
                          <option value="Honda">Honda</option>
                          <option value="Hyundai">Hyundai</option>
                          <option value="Jaguar">Jaguar</option>
                          <option value="Jeep">Jeep</option>
                          <option value="Kia">Kia</option> 
                          <option value="Lamborghini">Lamborghini</option>
                          <option value="Lancia">Lancia</option>
                          <option value="Land Rover">Land Rover</option>
                          <option value="Lexus">Lexus</option>
                          <option value="Maserati">Maserati</option>
                          <option value="Mazda">Mazda</option>
                          <option value="McLaren">McLaren</option>
                          <option value="Mercedes-Benz">Mercedes-Benz</option>
                          <option value="MG">MG</option>
                          <option value="MINI">MINI</option>
                          <option value="Mitsubishi">Mitsubishi</option>
                          <option value="Nissan">Nissan</option>
                          <option value="Opel">Opel</option>
                          <option value="Peugeot">Peugeot</option>
                          <option value="Porsche">Porsche</option>
                          <option value="Renault">Renault</option>
                          <option value="Rolls-Royce">Rolls-Royce</option>
                          <option value="Rover">Rover</option>
                          <option value="Saab">Saab</option>
                          <option value="SEAT">SEAT</option>
                          <option value="Škoda">Škoda</option>
                          <option value="Smart">Smart</option>
                          <option value="Subari">Subari</option>
                          <option value="Suzuki">Suzuki</option>
                          <option value="Tesla">Tesla</option>
                          <option value="Toyota">Toyota</option>
                          <option value="Triumph">Triumph</option>
                          <option value="TVR">TVR</option>
                          <option value="Volkswagen">Volkswagen</option>
                          <option value="Volvo">Volvo</option>
                          <option value="Yamaha">Yamaha</option>
                        </select>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="bmd-label-floating">Modelo</label>
                          <input name="model" type="text" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Quilometragem</label>
                          <input name="mileage" type="number" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Preço (€)</label>
                          <input name="price" type="number" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                         <label class="bmd-label-floating">Combustível</label>
                        <div class="dropdown" style="margin-top:-10px">
                         <select name="fuel" class="selectpicker" data-style="select-with-transition" data-size="7">
                          <option value="Gasolina">Gasolina</option>
                          <option value="Diesel">Diesel</option>
                          <option value="Eletrico">Elétrico</option>
                          <option value="Hibrido">Híbrido</option>
                          <option value="GPL">GPL</option>
                        </select>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Cor Exterior</label>
                        <input name="color_outside" type="text" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Cor Interior</label>
                        <input name="color_inside" type="text" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Tracção</label>
                        <input name="traction" type="text" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nº Portas</label>
                        <input name="num_doors" type="number" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nº Lugares</label>
                        <input name="num_seats" type="number" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Categoria</label>
                        <input name="category" type="text" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Cilindrada (cc)</label>
                        <input name="cylinder" type="number" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Potência (cv)</label>
                        <input name="power" type="number" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Valor IUC (€)</label>
                          <input name="iuc" type="number" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group" style="margin-top: -5px">
                        <label class="bmd-label-floating">Tipo de Garantia</label>
                        <div class="dropdown" style="margin-top:-10px">
                          <select name="warranty_type" class="selectpicker" data-style="select-with-transition" data-size="7">
                            <option value="Fornecedor">Fornecedor</option>
                            <option value="12 meses">12 meses</option>
                            <option value="24 meses">24 meses</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Ano 1ª Matrícula</label>
                        <input  name="car_date" type="number" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                         <label class="bmd-label-floating">Tipo Ar Condicionado</label>
                        <div class="dropdown" style="margin-top:-10px">
                         <select name="ac_type" class="selectpicker" data-style="select-with-transition" data-size="7">
                          <option value="Automatico">Automático</option>
                          <option value="Manual">Manual</option>
                          <option value="Ntem">Não Tem</option>
                        </select>

                      </div>
                    </div>
                     <div class="col-md-3">
                         <label class="bmd-label-floating">Tipo Caixa Velocidades</label>
                        <div class="dropdown" style="margin-top:-10px">
                         <select name="gearbox_type" class="selectpicker" data-style="select-with-transition" data-size="7">
                          <option value="Automatica">Automática</option>
                          <option value="Manual">Manual</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nº Velocidades</label>
                        <input name="gearbox_num" type="number" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Destaque</label>
                        <input name="outstand" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group" style="">
                        <label class="bmd-label-floating">Equipamento: </label>
                        <textarea name="caracteristics" class="form-control" rows="3" required></textarea>
                      </div>
                    </div>
                  </div>
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