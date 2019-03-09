<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Editar Viatura - NX Web Manager
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
  <div class="wrapper">
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
          <li class="nav-item active">
            <a class="nav-link" href="#">
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
<?php
$connect = mysqli_connect(/**************************/) or die (header('Location: error.php'));
mysqli_set_charset($connect,"utf8");
$query = 'SELECT * FROM stock WHERE primary_id = '.$_GET["car_id"].';';
$rs = mysqli_query($connect,$query);
if ($rs == false){
  $_SESSION['erro'] = mysqli_error($connect);
  header('Location: error.php'); 
  die();
}
$result = mysqli_fetch_array($rs);
echo ' <div class="content" style="margin-top:40px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Editar Viatura</h4>
                  <p class="card-category">Altere uma viatura para apresentação no Website</p>
                </div>
                <div class="card-body">
                  <form method="post" action="editcar_sql.php" autocomplete="off">
                    <div class="row">
                      <div class="col-md-3">
                         <label class="bmd-label-floating">Marca</label>
                        <div class="dropdown" style="margin-top:-10px">';?>
                        <select class="selectpicker" name="brand">
                          <option value="Acura" <?php if($result['brand'] == 'Acura') echo'selected="selected"';?> >Acura</option>
                          <option value="Alfa Romeo" <?php if($result['brand'] == 'Alfa Romeo') echo'selected="selected"';?> >Alfa Romeo</option>
                          <option value="Aston Martin"<?php if($result['brand'] == 'Aston Martin') echo'selected="selected"';?> >Aston Martin</option>
                          <option value="Audi" <?php if($result['brand'] == 'Audi') echo'selected="selected"';?> >Audi</option>
                          <option value="Bentley" <?php if($result['brand'] == 'Bentley') echo'selected="selected"';?> >Bentley</option>
                          <option value="BMW" <?php if($result['brand'] == 'BMW') echo'selected="selected"';?> >BMW</option>
                          <option value="Bugatti" <?php if($result['brand'] == 'Bugatti') echo'selected="selected"';?> >Bugatti</option>
                          <option value="Cadillac" <?php if($result['brand'] == 'Cadillac') echo'selected="selected"';?> >Cadillac</option>
                          <option value="Citroën" <?php if($result['brand'] == 'Citroën') echo'selected="selected"';?> >Citroën</option>
                          <option value="Chrysler" <?php if($result['brand'] == 'Chrysler') echo'selected="selected"';?> >Chrysler</option>
                          <option value="Dacia" <?php if($result['brand'] == 'Dacia') echo'selected="selected"';?> >Dacia</option>
                          <option value="Daihatsu" <?php if($result['brand'] == 'Daihatsu') echo'selected="selected"';?> >Daihatsu</option>
                          <option value="Datsun" <?php if($result['brand'] == 'Datsun') echo'selected="selected"';?> >Datsun</option>
                          <option value="Dodge" <?php if($result['brand'] == 'Dodge') echo'selected="selected"';?> >Dodge</option>
                          <option value="Ferrari" <?php if($result['brand'] == 'Ferrari') echo'selected="selected"';?> >Ferrari</option>
                          <option value="Fiat" <?php if($result['brand'] == 'Fiat') echo'selected="selected"';?> >Fiat</option>
                          <option value="Ford" <?php if($result['brand'] == 'Ford') echo'selected="selected"';?> >Ford</option>
                          <option value="Honda" <?php if($result['brand'] == 'Honda') echo'selected="selected"';?> >Honda</option>
                          <option value="Hyundai" <?php if($result['brand'] == 'Hyundai') echo'selected="selected"';?> >Hyundai</option>
                          <option value="Jaguar" <?php if($result['brand'] == 'Jaguar') echo'selected="selected"';?> >Jaguar</option>
                          <option value="Jeep" <?php if($result['brand'] == 'Jeep') echo'selected="selected"';?> >Jeep</option>
                          <option value="Kia" <?php if($result['brand'] == 'Kia') echo'selected="selected"';?> >Kia</option> 
                          <option value="Lamborghini" <?php if($result['brand'] == 'Lamborghini') echo'selected="selected"';?> >Lamborghini</option>
                          <option value="Lancia" <?php if($result['brand'] == 'Lancia') echo'selected="selected"';?> >Lancia</option>
                          <option value="Land Rover" <?php if($result['brand'] == 'Land Rover') echo'selected="selected"';?> >Land Rover</option>
                          <option value="Lexus" <?php if($result['brand'] == 'Lexus') echo'selected="selected"';?> >Lexus</option>
                          <option value="Maserati" <?php if($result['brand'] == 'Maserati') echo'selected="selected"';?> >Maserati</option>
                          <option value="Mazda" <?php if($result['brand'] == 'Mazda') echo'selected="selected"';?> >Mazda</option>
                          <option value="McLaren" <?php if($result['brand'] == 'McLaren') echo'selected="selected"';?> >McLaren</option>
                          <option value="Mercedes-Benz" <?php if($result['brand'] == 'Mercedes-Benz') echo'selected="selected"';?> >Mercedes-Benz</option>
                          <option value="MG" <?php if($result['brand'] == 'MG') echo'selected="selected"';?> >MG</option>
                          <option value="MINI" <?php if($result['brand'] == 'MINI') echo'selected="selected"';?> >MINI</option>
                          <option value="Mitsubishi" <?php if($result['brand'] == 'Mitsubishi') echo'selected="selected"';?> >Mitsubishi</option>
                          <option value="Nissan" <?php if($result['brand'] == 'Nissan') echo'selected="selected"';?> >Nissan</option>
                          <option value="Opel" <?php if($result['brand'] == 'Opel') echo'selected="selected"';?> >Opel</option>
                          <option value="Peugeot" <?php if($result['brand'] == 'Peugeot') echo'selected="selected"';?> >Peugeot</option>
                          <option value="Porsche" <?php if($result['brand'] == 'Porsche') echo'selected="selected"';?> >Porsche</option>
                          <option value="Renault" <?php if($result['brand'] == 'Renault') echo'selected="selected"';?> >Renault</option>
                          <option value="Rolls-Royce" <?php if($result['brand'] == 'Rolls-Royce') echo'selected="selected"';?> >Rolls-Royce</option>
                          <option value="Rover" <?php if($result['brand'] == 'Rover') echo'selected="selected"';?> >Rover</option>
                          <option value="Saab" <?php if($result['brand'] == 'Saab') echo'selected="selected"';?> >Saab</option>
                          <option value="SEAT" <?php if($result['brand'] == 'SEAT') echo'selected="selected"';?> >SEAT</option>
                          <option value="Skoda" <?php if($result['brand'] == 'Skoda') echo'selected="selected"';?> >Skoda</option>
                          <option value="Smart" <?php if($result['brand'] == 'Smart') echo'selected="selected"';?> >Smart</option>
                          <option value="Subari" <?php if($result['brand'] == 'Subari') echo'selected="selected"';?> >Subari</option>
                          <option value="Suzuki" <?php if($result['brand'] == 'Suzuki') echo'selected="selected"';?> >Suzuki</option>
                          <option value="Tesla">Tesla</option>
                          <option value="Toyota" <?php if($result['brand'] == 'Toyota') echo'selected="selected"';?> >Toyota</option>
                          <option value="Triumph">Triumph</option>
                          <option value="TVR" <?php if($result['brand'] == 'TVR') echo'selected="selected"';?> >TVR</option>
                          <option value="Volkswagen" <?php if($result['brand'] == 'Volkswagen') echo'selected="selected"';?> >Volkswagen</option>
                          <option value="Volvo" <?php if($result['brand'] == 'Volvo') echo'selected="selected"';?> >Volvo</option>
                          <option value="Yamaha" <?php if($result['brand'] == 'Yamaha') echo'selected="selected"';?> >Yamaha</option>
                        </select>
                        <?php echo '
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="bmd-label-floating">Modelo</label>
                          <input name="model" type="text" class="form-control" value="'.$result["model"].'" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Quilometragem</label>
                          <input name="mileage" type="number" class="form-control" value="'.$result["mileage"].'" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Preço (€)</label>
                          <input name="price" type="number" class="form-control" value="'.$result["price"].'" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                         <label class="bmd-label-floating">Combustível</label>
                        <div class="dropdown" style="margin-top:-10px">
                         <select name="fuel" class="selectpicker" data-style="select-with-transition" data-size="7">';
                         switch ($result["fuel"]) {
                          case "Gasolina":echo 
                            '<option selected="selected" value="Gasolina">Gasolina</option>
                          <option value="Diesel">Diesel</option>
                          <option value="Eletrico">Elétrico</option>
                          <option value="Hibrido">Híbrido</option>
                          <option value="GPL">GPL</option>
                          ';break;
                          case "Diesel":echo 
                          '<option value="Gasolina">Gasolina</option>
                          <option selected="selected" value="Diesel">Diesel</option>
                          <option value="Eletrico">Elétrico</option>
                          <option value="Hibrido">Híbrido</option>
                          <option value="GPL">GPL</option>
                          ';break;
                          case "Eletrico":echo 
                          '<option value="Gasolina">Gasolina</option>
                          <option value="Diesel">Diesel</option>
                          <option selected="selected" value="Eletrico">Elétrico</option>
                          <option value="Hibrido">Híbrido</option>
                          <option value="GPL">GPL</option>
                          ';break;
                          case "Hibrido":echo 
                          '<option value="Gasolina">Gasolina</option>
                          <option value="Diesel">Diesel</option>
                          <option value="Eletrico">Elétrico</option>
                          <option selected="selected" value="Hibrido">Híbrido</option>
                          <option value="GPL">GPL</option>
                          ';break;
                          case "GPL":echo 
                          '<option value="Gasolina">Gasolina</option>
                          <option value="Diesel">Diesel</option>
                          <option value="Eletrico">Elétrico</option>
                          <option value="Hibrido">Híbrido</option>
                          <option selected="selected" value="GPL">GPL</option>
                          ';break;
                         }
                          echo '
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Cor Exterior</label>
                        <input name="color_outside" type="text" class="form-control" value="'.$result["color_outside"].'" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Cor Interior</label>
                        <input name="color_inside" type="text" class="form-control" value="'.$result["color_inside"].'" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Tracção</label>
                        <input name="traction" type="text" class="form-control" value="'.$result["traction"].'" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nº Portas</label>
                        <input name="num_doors" type="number" class="form-control" value="'.$result["num_doors"].'" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nº Lugares</label>
                        <input name="num_seats" type="number" class="form-control" value="'.$result["num_seats"].'" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Categoria</label>
                        <input name="category" type="text" class="form-control" value="'.$result["category"].'" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Cilindrada (cc)</label>
                        <input name="cylinder" type="number" class="form-control" value="'.$result["cylinder"].'">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Potência (cv)</label>
                        <input name="power" type="number" class="form-control" value="'.$result["power"].'" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Valor IUC (€)</label>
                          <input name="iuc" type="number" class="form-control" value="'.$result["iuc"].'">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group" style="margin-top: -5px">
                        <label class="bmd-label-floating">Tipo de Garantia</label>
                        <div class="dropdown" style="margin-top:-10px">
                          <select name="warranty_type" class="selectpicker" data-style="select-with-transition" data-size="7">';
                          if ($result["warranty_type"] == "Fornecedor")
                            echo '<option value="Fornecedor" selected="selected">Fornecedor</option>
                            <option value="12 meses">12 meses</option>
                            <option value="24 meses">24 meses</option>';
                          else if ($result["warranty_type"] == "12 meses")
                            echo '<option value="Fornecedor">Fornecedor</option>
                            <option value="12 meses" selected="selected">12 meses</option>
                            <option value="24 meses">24 meses</option>';
                          else
                            echo '<option value="Fornecedor">Fornecedor</option>
                            <option value="12 meses">12 meses</option>
                            <option value="24 meses" selected="selected">24 meses</option>';
                        echo '
                          </select>
                        </div>
                      </div>
                    </div>
                    </div>
                   <div class="row">
                    
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Ano 1ª Matrícula</label>
                        <input  name="car_date" type="number" class="form-control" value="'.$result["car_date"].'" required>
                      </div>
                    </div>
                    
                    <div class="col-md-3">
                        <label class="bmd-label-floating">Tipo Ar Condicionado</label>
                        <div class="dropdown" style="margin-top:-10px">
                         <select name="ac_type" class="selectpicker" data-style="select-with-transition" data-size="7">';
                        switch ($result["ac_type"]) {
                          case "Automatico":echo 
                            '<option selected="selected" value="Automatico">Automático</option>
                          <option value="Manual">Manual</option>
                          <option value="Ntem">Não Tem</option>';break;
                          case "Manual":echo 
                          '<option value="Automatico">Automático</option>
                          <option selected="selected" value="Manual">Manual</option>
                          <option value="Ntem">Não Tem</option>';break;
                          case "Ntem":echo 
                          '<option value="Automatico">Automático</option>
                          <option value="Manual">Manual</option>
                          <option selected="selected" value="Ntem">Não Tem</option>';break;
                         }
                         echo'
                        </select>
                      </div>
                    </div>

                     <div class="col-md-3">
                         <label class="bmd-label-floating">Tipo Caixa Velocidades</label>
                        <div class="dropdown" style="margin-top:-10px">
                         <select name="gearbox_type" class="selectpicker" data-style="select-with-transition" data-size="7">';
                         switch ($result["gearbox_type"]) {
                          case "Automatica":echo 
                            '<option selected="selected" value="Automatica">Automática</option>
                          <option value="Manual">Manual</option>
                          ';break;
                          case "Manual":echo 
                          '<option value="Automatica">Automática</option>
                          <option selected="selected" value="Manual">Manual</option>
                          ';break;
                         }
                         echo'  
                        </select>
                      </div>
                    </div>
                     <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nº Velocidades</label>
                        <input name="gearbox_num" type="number" class="form-control" value="'.$result["gearbox_num"].'">
                      </div>
                    </div>
                    
                    </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Destaque</label>
                        <input name="outstand" type="text" class="form-control" value="'.$result["outstand"].'">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Equipamento </label>
                        <textarea name="caracteristics" class="form-control" rows="3" required>'.$result["caracteristics"].'</textarea>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="c_id" value="'.$_GET["car_id"].'">
                  <button type="submit" class="btn btn-primary pull-right">Atualizar</button>
                </form>
                <div class="clearfix"></div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
    mysqli_close($connect);
?>
     
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