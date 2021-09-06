
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

// desativa qualquer pacote com vencimento pra hoje
$desativapacks=mysqli_query($con,"UPDATE payorders SET status=2 WHERE valid='$hoje'");

if($desativapacks){
	// atualizar pontuação
$res4 = mysqli_query($con,"SELECT sum(pontos) FROM payorders WHERE user='".$_SESSION['username']."' AND status=1");
$row4= mysqli_fetch_row($res4);
$sum4 = $row4[0];
$updatepoints=mysqli_query($con,"UPDATE affiliateuser SET pontos='$sum4' WHERE username='".$_SESSION['username']."'");

if($updatepoints){
	// desativa todos usuários que não tem pontos
$desativausers=mysqli_query($con,"UPDATE affiliateuser SET active=0 WHERE level=2 AND pontos=0 ");
}
}

?>


<?php
include_once ("admin/site/config.php");
include_once ("admin/site/site_stats.php");
include_once ("user_info.php");
include_once ("downlines.php");
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
    <title><?php print $my_username ?> | Backoffice R&M Luxury</title>
    <!-- Custom CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="assets/extra-libs/prism/prism.css">
	<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
	 <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
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
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Ola, <?php print $my_nome ?></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Principal</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="mr-2">
                                <div class="lastmonth"></div>
                            </div>
                            <div class=""><small>Investidores On-Line</small>
                                <h4 class="text-info mb-0 font-medium"><?php echo(mt_rand(21570,24712)); ?> </h4></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
										<?php
include_once ("verify_packs.php");
?>
		<?php
		
		if($my_status!=1){
		print"
	<div class='alert alert-info' role='alert'><strong>Atenção!</strong> 
	Você não está ativo, para receber os bônus, você precisa comprar um pacote. Menu lateral > PACOTES INVESTIMENTOS</a></div>
	";
	}
		
		?>
                                      <h4 class="card-title">Resumo de Ganhos</h4>
                                      <h5 class="card-subtitle">Investimentos &amp; Vendas Produtos</h5>
                                    </div>
                                    <div class="ml-auto d-flex no-block align-items-center">
                                        <ul class="list-inline font-12 dl mr-3 mb-0">
                                            <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Vendas Produtos</li>
                                            <li class="list-inline-item text-primary"><i class="fa fa-circle"></i> Novos Investimentos</li>
                                        </ul>
                                        <div class="dl">
                                            <select class="custom-select">
                                                <option value="0" selected>Setembro</option>
                                                
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <?php
                                    $investimento = $sum3;
                                    $ganhos = $my_saldo;
                                    $resultado = $sum3 - $my_saldo;
                                    
                                    $invst = $sum3;
                                    $ganhou = $my_saldo;
                                    $porcentagem = $ganhou / $invst * 100 + 15;
                                   
                                               
                                    ?>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-4">
                                      <h1 class="mb-0 mt-4">R$ <?php print number_format($totalfaturado, 2, ',', '.'); ?></h1>
                                      

                                     
                                  
                                        
                                   
                                



                                      <h6 class="font-light text-muted">Total Acumulado </h6>
                                      <ul class="list-style-none">
                                            <li class="mt-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="wi wi-barometer display-5 text-orange"></i>
                                                    <div class="ml-2">
                                                        <h5 class="mb-0">Seu Saldo Disponivel</h5>
                                                        <span class="text-muted">R$ <?php print number_format($my_saldo, 2, ',', '.'); ?></span></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php print number_format($porcentagem, 0, ',', '.'); ?>%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <div class="">
    <div class="progress-bar active progress-bar-striped bg-inverse" style="width: 100%; height:11px;" role="progressbar"> <span class="sr-only"></span> </div>
</div>
                       
                                        </ul>
                                      
                                     
									
                                    </div>
									
                                    <!-- column -->
                                    <div class="col-lg-8">
                                        <div class="campaign ct-charts"></div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Info Box -->
                            <!-- ============================================================== -->
                            <div class="card-footer bg-white card-hover">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row text-center">
                                        <div class="col-6 col-md-2 border-right">
            
   
    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Exemplo Ganhos outros Pacotes? 
    </button>
</p>
<div class="collapse" id="collapseExample">
    <div class="card card-body">
        Disponibilizamos exemplos de ganhos diarios e mensal, estimativa variavel de outros pacotes, para que você veja quanto pode estar ganhando em cada pacote.
    </div>
</div>
<?php 
                                        $query5="SELECT * FROM ganhos_diarios  ORDER BY id ASC ";
                                        $result5 = mysqli_query($con,$query5);
                                        while($row5 = mysqli_fetch_array($result5)){
                                            $dw5_id="$row5[id]";
                                            $dw5_ganhos="$row5[ganhos]";
                                            $dw5_dia="$row5[dia]";
                                            $dw5_created="$row5[created]";
                                                $dw5_modified="$row5[modified]";
                                        }
                                        ?>  <?php  $pac499 = 499; $por = $dw5_ganhos/ 100; $comissao499 = $por * $pac499; $mes1 = $comissao499 * 31;
                                        $pac1199 = 1199; $por = $dw5_ganhos/ 100; $comissao1199 = $por * $pac1199;$mes2 = $comissao1199 * 31;
                                        $pac2499 = 2499; $por = $dw5_ganhos/ 100; $comissao2499 = $por * $pac2499;$mes3 = $comissao2499 * 31;
                                        $pac4499 = 4499; $por = $dw5_ganhos/ 100; $comissao4499 = $por * $pac4499;$mes4 = $comissao4499 * 31;
                                        $pac9999 = 9999; $por = $dw5_ganhos/ 100; $comissao9999 = $por * $pac9999;$mes5 = $comissao9999 * 31;
                                        ?>
                                       
            </div>
            <div class="col-6 col-md-2 border-right ">
            <h4 class='mb-0 font-medium '><a class="text-muted"href="https://rmluxury.com.br/loja/pacotes/pacote-de-investimento-499-reais-rmluxury/">499,99 </a> </h4>Dia R$: <?php print number_format($comissao499, 2, ',', '.'); ?> <h5><span class="label label-inverse">Mês <?php print number_format($mes1, 2, ',', '.'); ?></span></h5>
            </div>
            <div class="col-6 col-md-2 border-right">
            <h4 class='mb-0 font-medium'><a class="text-muted" href="https://rmluxury.com.br/loja/pacotes/pacote-de-investimentos-1199-reais/">1199,99</a></h4>Hoje R$: <?php print number_format($comissao1199, 2, ',', '.'); ?> <h5><span class="label label-inverse">Mês <?php print number_format($mes2, 2, ',', '.'); ?></span></h5>
            </div>
            <div class="col-6 col-md-2 border-right">
            <h4 class='mb-0 font-medium'><a class="text-muted" href="https://rmluxury.com.br/loja/pacotes/pacote-de-investimentos-2499-reais/">2.499,99</a></h4>Hoje R$: <?php print number_format($comissao2499, 2, ',', '.'); ?> <h5><span class="label label-inverse">Mês <?php print number_format($mes3, 2, ',', '.'); ?></span></h5>
            </div>
            <div class="col-6 col-md-2 border-right">
            <h4 class='mb-0 font-medium'><a class="text-muted" href="https://rmluxury.com.br/loja/pacotes/pacote-de-investimentos-4499-reais/">4.499,00</a></h4>Hoje R$: <?php print number_format($comissao4499, 2, ',', '.'); ?> <h5><span class="label label-inverse">Mês <?php print number_format($mes4, 2, ',', '.'); ?></span></h5>
            </div>
            <div class="col-6 col-md-2 border-right">
            <h4 class='mb-0 font-medium'><a class="text-muted" href="https://rmluxury.com.br/loja/pacotes/pacote-de-investimentos-9999-reais/">9,999,00</a></h4>Hoje R$: <?php print number_format($comissao9999, 2, ',', '.'); ?> <h5><span class="label label-inverse">Mês <?php print number_format($mes5, 2, ',', '.'); ?></span></h5>
            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top card-hover">
                                <div class="row mb-0">
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>
                                            <div><span>Valor Investido</span>
                                              <h3 class="font-medium mb-0"><?php print number_format($sum3, 2, ',', '.'); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <!-- col -->
									<?php
$result = mysqli_query($con,"SELECT count(*) FROM  affiliateuser where referedby = '".$_SESSION['username']."'");
$row = mysqli_fetch_row($result);
$numdow = $row[0];
?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2"><span class="text-cyan display-5"><i class="mdi mdi-star-circle"></i></span></div>
                                            <div><span>Indicados Direto</span>
                                              <h3 class="font-medium mb-0"><?php print $numdow ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2"><span class="text-info display-5"><i class="mdi mdi-account-plus"></i></span></div>
                                            <div>Sua Rede
                                              <h3 class="font-medium mb-0"><?php print $totalusers ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                            <div><span>Saques Realizados</span>
                                              <h3 class="font-medium mb-0"><?php print number_format($sum2, 2, ',', '.'); ?></h3>
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
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-7 col-xl-6">
                         <div class="card card-hover">
                            
                            <div class="card-body" style="background:url(assets/images/background/active-bg.png) no-repeat top center;">
                                <div class="pt-3 text-center">
                                    <i class="wi wi-rain-mix display-3 text-orange d-block"></i>
                                    <span class="display-4 d-block font-medium">
                                    <?php 
                                        $query5="SELECT * FROM ganhos_diarios  ORDER BY id ASC ";
                                        $result5 = mysqli_query($con,$query5);
                                        while($row5 = mysqli_fetch_array($result5)){
                                            $dw5_id="$row5[id]";
                                            $dw5_ganhos="$row5[ganhos]";
                                            $dw5_dia="$row5[dia]";
                                            $dw5_created="$row5[created]";
                                                $dw5_modified="$row5[modified]";
                                        }
                                        ?>
                                        
                                        <?php $valor1 = $sum3;
                                    
            $por = $dw5_ganhos / 100;
            $comissao = $por * $valor1; 
            
           
            
            
            ?> <?php print number_format($comissao, 2, ',', '.'); ?> </span>
                                    <span>Rendimento no dia <strong> <?php 
        $timestamp = $dw5_created;
echo date('d/m/Y', strtotime($timestamp)); 
?> </strong></span>
                                    <!-- Progress -->
                                    <div class="progress mt-5" style="height:5px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 24%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
										<div class="progress-bar bg-danger" role="progressbar" style="width: 18%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-orange" role="progressbar" style="width: 18%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 17%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
										<div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!-- Progress -->
                                    <!-- row -->
                                    <div class="row mt-4 mb-4">
                                        <!-- column -->
                                        <?php
// busca usuario 

	$query1="SELECT * FROM ganhos_diarios ORDER BY id DESC limit 4 ";
	$result1 = mysqli_query($con,$query1);
	while($row1 = mysqli_fetch_array($result1)){
		$dw1_ganhos="$row1[ganhos]";
		$dw1_dia="$row1[dia]";
		$dw1_created="$row1[created]";
			$dw1_modified="$row1[modified]";
			
								
			print "
			<div class='col-3 border-right text-center'>
            <h4 class='mb-0 font-medium'>$dw1_ganhos</h4>$dw1_dia 
            </div>
					";
		
		
		
}

?>
                                        
                                    </div>
                                    <a href="#" class="waves-effect waves-light mt-3 btn btn-lg btn-success accent-4 mb-3"> 
                                
                                    Porcentagem dos ultimos 4 Dias
                                
                                
                                </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-xl-6">
                    <div class="card card-hover">
                            <div class="col-sm-12 col-lg-12">
                        <div class="card card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Você não possui Investidores pelo Mundo</h4>
                                <div id="visitfromworld" style="width:100%; height:370px"></div>
                                <!-- row -->
                                
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
							
                
                
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card bg-info text-white  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">R&M Bank Digital ( Bloqueado )</h4>
                                <div class="d-flex align-items-center mt-4">
                                    <div class="" id="ravenue"></div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium white-text mb-0">R$0,00</h3><span class="white-text op-5"><?php
    setlocale(LC_ALL, NULL);
    setlocale(LC_ALL, 'pt_BR');  
    print ucfirst(gmstrftime('%A'));
										?></br> Indisponivel</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card bg-cyan text-white  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Pagamento de Contas</h4>
                                <h3 class="white-text mb-0"><i class="ti-arrow-up"></i> R$ 0,00</h3><span class="white-text op-5">Opção Bloqueada para este usuario</span>
                            </div>
                            <div class="mt-3" id="views"></div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Cartão Pré-Pago MP</h4>
                                <div class="d-flex no-block align-items-center mt-4">
                                    <div class="">
                                        <h3 class="font-medium mb-0">R$ 0,00</h3><span class="">Saldo Disponivel</span></div>
                                    <div class="ml-auto">
                                        <div style="max-width:150px; height:60px;" class="mb-5">
                                            <canvas id="bouncerate"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
			<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Seus Ultimos Indicados</h4>
                                <h6 class="card-subtitle">Entre em contato com sua<code> REDE </code>. Monte uma nova estratégia de <a href="#">crescimento</a></h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                 <th>Nome</th>
                                                <th>Usuario</th>
                                                <th>E-mail</th>
                                                <th>Telefone</th>
                                                <th>Cidade</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
// busca usuario 
if($numrows1 > 0){
	$query1="SELECT * FROM affiliateuser where referedby ='$my_username' ORDER BY id DESC";
	$result1 = mysqli_query($con,$query1);
	while($row1 = mysqli_fetch_array($result1)){
		$dw1_fname="$row1[fname]";
		
		$dw1_user="$row1[username]";
			$dw1_email="$row1[email]";
			$dw1_whats="$row1[mobile]";
		$dw1_cidade="$row1[cidade]";
			$dw1_active="$row1[active]";
						if($dw1_active==1){
				$dw1_status="Ativo";
				}else{
					$dw1_status="Pendente";
					}
			
			print "
			<tr>
				
					<td>*****</td>
					<td>$dw1_fname</td>
					<td>$dw1_user</td>
					<td>$dw1_email</td>
					<td>$dw1_whats</td>
					<td>$dw1_cidade</td>
					<td>$dw1_status</td>
					</tr>
					";
		
		}
		
}

?>
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
												
                                                <th>ID</th>
												<th>Nome</th>
                                                <th>Usuario</th>
                                                <th>E-mail</th>
                                                <th>Telefone</th>
                                                <th>Cidade</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div
                                            
                                           
                                       
                                
                                            
                                
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
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
	
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
	<script src="assets/extra-libs/prism/prism.js"></script>
	<script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/libs/gaugeJS/dist/gauge.min.js"></script>
    <script src="assets/libs/flot/excanvas.min.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard2.js"></script>
	<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>