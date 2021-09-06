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
    <title><?php echo $my_username;?> | Indicação Direta</title>
    <!-- chartist CSS -->
    
	
    <!--c3 CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
	<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/extra-libs/prism/prism.css">
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
            <div class="card bg-dark mt-0 mb-0">
                <div class="card-body">
                    <h4 class="card-title text-white">Bem Vindo <?php echo $my_nome;?></h4>
                    <h5 class="card-subtitle text-white op-5">Meus Diretos</h5>
                    <div >
                        <!-- col -->
                        
                        <!-- col -->
                        <div >
                            <div class="row">
                                <!-- col -->
                                <div class="col-sm-5 col-md-3">
                                    <div class="temp d-flex align-items-center flex-row">
                                <div class="display-6 text-white"><i class="fas fa-street-view"></i> <span><? print $numrows1 ?><sup>°</sup></span></div>
                                <div class="ml-2">
                                    <h3 class="mb-0 text-white">Diretos</h3><small class="text-white op-5">Indicados Por Você</small>
									<div id="score-rating"></div>
                                </div>
                            </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
								<div class="col-sm-5 col-md-3">
                                    <div class="temp d-flex align-items-center flex-row">
                                <div class="display-6 text-white"><i class="fas fa-user-plus"></i> <span ><? print $numrows2 ?><sup>°</sup></span></div>
                                <div class="ml-2">
                                    <h3 class="mb-0 text-white">2º Nivel</h3><small class="text-white op-5" >Começando a Crescer</small>
									<div id="score-rating2"></div>
                                </div>
                            </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
								
								<div class="col-sm-4 col-md-3">
                                    <div class="temp d-flex align-items-center flex-row">
                                <div class="display-6 text-white"><i class="fas fa-users"></i> <span><? print $numrows3 ?><sup>°</sup></span></div>
                                <div class="ml-3">
                                    <h3 class="mb-0 text-white">3º Nivel</h3><small class="text-white op-5">Indicados pelo 2º Nivel</small>
									<div id="score-rating3"></div>
                                </div>
                            </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-sm-4 col-md-3">
                                    <div class="temp d-flex align-items-center flex-row">
                                <div class="display-6 text-white"><i class="wi wi-snow-wind"></i> <span><? print $numrows4 ?><sup>°</sup></span></div>
                                <div class="ml-3">
                                    <h3 class="mb-0 text-white">4º Nivel</h3><small class="text-white op-5">Pingando Cadastros</small>
									<div id="score-rating4"></div>
                                </div>
                            </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div >
									<div class="col-sm-4 col-md-3">
                                    <div class="temp d-flex align-items-center flex-row">
                                <div class="display-6 text-white"></div>
                                <div class="ml-3">
                                    
                                </div></div>
                            </div>
                                </div>
								<!-- col -->
                                <!-- col -->
                                <div >
                                    <div class="temp d-flex align-items-center flex-row">
                                <div class="display-6 text-white"><i class="wi wi-showers"></i> <span><? print $numrows5 ?><sup>°</sup></span></div>
                                <div class="ml-3">
                                    <h3 class="mb-0 text-white">5º Nivel</h3><small class="text-white op-5">Chuva de Cadastros</small>
									<div id="score-rating5"></div>
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
            
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-xl-9 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center mb-4">
                                    <h4 class="card-title">Indicados Diretos</h4>
									
                                    <div class="ml-auto">
										<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['todo']))
{
	
$todo=mysqli_real_escape_string($con,$_POST['todo']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$username=mysqli_real_escape_string($con,$_POST['username']);
$userid=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$password2=mysqli_real_escape_string($con,$_POST['password2']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
$ref=mysqli_real_escape_string($con,$_POST['referral']);
	$data_cadastro=mysqli_real_escape_string($con,$_POST['data_cadastro']);
$cpf=mysqli_real_escape_string($con,$_POST['cpf']);

$status = "OK";
$msg="";

if(!isset($username) or strlen($username) <6){
$msg=$msg."Nome de usuário - username - deve conter mais de 6 caracteres.<BR>";
$status= "NOTOK";}					

if(!ctype_alnum($username)){
$msg=$msg."Username deve conter apenas caracteres alfanuméricos.<BR>";
$status= "NOTOK";}					


$rr=mysqli_query($con,"SELECT COUNT(*) FROM affiliateuser WHERE username = '$username'");
$r = mysqli_fetch_row($rr);
$nr = $r[0];
if($nr==1){
$msg=$msg."Este username já está registrado, tente outro.<BR>";
$status= "NOTOK";
}	

$rrr=mysqli_query($con,"SELECT COUNT(*) FROM affiliateuser WHERE mobile = '$mobile'");
$r3 = mysqli_fetch_row($rrr);
$nr3 = $r3[0];
if($nr3>0){
$msg=$msg."Número do celular/WhatsApp já registrado no sistema, tente outro.<BR>";
$status= "NOTOK";
}	

$remail=mysqli_query($con,"SELECT COUNT(*) FROM affiliateuser WHERE email = '$email'");
$re = mysqli_fetch_row($remail);
$nremail = $re[0];
if($nremail>0){
$msg=$msg."Este email já está registrado no sistema, tente outro.<BR>";
$status= "NOTOK";
}

$rcpf=mysqli_query($con,"SELECT COUNT(*) FROM affiliateuser WHERE cpf = '$cpf'");
$re = mysqli_fetch_row($rcpf);
$nrcpf = $re[0];
if($nrcpf>0){
$msg=$msg."Este CPF já está registrado no sistema. Cada usuário pode ter apenas 1 conta por CPF<BR>";
$status= "NOTOK";
}				

$result = mysqli_query($con,"SELECT count(*) FROM  affiliateuser where username = '$ref' AND active=1");
$row = mysqli_fetch_row($result);
$numrows = $row[0];
if ($numrows==0)
{
$msg=$msg."Seu indicador NÃO está ativo, ou não existe no sistema.<BR>";
$status= "NOTOK";
}

if ( strlen($cpf) <> 11 ){
$msg=$msg."Informe seu CPF corretamente, será necessário para sacar, coloque apenas números, não use espaços, nem sinais, ex.: 01234567890.<BR>";
$status= "NOTOK";}

if ( strlen($password) < 6 ){
$msg=$msg."A senha deve ter no mínimo 6 dígitos.<BR>";
$status= "NOTOK";}	

if ( strlen($mobile) > 12 ){
$msg=$msg."Coloque seu WhatsApp da maneira correta, DDD + número, ex. 11988884444<BR>";
}

if ( strlen($email) < 1 ){
$msg=$msg."Coloque seu melhor email.<BR>";
$status= "NOTOK";}


if ( $password <> $password2 ){
$msg=$msg."As senhas não conferem, preste atenção.<BR>";
$status= "NOTOK";}		


//Test if it is a shared client
if (!empty($_SERVER['HTTP_CLIENT_IP'])){
  $ip=$_SERVER['HTTP_CLIENT_IP'];
//Is it a proxy address
}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
  $ip=$_SERVER['REMOTE_ADDR'];
}
//The value of $ip at this point would look something like: "192.0.34.166"
$ip = ip2long($ip);
//The $ip would now look something like: 1073732954


if ($status=="OK") 
{
$query=mysqli_query($con,"insert into affiliateuser(username,password,fname,data_cadastro,email,referedby,ipaddress,mobile,cpf) values('$username','$password','$name','$data_cadastro','$email','$ref','$ip','$mobile','$cpf')");

if($query){
	$query2="SELECT * FROM  uplines WHERE user_id='$ref'";
	$result = mysqli_query($con,$query2);
	$i=0;
	while($row = mysqli_fetch_array($result))
	{
		$up1="$row[up1]";
		$up2="$row[up2]";
		$up3="$row[up3]";
		$up4="$row[up4]";
		$up5="$row[up5]";
	}
	
	$query3=mysqli_query($con,"insert into uplines(user_id,up1,up2,up3,up4,up5) values('$username','$ref','$up1','$up2','$up3','$up4')");
	
	$emailtext="Cadastro confirmado, visite o site e acesse o seu painel";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <'.$email_suporte.'>' . "\r\n";
	$to=$email;
	$subject="Cadastro confirmado";
	$message=$emailtext;
	mail($to,$subject,$message,$headers);
}

print "<div class='alert alert-success'><h2><strong>Seu Novo Indicado foi cadastrado com Sucesso</br></strong>Envie a Ele os dados de acesso ao Backoffice</h2></div>";
}

else
{ 
print "
<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>
<i class='fa fa-ban-circle'></i><strong>ERROS : </br></strong>".$msg."</div>";
}

}
?>
                                        
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table  class="table table-hover  table-striped table-bordered nowrap display" id="file_export">
                                        <thead >
                                            <tr>
                                                
                                                <th></th>
												<th>Nome</th>
                                                <th>Usuario</th>
                                                <th>whatsapp</th>
                                                <th>E-mail</th>
                                                <th>Cidade</th>
                                                <th>Estado</th>
												<th>Data Cad</th>
                                                <th>Status Atual</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
// busca usuario 
if($numrows1 > 0){
	$query1="SELECT * FROM affiliateuser where referedby ='$my_username' ORDER BY id DESC";
	
	$result1 = mysqli_query($con,$query1);
	while($row1 = mysqli_fetch_array($result1)){
		
		$dw1_user="$row1[username]";
		$dw1_nome="$row1[fname]";
		$dw1_cidade="$row1[cidade]";
		$dw1_estado="$row1[estado]";
			$dw1_email="$row1[email]";
			$dw1_whats="$row1[mobile]";
		
		$dw1_data = implode('/', array_reverse(explode('-', "$row1[data_cadastro]")));
			$dw1_active="$row1[active]";
			
			if($dw1_active==1){
				$dw1_status="<span class='label label-success'>Ativo</span>";
				}else{
					$dw1_status="<span class='label label-danger'>Pendente</span>";
					}
			
			print "
			<tr><td>
                                                    <div class='custom-control custom-checkbox'>
                                                        <input type='checkbox' class='custom-control-input' id='customControlValidation23' required>
                                                        <label class='custom-control-label' for='customControlValidation23'></label>
                                                    </div>
                                                </td>
					<td>$dw1_nome</td>
					<td>$dw1_user</td>
					<td>$dw1_whats <a href='https://api.whatsapp.com/send?phone=55$dw1_whats'><img src='assets/img/icon/whats.png' alt='Entre em contato'  /> </a></td>
					<td>$dw1_email</td>
					<td>$dw1_cidade</td>
					<td>$dw1_estado</td>
					<td>$dw1_data</td>
					<td>$dw1_status</td>
					</tr>
					";
		
		}
		
}

?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-xl-3 col-md-3">
                        <div class="card">
                            <div class="border-bottom p-15">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Sharemodel" style="width: 100%">
                                    <i class="ti-share mr-2"></i> Cadastrar novo Investidor
                                </button>
                            </div>
                            <div class="card-body">
                                <a href="#" class="list-group-item"><i class="ti-flag-alt-2 mr-2"></i> Desbloqueio de Opções <? print $numrows1 ?>/10
                                        <span class="badge badge-info float-right"><? print $numrows1 ?></span>
                                    </a>
                                     <div class="progress ">
    <div class="progress-bar bg-danger wow animated progress-animated" style="width: <? print $numrows1 ?>%; height:6px;" role="progressbar"> <span class="sr-only"></span> </div>
</div>
                               
                                <div class="list-group mt-4">
                                    <a href="javascript:void(0)" class="list-group-item active"><i class="ti-layers mr-2"></i> Dados Gerações</a>
                                     <a href="minhas_geracoes.php" class="list-group-item"><i class="fas fa-user-plus mr-2"></i> 2º Geração Cadastros 
                                        <span class="badge badge-info float-right"><? print $numrows2 ?></span>
                                    </a>
                                    <a href="minhas_geracoes.php" class="list-group-item"><i class="fas fa-users mr-2"></i> 3º Geração Cadastros
                                        <span class="badge badge-success float-right"><? print $numrows3 ?></span>
                                    </a>
                                    <a href="minhas_geracoes.php" class="list-group-item"><i class="wi wi-snow-wind mr-2"></i> 4º Geração Cadastros
                                        <span class="badge badge-dark float-right"><? print $numrows4 ?></span>
                                    </a>
                                    <a href="minhas_geracoes.php" class="list-group-item"><i class="wi wi-showers mr-2"></i> 5º Geração Cadastros
                                        <span class="badge badge-danger float-right"><? print $numrows5 ?></span>
                                    </a>
                                </div>
                                
                                <h4 class="card-title mt-4">Ferramentas Premium</h4>
                                <div class="list-group">
                                    <a href="javascript:void(0)" class="list-group-item">  
                                        <span class="badge badge-info mr-2"><i class="ti-import "></i></span> Salvar Contatos (Block)
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <span class="badge badge-warning text-white mr-2"><i class="ti-export"></i></span> Export CSV (Block)
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <span class="badge badge-success mr-2"><i class="ti-share-alt"></i></span> Exportar PDF (Block)
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <span class="badge badge-primary mr-2"><i class="ti-layers-alt"></i></span> Imprimir (Block)
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <span class="badge badge-danger mr-2"><i class="ti-trash"></i></span> Remover Indicado Inativo (Block)
                                    </a>
									
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- Share Modal -->
            <div class="modal fade" id="Sharemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal app-cam mt-4"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post" data-validate="parsley">
								<input type="hidden" name="todo" value="post">
								<input type="hidden" name="data_cadastro" value="<?php echo date('Y/m/d'); ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-auto-fix mr-2"></i> Novo Indicado</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" placeholder="Nome completo" data-required="true" name="name" autofocus="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg ssn-inputmask" type="text" placeholder="CPF" required data-required="true" name="cpf" id="ssn-mask">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg " placeholder="WhatsApp"   data-required="true" name="mobile" autofocus="" required>
                                    </div>
                                </div>
								<?php
if(isset($_GET["ref"])){
	$ref=mysqli_real_escape_string($con,$_GET["ref"]);
	$_SESSION['ref'] = $ref;
	}
?>
                                
									<div class="card-body">
                                <h4 class="card-title">SEU INDICADOR</h4>
                                <h6 class="card-subtitle">Usuario da <code>PESSOA</code> que te indicou a RM Luxury</h6>
                                <form class="mt-2">
                                    <div class="form-group">
                            <input type="text" class="form-control" id="prenametext" value="<?php echo $my_username;?>" name="referral" required>
                                    </div>
                                    </div>
                                
								<div class="form-group">
                                        
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control"  placeholder="Username" aria-label="Username" aria-describedby="basic-addon11" data-required="true" name="username" autofocus="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon22"><i class="ti-email"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon22" data-required="true" name="email" autofocus="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon33"><i class="ti-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Senha" aria-label="Password" aria-describedby="basic-addon33" data-required="true" name="password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Confirmar Senha" aria-label="Password" aria-describedby="basic-addon4" data-required="true" name="password2" required>
                                        </div>
                                <div class="form-group row">
                                    <div class="col-md-12 ">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Confirmar Veracidade dos <a href="javascript:void(0)">dados</a></label>
                                        </div>
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success"><i class="ti-save"></i> Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                           
                        
                    </div>
                </div>
            </div>
            <!-- Create Modal -->
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
       Lista Indicados Diretos <a href="#">R&M Luxury</a>.
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
		<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="assets/libs/raty-js/lib/jquery.raty.js"></script>
    <script src="assets/extra-libs/raty/rating-init.js"></script>
    <script src="dist/js/pages/datatable/datatable-advanced.init.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
		<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
			<script src="assets/extra-libs/prism/prism.js"></script>
</body>

</html>