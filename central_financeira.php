<?php
include_once ("admin/site/mmn_db.php");
// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
        print "
				<script language='javascript'>
					window.location = 'index.php';
				</script>
			";
}

date_default_timezone_set('America/Sao_Paulo');
$hoje = date('d/m/Y');

?>
<?php
include_once ("admin/site/config.php");
include_once ("admin/site/site_stats.php");
include_once ("user_info.php");
include_once ("financial.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Central Financeira</title>
    <!-- chartist CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
	<link href="assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
            <?php
include_once ("topo.php");
?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
include_once ("menu_lateral.php");
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Temp - Earnings -->
            <!-- ============================================================== -->
            <div class="card gredient-info-bg mt-0 mb-0">
                <div class="card-body">
                    <h4 class="card-title text-white">Seja bem Vindo(a)</h4>
                    <h5 class="card-subtitle text-white op-5">Central Financeira</h5>
                    <div class="row mt-4 mb-3">
                        <!-- col -->
                        <div class="col-sm-12 col-lg-4">
                            <div class="temp d-flex align-items-center flex-row">
                                <div class="display-5 text-white"><i class="wi wi-day-showers"></i> <span>0.85<sup>%</sup></span></div>
                                <div class="ml-2">
                                    <h3 class="mb-0 text-white">AQUI </h3><small class="text-white op-5">Chove dinheiro diariamente</small>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col-sm-12 col-lg-8">
                            <div class="row">
                                <!-- col -->
                                <div class="col-sm-12 col-md-4">
                                    <div class="info d-flex align-items-center">
                                        <div class="mr-2">
                                            <i class="mdi mdi-wallet text-white display-5 op-5"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-white mb-0">R$ <?php print number_format($sum3, 2, ',', '.'); ?></h3>
                                            <span class="text-white op-5">Pacote Investimento</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-sm-12 col-md-4">
                                    <div class="info d-flex align-items-center">
                                        <div class="mr-2">
                                            <i class="mdi mdi-star-circle text-white display-5 op-5"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-white mb-0">R$ <?php print number_format($totalfaturado, 2, ',', '.'); ?></h3>
                                            <span class="text-white op-5">Ganhos Acumulado</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-sm-12 col-md-4">
                                    <div class="info d-flex align-items-center">
                                        <div class="mr-2">
                                            <i class="fas fa-trophy text-white display-5 op-5"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-white mb-0">R$ <?php print number_format($sum2, 2, ',', '.'); ?></h3>
                                            <span class="text-white op-5">Saques realizados</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Earnings -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- col -->
                    <div class="col-sm-12">
                        <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab2" data-toggle="pill" href="#month" role="tab" aria-selected="true">Visão Geral</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="month" role="tabpanel" aria-labelledby="pills-home-tab2">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-4">
                                        <h1 class="font-bold mb-1">R$<?php print number_format($my_saldo, 2, ',', '.'); ?></h1>
                                        <h6 class="mb-3">Disponivel para Saque</h6>
                                        <p>Escolha o valor para seu saque ( Minimo R$ 100,00 )</p>
                                        <?php
						$sts_btn_saque=mysqli_query($con,"SELECT status FROM sacar");
	$r = mysqli_fetch_row($sts_btn_saque);
	$stsbtnsaque = $r[0];
if ($stsbtnsaque == 1){
	?>
										<span class="percent"><a href="" class="waves-effect waves-light mt-3 btn btn-lg btn-info" data-toggle="modal" data-target="#myModal">SACAR TUDO</a></span>
										<?php }else{print "
	Solicitação de saque bloqueada
	";}?>
                                    </div>
                                    <div class="col-sm-12 col-lg-8 border-left">
                                        <div class="earnings ct-charts"></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
				<div class="modal fade modal-dialog  img-fluid model_img" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="bank_saque.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h2 class="modal-title">Solicitando saque</h2>
				</div>
				<div class="modal-body">
					<p>Saldo disponível: R$ <?php print number_format($my_saldo, 2, ',', '.'); ?></p>
					<p>Saque mínimo: R$<?php print number_format($saque_minimo, 2, ',', '.'); ?></p>
				</div>
				<p>Serão descontados <?php print $taxa_saque; ?>% como taxa de saque.</p>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Sacar Tudo</button>
				</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
</div>
                <!-- ============================================================== -->
                <!-- Devices - Income - Sales -->
                <!-- ============================================================== -->
                <div class="row mt-4">
                    <!-- col -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ganhos com Publicidade Paga</h4>
                                <div id="visitor" style="height:267px; width:100%;" class="mt-3"></div>
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item"><i class="fa fa-circle text-info"></i> Google ADS</li>
                                    <li class="list-inline-item"><i class="fa fa-circle text-cyan"></i> Facebook ADS</li>
                                    <li class="list-inline-item"><i class="fa fa-circle text-orange"></i> Organico</li>
									<li class="list-inline-item"><i class="fa fa-circle text-white"></i> Youtube</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Estimativas Gerais</h4>
                                <div class="net-income mt-4 position-relative" style="height:257px;"></div>
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item"><i class="fa fa-circle text-cyan"></i> Estimativa</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Investimento Premium</h4>
                              <div class="row">
                                    <div class="col-6 mt-5">
                                        <h2 class="mb-1">R$50.000</h2>
                                        <span>5 de 10 Disponiveis</span>
                                </div>
                                    <div class="col-6">
                                        <div id="sales" class="ml-auto" style="height:115px; width:115px;">
                                        </div>
                                    </div>
                              </div>
                          </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Aumente seus Ganhos</h4><span>Divulgue Facebook</span>
                                <div class="row">
                                    <div class="col-6 mt-5">
                                        <h2 class="mb-1">TURBINE</h2>
                                        <span>Seus Ganhos de Indicação</span>
                                    </div>
                                    <div class="col-6">
                                        <div class="gaugejs-box text-right">
                                            <canvas id="foo" class="gaugejs ml-auto" height="60" width="120">guage</canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
       
</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
       <?php
include_once ("config_lateral.php");
?>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/libs/gaugeJS/dist/gauge.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard8.js"></script>
	<script src="assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="assets/libs/sweetalert2/sweet-alert.init.js"></script>
</body>

</html>