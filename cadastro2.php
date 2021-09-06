<?php
if(!isset($_SESSION)){
    session_start();
}
include_once ("admin/site/mmn_db.php");

include_once ("admin/site/config.php");
?>
<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Novo Cadastro - R&M Luxury Semi Joias & Investimentos</title>
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
    <div class="main-wrapper">
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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div>
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
include "email_cadastro_sucesso.php";
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
	
	
}

print "<div class='alert alert-success'><h2><strong>Sucesso!</br></strong>Bem Vindo(a) R&M.<a href='login.php' class='btn btn-info'>FAZER LOGIN</a></h2></div>";
}

else
{ 
print "
<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>
<i class='fa fa-ban-circle'></i><strong>ERROS : </br></strong>".$msg."</div>";
}

}
?>
                    <div class="logo">
                        <span class="db"><img src="assets/images/logo_rm.png" width="170px" height="55px"/></span>
                        <h5 class="font-medium mb-3">Novo Cliente</h5>
                    </div>
                    <!-- Form -->
					
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal app-cam mt-4"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post" data-validate="parsley">
								<input type="hidden" name="todo" value="post">
								<input type="hidden" name="data_cadastro" value="<?php echo date('Y/m/d'); ?>">
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
                            <input type="text" class="form-control" id="prenametext" value="<?php if (isset($_SESSION['ref'])){ print $_SESSION['ref']; } ?>" name="referral" required>
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
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 pb-3 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit">CADASTRAR</button>
										<button class="btn btn-lg btn-success1 btn-block" type="submit">Cadastrar</button>
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-2 ">
                                    <div class="col-sm-12 text-center ">
                                        Já é Cadastrado? <a href="login.php" class="text-info ml-1 "><b>Login</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>
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
		<script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/forms/mask/mask.init.js"></script>
</body>

</html>