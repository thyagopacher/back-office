<?php
include_once ("admin/site/mmn_db.php");
include_once ("admin/site/config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']))
{
$status = "OK"; //initial status
$msg="";
	$username=mysqli_real_escape_string($con,$_POST['username']); //fetching details through post method
     $password = mysqli_real_escape_string($con,$_POST['password']);

if ( strlen($username) < 6 ){
$msg=$msg."Username deve conter no mínimo 6 caracteres<BR>";
$status= "NOTOK";}

if ( strlen($password) < 6 ){ //checking if password is greater then 8 or not
$msg=$msg."Senha deve conter no mínimo 6 dígitos<BR>";
$status= "NOTOK";}

if($status=="OK"){

// Retrieve username and password from database according to user's input, preventing sql injection
$query ="SELECT * FROM affiliateuser WHERE (username = '" . mysqli_real_escape_string($con,$_POST['username']) . "') AND (password = '" . mysqli_real_escape_string($con,$_POST['password']) . "')";
if ($stmt = mysqli_prepare($con, $query)) {

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* store result */
    mysqli_stmt_store_result($stmt);

    $num=mysqli_stmt_num_rows($stmt);

    /* close statement */
    mysqli_stmt_close($stmt);
}
//mysqli_close($con);
// Check username and password match

if (($num) == 1) {



session_start();
        // Set username session variable
        $_SESSION['username'] = $username;
		
        // Jump to secured page
		print "
				<script language='javascript'>
					window.location = 'home.php?page=home%location=index.php';
				</script>"; 


}



else{
$errormsg= "
<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>ERRO : </br></strong>Username ou Senha incorretos, tente novamente.</div>"; //printing error if found in validation
				
}} 
else {
        
$errormsg= "
<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>ERRO : </br></strong>".$msg."</div>"; //printing error if found in validation
				
	 
}
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['femail']))
{

$email=mysqli_real_escape_string($con,$_POST['femail']);
$status=1;
if($status==1){

$status = "OK";
$msg="";
//checking constraints
if ( strlen($email) < 1 ){
$msg=$msg."Insira o seu email.<BR>";
$status= "NOTOK";}


$result = mysqli_query($con,"SELECT count(*) FROM  affiliateuser where email = '$email'");
$row = mysqli_fetch_row($result);
$numrows = $row[0];

if(($numrows) == 0) {
$msg=$msg."Este email não está cadastrado no sistema.<BR>";
$status= "NOTOK";}

}

$newpassword = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%^&*') , 0 , 8 );

if ( strlen($newpassword) < 8 ){
$msg=$msg."A nova senha não pôde ser gerada, tente novamente.<BR>";
$status= "NOTOK";}


if($status=="OK")
{


$re = mysqli_query($con,"update affiliateuser set password = '$newpassword' where email = '$email'");
   
if($re)
{
$emailtext="";
$message=$emailtext;
$to=$email;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: R&M Luxury Security <naoresponda@rmluxury.com.br>" . "\r\n"; // Aqui você pode colocar o seu email
$subject="Atenção Nova Senha Gerada | R&M Luxury";
$message.="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;' />
<title>bignote</title>

<style type='text/css'>

	    body{width: 100%; background-color: #0182cb; margin:0; padding:0; -webkit-font-smoothing: antialiased;mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;}
        
        p,h1,h2,h3,h4{margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;}
        
        span.preheader{display: none; font-size: 1px;}
        
        html{width: 100%;}
        
        table{font-size: 12px;border: 0;}
		
		.menu-space{padding-right:25px;}
		
		a,a:hover { text-decoration:none; color:#FFF;}


@media only screen and (max-width:640px)

{
	body {width:auto!important;}
	table [class=main] {width:440px !important;}
	table [class=two-left] {width:420px !important; margin:0px auto;}
	table [class=full] {width:100% !important; margin:0px auto;}
	table [class=two-left-inner] {width:400px !important; margin:0px auto;}
	table [class=menu-icon] { display:none;}

	}

@media only screen and (max-width:479px)
{
	body {width:auto!important;}
	table [class=main]  {width:310px !important;}
	table [class=two-left] {width:300px !important; margin:0px auto;}
	table [class=full] {width:100% !important; margin:0px auto;}
	table [class=two-left-inner] {width:280px !important; margin:0px auto;}
	table [class=menu-icon] { display:none;}

	
}



</style>

</head>

<body yahoo='fix' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>

<!--Main Table Start-->

<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#0182cb'>
  <tr>
    <td align='center' valign='top'><table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='main'>
  <tr>
    <td height='60' align='center' valign='top' style='font-size:60px; line-height:60px;'>&nbsp;</td>
  </tr>
  <tr>
    <td height='660' align='center' valign='top' bgcolor='#00a3ff' style='background: url(https://rmluxury.com.br/wp-content/uploads/note13-image.png) #00a3ff center top; -moz-border-radius: 4px; border-radius: 4px; box-shadow:5px 0px 18px 0px #0175a7;'><table width='400' border='0' align='center' cellpadding='0' cellspacing='0' class='two-left-inner'>
      <tr>
        <td height='45' align='left' valign='top' style='font-size:45px; line-height:45px;'>&nbsp;</td>
      </tr>
      <tr>
        <td align='left' valign='top'>
        
        <table width='105' border='0' align='left' cellpadding='0' cellspacing='0' class='full'>
          <tr>
            <td align='center' valign='top'><a href='#'><img  src='https://rmluxury.com.br/wp-content/uploads/logo_2_rm_luxury_branco_logotipo-design-3.png' width='135' height='50' alt='' /></a></td>
          </tr>
        </table>
        
        <table width='105' border='0' align='right' cellpadding='0' cellspacing='0' class='full'>
  <tr>
    <td align='center' valign='top'><table width='105' border='0' align='center' cellpadding='0' cellspacing='0'>
        <tr>
    <td height='8' colspan='2' align='left' valign='top' style='font-size:8px; line-height:8px;'>&nbsp;</td>
    </tr>
  <tr>
    <td width='20' align='left' valign='top'><img  src='https://rmluxury.com.br/wp-content/uploads/account-icon.png' width='20' height='20' alt='' /></td>
    <td width='85' align='center' valign='bottom' style='font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#FFF; padding-top:1px;'><a href='https://rmluxury.com.br/backoffice/' style='text-decoration:none; color:#FFF;'>Backoffice</a></td>
  </tr>
</table></td>
  </tr>
</table>


        
        </td>
      </tr>
      <tr>
        <td height='100' align='center' valign='top' style='font-size:100px; line-height:100px;'>&nbsp;</td>
      </tr>
      <tr>

        <td align='center' valign='top'><table width='100' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td height='100' align='center' valign='middle' bgcolor='#FFFFFF' style='-moz-border-radius: 100px; border-radius: 100px;'><img  src='https://rmluxury.com.br/wp-content/uploads/lock-icon.png' width='45' height='60' alt='' /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align='center' valign='top'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
          <tr>
            <td height='20' align='center' valign='top' style='font-size:20px; line-height:20px;'>&nbsp;</td>
          </tr>
          <tr>
            <td align='center' valign='top'><table width='300' border='0' align='center' cellpadding='0' cellspacing='0' class='two-left-inner'>
              <tr>
                <td align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:24px; font-weight:normal; color:#FFF; line-height:30px;'>Alerta de Segurança</td>
              </tr>
              <tr>
                <td align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:normal; color:#FFF; line-height:24px;'>$username Sua senha foi redefinida, a mesma encontra-se abaixo.</td>
              </tr>
              <tr>
                <td align='center' valign='top'>&nbsp;</td>
              </tr>
              <tr>
                <td align='center' valign='top'><table width='130' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td height='40' align='center' valign='middle' bgcolor='#133d55' style='font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#FFF; -moz-border-radius: 40px; border-radius: 40px;'><a href='https://rmluxury.com.br/backoffice/login.php' style='text-decoration:none; color:#FFF;'>$newpassword</a></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
             <td height='40' align='center' valign='top' style='font-size:40px; line-height:40px;'>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align='center' valign='top'><table width='86' border='0' align='center' cellpadding='0' cellspacing='0'>
          <tr>
            <td align='center' valign='middle'><a href='#'><img  src='https://rmluxury.com.br/wp-content/uploads/facebook.png' width='23' height='23' alt='' /></a></td>
            <td align='center' valign='middle'><a href='#'><img  src='https://rmluxury.com.br/wp-content/uploads/twitter.png' width='23' height='23' alt='' /></a></td>
            <td align='center' valign='middle'><a href='#'><img  src='https://rmluxury.com.br/wp-content/uploads/google.png' width='23' height='23' alt='' /></a></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align='center' valign='top'>&nbsp;</td>
      </tr>
      <tr>
        <td align='center' valign='top'><table width='300' border='0' align='center' cellpadding='0' cellspacing='0' class='two-left-inner'>
          <tr>
            <td align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:normal; color:#FFF; line-height:24px;'>Estamos Monitorando sua Conta</td>
          </tr>
          <tr>
            <td align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:normal; color:#FFF; line-height:32px;'>Troque sua Senha em Meu Perfil no Backoffice </td>
          </tr>
          <tr>
            <td align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#FFF; line-height:24px;'>R&M Luxury Security</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
     <td height='60' align='center' valign='top' style='font-size:60px; line-height:60px;'>&nbsp;</td>
  </tr>
    </table>
</td>
  </tr>
</table>

<!--Main Table End-->


</body>
</html>";
mail($to,$subject,$message,$headers);

echo "<br><center><font face='Verdana' size='2' color=red>Sua nova senha foi enviada para o seu email cadastrado aqui no sistema. </font><br>";
}
else
{
 print "<center><font face='Verdana' size='2' color=red><br>Não foi possível recuperar sua senha, tente novamente mais tarde.</font><br>";
}
//updating status if validation passes

}
else{
echo "<br/><br/><br/><center><font face='Verdana' size='2' color=red>$msg</font><br>"; //priting error if found in validation


}
}

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
    <title>Backoffice RM Luxury - Criptografado</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
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
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="assets/images/logo_rm.png" width="170px" height="55px" alt="logo" /></span>
                        <h5 class="font-medium mb-3"></h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3" id="loginform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post"><?php 
						if(@$_SERVER['REQUEST_METHOD'] == 'POST' && (@$errormsg!=""))
						{
						print $errormsg;
						}
						?>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Seu Username';}">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Sua senha';}">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Lembrar</label>
                                            <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock mr-1"></i> Esqueci Minha Senha?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 pb-3">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">Acessar Backoffice</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                                        
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-2">
                                    <div class="col-sm-12 text-center">
                                        Criptografia Ativada
										<div class="progress ">
    <div class="progress-bar bg-danger  wow animated progress-animated" style="width: 100%; height:10px;" role="progressbar"> <span class="sr-only">100% Complete</span> </div>
</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="recoverform">
                    <div class="logo">
                        <span class="db"><img src="assets/images/logo_rm.png" width="170px" height="55px" alt="logo" /></span>
                        <h5 class="font-medium mb-3">Vamos Rezetar seu Senha</h5>
                        <span>Digite seu e-mail e as instruções serão enviadas para você!</span>
                    </div>
                    <div class="row mt-3">
                        <!-- Form -->
                        <form class="col-12" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post">
                            <!-- email -->
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="email" required="" placeholder="E-Mail Cadastrado" name="femail" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Seu email';}">
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-danger" type="submit" onclick="myFunction()" name="action">Reset</button>
                                </div>
                            </div>
                        </form>
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
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/extra-libs/jquery-sessiontimeout/jquery.sessionTimeout.min.js"></script>
    <script src="assets/extra-libs/jquery-sessiontimeout/session-timeout-init.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
	
</body>

</html>