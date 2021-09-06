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

?>
<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['todo']))
{



$pass_word=mysqli_real_escape_string($con,$_POST['pass1']);
$new_pass=mysqli_real_escape_string($con,$_POST['pass2']);
$new_pass2=mysqli_real_escape_string($con,$_POST['pass3']);
//collection ends

$check=1;
if($check==1){

$status = "OK";
$msg="";
//validation starts
// if userid is less than 6 char then status is not ok


if ( $pass_word!=$my_password ){
$msg=$msg."Senha errada, você precisa informar a sua senha atual para alterar.<BR>";
$status= "NOTOK";}

if ( $new_pass!=$new_pass2 ){
$msg=$msg."As senhas são diferentes, confirme a nova senha.<BR>";
$status= "NOTOK";}

if ( strlen($new_pass) < 6 ){
$msg=$msg."A senha deve ter no mínimo 6 dígitos.<BR>";
$status= "NOTOK";}

}
if ($status=="OK") 
{

$query=mysqli_query($con,"update affiliateuser set password='$new_pass' where username='".$_SESSION['username']."'");


$errormsg= "
<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Sucesso! </br></strong>Dados Atualizados.</div>"; //printing error if found in validation



}



else
{ 
$errormsg= "
<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Corrija os erros : </br></strong>".$msg."</div>"; //printing error if found in validation
					
}

}

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
    <title><?php echo $my_username;?> | Perfil do Investidor - R&M Luxury</title>
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
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Pagina Perfil</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Configurações</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Perfil</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="mr-2">
                                <div class="lastmonth"></div>
                            </div>
                            
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="assets/images/users/1.jpg" class="rounded-circle" width="150" />
                                  <h4 class="card-title mt-2"><?php echo $my_nome;?></h4>
                                    <h6 class="card-subtitle">Investidor R&amp;M Luxury</h6>
                                    <div class="row text-center justify-content-md-center">
                                      <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium"></font></a></div>
                                        <div class="col-4"><a  data-toggle="modal" data-target="#mTirarFoto" class="link"><i class="icon-picture"></i> <font class="font-medium"></font></a></div>
                                  </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Seu E-mail </small>
                                <h6><?php echo $my_email;?></h6> <small class="text-muted pt-4 db">Telefone</small>
                                <h6><?php echo $my_whats;?></h6> <small class="text-muted pt-4 db">Endereço</small>
                                <h6><?php echo $my_endereco;?></h6>
                                 <small class="text-muted pt-4 db">Perfil Social</small>
                                <br/>
                                <button class="btn btn-circle btn-primary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-danger"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tabs -->
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
								
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Dados Pessoais</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" id="pills-dados-tab" data-toggle="pill" href="#previous-dados" role="tab" aria-controls="pills-dados-tab"  aria-selected="true">Dados de Acesso</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Sua Localização</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Formas de Recebimento</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-midia" role="tab" aria-controls="pills-midia-tab" aria-selected="false">Midias Social</a>
									
                                </li>
                            </ul>
                            <!-- Tabs -->
                            <div class="tab-content" id="pills-tabContent">
								
                                <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
									
                                    <div class="card-body">
                                        <form  class="tab-wizard wizard-circle needs-validation"   novalidate method="post" action="profile_update_dadospessoais.php">
									<input type="hidden" name="todo" value="post">
											
                                    <!-- Step 1 -->
                                    <h6>Informações Pessoais</h6>
											<div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%; height:6px;">  </div>
											</div></br>
                                    <section>
                                        <div class="row">
											
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="validationTooltip01">Seu Nome :</label>
                                                  <input disabled="" type="text" class="form-control" id="firstName1" name="nome" value="<?php echo $my_nome;?>"> 
                                              </div>
                                            </div>
											
                                            <div class="col-md-6">
                                                <div class="form-group">
                                      <label for="validationTooltip02">Identidade</label>
                                      <input type="text" class="form-control" id="validationTooltip02" name="rg" value="<?php echo $my_rg;?>" required>
                                      <div class="valid-tooltip">
                                        Muito Bom!
                                      </div>
                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationTooltip03">CPF :</label>
                                                    <input disabled="" type="cpf" class="form-control" id="cpf" name="cpf" value="<?php echo $my_cpf;?>"> </div>
                                            </div>
											
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationTooltip01">Data Nascimento :</label>
                                                    <input type="text" class="form-control" id="nascimento" name="nascimento" value="<?php echo $my_nascimento;?>" required> <div class="valid-tooltip">
                                        Muito Bom!
                                      </div></div>
												<div class="form-group">
                                    <label>Telefone <small class="text-muted">(xx) 9999-9999</small></label>
                                    <input type="text" class="form-control "  name="mobile" value="<?php echo $my_whats;?>" required>
                                </div>
											
												
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    
                                   <button class="btn btn-success">Atualizar Dados Pessoais</button>
                                    <!-- Step 4 -->
                                    
                                </form>
                                    </div>
                                </div>
								
								<div class="tab-pane fade" id="previous-dados" role="tabpanel" aria-labelledby="pills-dados-tab">
                                    <div class="card-body">
                                        <form class="form-horizontal" method="post" action="profile_update.php">
											<input type="hidden" name="todo" value="post">
                                           <h6>Dados Acesso Sistema</h6>
                                    <section>
										<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:40%; height:6px;">  </div> </br>
                                        <div class="row">
											
                                            <div class="col-md-6">
                                                <div class="form-group">
													
                                        <label for="disabledusername"> Usuario</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                                            </div>
                                            <input type="text" id="disabledusername" class="form-control" aria-label="Username" aria-describedby="basic-addon11"  disabled="" name="user" value="<?php echo $my_username;?>">
                                        </div>
                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                        <label for="exampleInputEmail1">E-mail</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon22"><i class="ti-email"></i></span>
                                            </div>
                                            <input disabled="" type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon22" name="email" value="<?php echo $my_email;?>" >
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                        <label>Senha Atual</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon33"><i class="ti-lock"></i></span>
                                            </div>
                                            <input type="Password" class="form-control"  aria-label="Password" aria-describedby="basic-addon33" name="pass1" >
                                        </div>
                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                        <label>Nova Senha</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                                            </div>
                                            <input type="Password" class="form-control"  aria-label="Password" aria-describedby="basic-addon4"name="pass2">
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                        <label>Confirme sua Senha</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                                            </div>
                                            <input type="Password" class="form-control"  aria-label="Password" aria-describedby="basic-addon4" name="pass3">
                                        </div>
                                    </div>
                                            </div>
                                            <div class="col-md-6">
												
                                            </div>
                                        </div>
											
                                    </section>
																				
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    
													<button class="btn btn-danger">Atualizar Minha Senha Acesso</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
								
                                <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Nome Completo</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $my_nome;?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Celular</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $my_whats;?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $my_email;?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Usuario</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $my_username;?></p>
                                            </div>
                                        </div><div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="15" aria-valuemax="100" style="width:60%; height:6px;">  </div>
                                        <hr>
										
                                        <form  class="tab-wizard wizard-circle"  method="post" action="profile_update_localizacao.php">
									<input type="hidden" name="todo" value="post">
                                    <!-- Step 1 -->
                                    
                                    <h6>Localização</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="validationTooltip03">Endereço</label>
                                                    <input type="text" class="form-control" id="firstName1" name="endereco" value="<?php echo $my_endereco;?>"required><div class="invalid-tooltip">
                                        Digite seu Endereço Corretamente.
                                      </div> </div>
                                                <div class="form-group">
                                                    <label for="intType1">Bairro :</label>
                                                    <input type="text" class="form-control" id="firstName1" name="bairro" value="<?php echo $my_bairro;?>"required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Location1">Cidade :</label>
                                                    <input type="text" class="form-control" id="firstName1" name="cidade" value="<?php echo $my_cidade;?>"required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle2">Estado :</label>
                                                    <input type="text" class="form-control" id="firstName1" name="estado" value="<?php echo $my_estado;?>"required>
                                                </div>
                                               <div class="form-group">
                                                    <label for="jobTitle2">Cep :</label>
                                                    <input type="text" class="form-control" id="firstName1" name="cep" value="<?php echo $my_cep;?>"required>
                                                </div>
												<div class="form-group">
                                                    <label for="jobTitle2">Pais :</label>
                                                    <input type="text" class="form-control" id="firstName1" name="pais" value="Brasil"required>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
									                                    
                                        
                                        <button class="btn btn-info">Atualizar Meu Endereço</button>
                                       
                                        
                                    </div>
                                </div>
									</form>
                                <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                    <div class="card-body">
                                        <form  class="tab-wizard wizard-circle"  method="post" action="profile_update_recebimentos.php">
											<input type="hidden" name="todo" value="post">
                                           <h6>Formas Recebimento</h6>
                                    <section>
										<div class="progress-bar bg-megna" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;">  </div> </br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Location1">Nome do Banco</label>
                                                    <input type="text" class="form-control" id="firstName1" name="banco" value="<?php echo $my_banco;?>"required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Location1">Agencia</label>
                                                    <input type="text" class="form-control" id="firstName1" name="agencia" value="<?php echo $my_agencia;?>"required>
                                                </div>
												<div class="form-group">
                                                    <label for="Location1">Conta :</label>
                                                    <input type="text" class="form-control" id="firstName1" name="nconta" value="<?php echo $my_conta;?>"required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Tipo</label>
                                                    <input type="text" class="form-control" id="firstName1" name="tipo" value="<?php echo $my_conta_tipo;?>"required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                               <div class="form-group">
                                                    <label for="Location1">E-mail Mercado Pago :</label>
                                                    <input type="text" class="form-control" id="firstName1" name="mercadopago" value="<?php echo $my_mercadopago;?>"required>
                                                </div>
                                                
                                            </div>
                                        
                                    </section>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-cyan">Atualizar Minhas Formas de Ganhos</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
									
									<div class="tab-pane fade" id="previous-midia" role="tabpanel" aria-labelledby="pills-midia-tab">
                                    <div class="card-body">
                                        <form  class="tab-wizard wizard-circle"  method="post" action="profile_update_midias.php">
                                           <input type="hidden" name="todo" value="post">
                                    <h6>Midias Social</h6>
                                    <section>
										<div class="progress-bar bg-orange" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:6px;">  </div> </br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="int1">Facebook</label>
                                                    <input type="text" class="form-control" id="firstName1" name="facebook" value="<?php echo $my_facebook;?>"required> </div>
                                                <div class="form-group">
                                                    <label for="intType1">Canal Youtube :</label>
                                                    <input type="text" class="form-control" id="firstName1" name="youtube" value="<?php echo $my_youtube;?>"required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Location1">Instagram :</label>
                                                    <input type="text" class="form-control" id="firstName1" name="instagram" value="<?php echo $my_instagram;?>"required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle2">Pagina Pessoal :</label>
                                                    <input type="text" class="form-control" id="firstName1" name="site" value="<?php echo $my_site;?>">
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </section>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-orange">Atualizar Minha Redes Sociais</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
									
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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

<div id="mTirarFoto" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display: block">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Trocar Foto</h4>
      </div>
      <div class="modal-body">
			<form id="fSalvarFoto" method="post" action="./SalvarFoto.php">
			  <div class="form-group">
				<input type="file" class="form-control" id="foto" name="foto">
			  </div>
			  <button type="submit" class="btn btn-default">Salvar</button>
			</form>
			<div class="progress" style="display: none; height: 15px;margin-top: 10px;">
			  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
				0%
			  </div>
			</div>			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div> 

  </div>
</div>

    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
	
	<!-- usado para permitir postar imagem sem dar refresh na tela -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script>
    var bar = $("#mTirarFoto .progress-bar");
	
    $("#fSalvarFoto").submit(function () {
        $("#mTirarFoto .progress").show();
    }).ajaxForm({
        beforeSend: function () {
            var percentVal = '0%';
            bar.width(percentVal)
            bar.html(percentVal);
        }, uploadProgress: function (percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal)
            bar.html(percentVal);
        }, success: function () {
            var percentVal = '100%';
            bar.width(percentVal)
            bar.html(percentVal);
        }, complete: function (xhr) {
			if(xhr.status == 404){
				swal("Erro", "Controladora ainda não criada, favor rever !!!", "error");
			}else{
				var data = JSON.parse(xhr.responseText);
				if (data.situacao) {
					swal("Cadastro", data.mensagem, "success");
				} else {

					swal("Erro", data.mensagem, "error");
				}
			}
        }
    });	
	
	</script>
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
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>

</html>