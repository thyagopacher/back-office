<?php
if(!isset($_SESSION)){
    session_start();
}
include_once ("admin/site/mmn_db.php");

include_once ("admin/site/config.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
	<?php

$email     = $_POST['email']; // Aqui recebe o email preechido no formulário
$subject = "Atenção Sua senha Foi Modificada | R&M Luxury"; // Aqui é o assunto que você quiser
$message = "

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
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
    <td width='85' align='center' valign='bottom' style='font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#FFF; padding-top:1px;'><a href='#' style='text-decoration:none; color:#FFF;'>account</a></td>
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
                <td align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:normal; color:#FFF; line-height:24px;'>$name, Sua senha foi redefinida, a mesma encontra-se abaixo.</td>
              </tr>
              <tr>
                <td align='center' valign='top'>&nbsp;</td>
              </tr>
              <tr>
                <td align='center' valign='top'><table width='130' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td height='40' align='center' valign='middle' bgcolor='#133d55' style='font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#FFF; -moz-border-radius: 40px; border-radius: 40px;'><a href='#' style='text-decoration:none; color:#FFF;'>$newpassword</a></td>
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
            <td align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:normal; color:#FFF; line-height:24px;'>Estamos Monitorando sua conta</td>
          </tr>
          <tr>
            <td align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:normal; color:#FFF; line-height:32px;'>Troque sua Senha em Meu Perfil no Backoffice </td>
          </tr>
          <tr>
            <td align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#FFF; line-height:24px;'>Meu Backoffice</td>
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
</html>


"; // Aqui é a mensagem que você quer enviar. Pode digitar o que quiser
$headers .= "To: $nome <$email>" . "\r\n";  // Aqui é o cabeçalho do Email. Aqui aparece o nome e o email preechido no formulário
$headers .= "From: R&M Luxury <naoresponda@rmluxury.com.br>" . "\r\n"; // Aqui você pode colocar o seu email
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n"; // Aqui você nao muda nada
   
mail($email, $subject, $message, $headers); // Essa é a linha que faz a mágica toda :)
?>
</body>
</html>