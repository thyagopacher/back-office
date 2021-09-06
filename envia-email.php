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

$email= $_POST['grupoashisa@gmail.com']; // Aqui recebe o email preechido no formulário
$subject = "Confirmação de cadastro na R&M Luxury"; // Aqui é o assunto que você quiser
$message = "





<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700,900' rel='stylesheet'>

<!--[if (gte mso 9)|(IE)]>
<style type='text/css'>
  td, td div, td span, td p, td a {font-family: Arial,Helvetica,sans-serif !important;}
</style>
<![endif]-->

<style type='text/css'>
/*Basics*/
body {margin:0px !important; padding:0px !important; display:block !important; min-width:100% !important; width:100% !important; -webkit-text-size-adjust:none;}
table {border-spacing:0; mso-table-lspace:0pt; mso-table-rspace:0pt;}
table td {border-collapse: collapse;}
strong {font-weight: bold !important;}
td img {-ms-interpolation-mode:bicubic; display:block; width:auto; max-width:auto; height:auto; margin:auto;display:block!important;border:0px!important;}
td p {margin:0 !important; padding:0 !important; display:inline-block !important; font-family:inherit !important;}
td a {text-decoration:none !important;}
/*Outlook*/
.ExternalClass {width: 100%;}
.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div {line-height:inherit;}
.ReadMsgBody {width:100%; background-color: #ffffff;}
/* iOS BLUE LINKS */
a[x-apple-data-detectors] {color:inherit !important; text-decoration:none !important; font-size:inherit !important; font-family:inherit !important; font-weight:inherit !important; line-height:inherit !important;} 
/*Gmail blue links*/
u + #body a {color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit;}
/*MailChimp preview text*/
.mcnPreviewText{display: none !important;}
/*Buttons fix*/
.undoreset a, .undoreset a:hover {text-decoration:none !important;}
.yshortcuts a {border-bottom:none !important;}
.ios-footer a {color:#aaaaaa !important;text-decoration:none;}
/*Images*/
td.img8 img {width:100%;max-width:8px;}
td.img16 img {width:100%;max-width:16px;}
td.img32 img {width:100%;max-width:32px;}
td.img64 img {width:100%;max-width:64px;}
td.img96 img {width:100%;max-width:96px;}
td.img100 img {width:100%;max-width:100px;}
td.img120 img {width:100%;max-width:120px;}
td.img135 img {width:100%;max-width:135px;}
td.img140 img {width:100%;max-width:140px;}
td.img150 img {width:100%;max-width:150px;}
td.img180 img {width:100%;max-width:180px;}
td.img185 img {width:100%;max-width:185px;}
td.img190 img {width:100%;max-width:190px;}
td.img210 img {width:100%;max-width:210px;}
td.img265 img {width:100%;max-width:265px;}
td.img280 img {width:100%;max-width:280px;}
td.img290 img {width:100%;max-width:290px;}
td.img300 img {width:100%;max-width:300px;}
td.img395 img {width:100%;max-width:395px;}
td.img400 img {width:100%;max-width:400px;}
td.img410 img {width:100%;max-width:410px;}
td.img600 img {width:100%;max-width:600px;}
td.img800 img {width:100%;max-width:800px;}
/*Responsive*/
@media screen and (max-width: 768px) {
  td.img-responsive img {width:100%!important;max-width: 100%!important;height: auto!important;margin: auto;}
  td.img-responsive-border img {width:88%!important;max-width: 88%!important;height: auto!important;margin: auto;}
  table.row {width: 100%!important;max-width: 100%!important;}
  table.center-float, td.center-float {float: none!important;}
  td.center-text{text-align: center!important;}
  td.container-padding {width: 100%!important;padding-left: 15px!important;padding-right: 15px!important;}
  table.hide-mobile, tr.hide-mobile, td.hide-mobile, br.hide-mobile {display: none!important;}
  td.menu-container {text-align: center !important;}
  td.autoheight {height: auto!important;}
  td.border-rounded {border-radius: 6px!important;}
  td.border-none {border: none!important;}
  table.mobile-padding {margin: 15px 0!important;}
  td.fade-white{background-color: rgba(255, 255, 255, 0.8)!important;}
  td.fade-dark{background-color: rgba(0, 0, 0, 0.25)!important;}
}

/*//////////////////////////////////////// body ////////////////////////////////////////*/
/**
* @tab body
* @section Background Color
*/
body, td.body-bg-color {
  /*@editable*/background-color:#F4F4F4 !important;
}

/*//////////////////////////////////////// header-7 ////////////////////////////////////////*/
/**
* @tab header-7
* @section Module Background Color
*/
td.header-7 td.bg-color {
  /*@editable*/background-color:#381C7F !important;
}
/**
* @tab header-7
* @section Space Control 1
*/
td.header-7 td.space-control-1 {
  /*@editable*/height: 20px !important;
}
/**
* @tab header-7
* @section Space Control 2
*/
td.header-7 td.space-control-2 {
  /*@editable*/height: 80px !important;
}
/**
* @tab header-7
* @section Space Control 3
*/
td.header-7 td.space-control-3 {
  /*@editable*/height: 40px !important;
}
/**
* @tab header-7
* @section Background Image
*/
td.header-7 td.bg-image {
  /*@editable*/background-color: transparent !important;
  /*@editable*/background-image: url(https://www.psd2newsletters.com/templates/oxygen/img/header-7-back.jpg) !important;
  /*@editable*/background-repeat: no-repeat !important;
  /*@editable*/background-position: center !important;
  /*@editable*/background-size: cover !important;
}
/**
* @tab header-7
* @section Button 1
*/
td.header-7 td.button-bg-1 {
  /*@editable*/background-color:#00c1c1 !important;
  /*@editable*/border-radius:0px !important;
}
/**
* @tab header-7
* @section Button 2
*/
td.header-7 td.button-bg-2 {
  /*@editable*/background-color:#ff0079 !important;
  /*@editable*/border-radius:0px !important;
}

/*//////////////////////////////////////// features-3 ////////////////////////////////////////*/
/**
* @tab features-3
* @section Module Background Color
*/
td.features-3 td.bg-color {
  /*@editable*/background-color:#f9fafc !important;
}
/**
* @tab features-3
* @section Space Control
*/
td.features-3 td.space-control {
  /*@editable*/height: 20px !important;
}
/**
* @tab features-3
* @section Box 1 Background Color
*/
td.features-3 td.bg-color-box-1 {
  /*@editable*/background-color:#FFFFFF !important;
}
/**
* @tab features-3
* @section Box 2 Background Color
*/
td.features-3 td.bg-color-box-2 {
  /*@editable*/background-color:#FFFFFF !important;
}
/**
* @tab features-3
* @section Box 3 Background Color
*/
td.features-3 td.bg-color-box-3 {
  /*@editable*/background-color:#FFFFFF !important;
}
/**
* @tab features-3
* @section Button
*/
td.features-3 td.button-bg {
  /*@editable*/background-color:#ff0079 !important;
  /*@editable*/border-radius:0px !important;
}

/*//////////////////////////////////////// speakers-1 ////////////////////////////////////////*/
/**
* @tab speakers-1
* @section Module Background Color
*/
td.speakers-1 td.bg-color {
  /*@editable*/background-color:#FFFFFF !important;
}
/**
* @tab speakers-1
* @section Space Control
*/
td.speakers-1 td.space-control {
  /*@editable*/height: 40px !important;
}
/**
* @tab speakers-1
* @section Button
*/
td.speakers-1 td.button-bg {
  /*@editable*/background-color:#000000 !important;
  /*@editable*/border-radius:0px !important;
}

/*//////////////////////////////////////// miscellaneous-10 ////////////////////////////////////////*/
/**
* @tab miscellaneous-10
* @section Module Background Color
*/
td.miscellaneous-10 td.bg-color {
  /*@editable*/background-color:#333333 !important;
}
/**
* @tab miscellaneous-10
* @section Space Control
*/
td.miscellaneous-10 td.space-control {
  /*@editable*/height: 60px !important;
}
/**
* @tab miscellaneous-10
* @section Background Image
*/
td.miscellaneous-10 td.bg-image {
  /*@editable*/background-color: transparent !important;
  /*@editable*/background-image: url(https://www.psd2newsletters.com/templates/oxygen/img/miscellaneous-10-back.jpg) !important;
  /*@editable*/background-repeat: no-repeat !important;
  /*@editable*/background-position: center !important;
  /*@editable*/background-size: cover !important;
}
/**
* @tab miscellaneous-10
* @section Button
*/
td.miscellaneous-10 td.button-bg {
  /*@editable*/background-color:#ff0079 !important;
  /*@editable*/border-radius:0px !important;
}

/*//////////////////////////////////////// miscellaneous-10 ////////////////////////////////////////*/
/**
* @tab miscellaneous-10
* @section Module Background Color
*/
td.miscellaneous-10 td.bg-color {
  /*@editable*/background-color:#FFFFFF !important;
}
/**
* @tab miscellaneous-10
* @section Space Control
*/
td.miscellaneous-10 td.space-control {
  /*@editable*/height: 40px !important;
}
/**
* @tab miscellaneous-10
* @section Schedule 1 Bg Color
*/
td.miscellaneous-10 td.schedule-row-1 td.schedule-bg {
  /*@editable*/background-color:#ff007a !important;
}
/**
* @tab miscellaneous-10
* @section Schedule 1 Content Bg Color
*/
td.miscellaneous-10 td.schedule-row-1 td.content-bg {
  /*@editable*/background-color:#f9fafc !important;
}
/**
* @tab miscellaneous-10
* @section Schedule 2 Bg Color
*/
td.miscellaneous-10 td.schedule-row-2 td.schedule-bg {
  /*@editable*/background-color:#e7015e !important;
}
/**
* @tab miscellaneous-10
* @section Schedule 2 Content Bg Color
*/
td.miscellaneous-10 td.schedule-row-2 td.content-bg {
  /*@editable*/background-color:#FFFFFF !important;
}
/**
* @tab miscellaneous-10
* @section Schedule 3 Bg Color
*/
td.miscellaneous-10 td.schedule-row-3 td.schedule-bg {
  /*@editable*/background-color:#ff007a !important;
}
/**
* @tab miscellaneous-10
* @section Schedule 3 Content Bg Color
*/
td.miscellaneous-10 td.schedule-row-3 td.content-bg {
  /*@editable*/background-color:#f9fafc !important;
}
/**
* @tab miscellaneous-10
* @section Button
*/
td.miscellaneous-10 td.button-bg {
  /*@editable*/background-color:#000000 !important;
  /*@editable*/border-radius:0px !important;
}

/*//////////////////////////////////////// price-1 ////////////////////////////////////////*/
/**
* @tab price-1
* @section Module Background Color
*/
td.price-1 td.bg-color {
  /*@editable*/background-color:#333333 !important;
}
/**
* @tab price-1
* @section Space Control
*/
td.price-1 td.space-control {
  /*@editable*/height: 60px !important;
}
/**
* @tab price-1
* @section Background Image
*/
td.price-1 td.bg-image {
  /*@editable*/background-color: transparent !important;
  /*@editable*/background-image: url(https://www.psd2newsletters.com/templates/oxygen/img/price-1-back.jpg) !important;
  /*@editable*/background-repeat: no-repeat !important;
  /*@editable*/background-position: center !important;
  /*@editable*/background-size: cover !important;
}
/**
* @tab price-1
* @section Column Background Color
*/
td.price-1 td.column-bg-color {
  /*@editable*/background-color:#FFFFFF !important;
}
/**
* @tab price-1
* @section Buttons
*/
td.price-1 td.button-bg {
  /*@editable*/background-color:#ff0079 !important;
  /*@editable*/border-radius:0px !important;
}

/*//////////////////////////////////////// blog-4 ////////////////////////////////////////*/
/**
* @tab blog-4
* @section Module Background Color
*/
td.blog-4 td.bg-color {
  /*@editable*/background-color:#FFFFFF !important;
}
/**
* @tab blog-4
* @section Space Control
*/
td.blog-4 td.space-control {
  /*@editable*/height: 40px !important;
}

/*//////////////////////////////////////// brands-1 ////////////////////////////////////////*/
/**
* @tab brands-1
* @section Module Background Color
*/
td.brands-1 td.bg-color {
  /*@editable*/background-color:#333333 !important;
}
/**
* @tab brands-1
* @section Space Control
*/
td.brands-1 td.space-control {
  /*@editable*/height: 60px !important;
}
/**
* @tab brands-1
* @section Background Image
*/
td.brands-1 td.bg-image {
  /*@editable*/background-color: transparent !important;
  /*@editable*/background-image: url(https://www.psd2newsletters.com/templates/oxygen/img/brands-1-back.jpg) !important;
  /*@editable*/background-repeat: no-repeat !important;
  /*@editable*/background-position: center !important;
  /*@editable*/background-size: cover !important;
}

/*//////////////////////////////////////// miscellaneous-11 ////////////////////////////////////////*/
/**
* @tab miscellaneous-11
* @section Module Background Color
*/
td.miscellaneous-11 td.bg-color {
  /*@editable*/background-color:#f9fafc !important;
}
/**
* @tab miscellaneous-11
* @section Space Control
*/
td.miscellaneous-11 td.space-control {
  /*@editable*/height: 40px !important;
}
/**
* @tab miscellaneous-11
* @section Box 1 Background Color
*/
td.miscellaneous-11 td.bg-color-box-1 {
  /*@editable*/background-color:#FFFFFF !important;
}
/**
* @tab miscellaneous-11
* @section Box 2 Background Color
*/
td.miscellaneous-11 td.bg-color-box-2 {
  /*@editable*/background-color:#FFFFFF !important;
}
/**
* @tab miscellaneous-11
* @section Box 3 Background Color
*/
td.miscellaneous-11 td.bg-color-box-3 {
  /*@editable*/background-color:#FFFFFF !important;
}
/**
* @tab miscellaneous-11
* @section Button
*/
td.miscellaneous-11 td.button-bg {
  /*@editable*/background-color:#ff0079 !important;
  /*@editable*/border-radius:0px !important;
}

/*//////////////////////////////////////// unsubscribe-2 ////////////////////////////////////////*/
/**
* @tab unsubscribe-2
* @section Module Background Color
*/
td.unsubscribe-2 td.bg-color {
  /*@editable*/background-color:#1A1831 !important;
}
/**
* @tab unsubscribe-2
* @section Space Control
*/
td.unsubscribe-2 td.space-control {
  /*@editable*/height: 40px !important;
}

</style>
</head>

<body id='body' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' bgcolor='#F4F4F4'>

 
<!--[if !gte mso 9]><!----><span class='mcnPreviewText' style='display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;'></span><!--<![endif]--> 



<!-- Header after CSS -->

<!-- header-7 -->

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' mc:repeatable='psd2newsletters' mc:variant='header-7'     style='width:100%;max-width:100%;'>
  <tr>
    <td class='header-7' align='center' valign='top'>

<!-- body-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='body-bg-color' align='center' valign='top'    bgcolor='#F4F4F4'>

<!-- bg-color -->
<table border='0' width='800' align='center' cellpadding='0' cellspacing='0' class='row' style='width:800px;max-width:800px;'>
  <tr>
    <td class='bg-color' align='center' valign='top'    bgcolor='#381C7F'>



<!-- header-7-bg-image -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='bg-image' align='center' valign='top' background='https://www.psd2newsletters.com/templates/oxygen/img/header-7-back.jpg'   style='background-size:cover;background-position:center top;'>

<!-- container -->
<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:600px;max-width:600px;'>
  <tr>
    <td align='center' valign='top' class='container-padding'>

<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='20'></td>
  </tr>
</table>
<!-- space -->

<!-- container-2-columns -->
<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:600px;max-width:600px;'>
  <tr>
    <td align='center' valign='middle'>

<!--[if (gte mso 9)|(IE)]><table border='0' cellpadding='0' cellspacing='0'><tr><td valign='middle'><![endif]-->

<!-- column -->
<table width='330' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:330px;max-width:330px;'>
  <tr>
    <td align='center' valign='middle'>
<!-- tel+email -->
<table border='0' width='100%' cellpadding='0' cellspacing='0' align='center' class='row' style='width:100%; max-width:100%;'>
  <tr>
    <td valign='middle' align='center'>
      <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float'>
        <tr>
          <td valign='middle' align='left' height='26' mc:edit='mod-header-7-phone-number'     style='font-family: Montserrat, Arial, sans-serif;font-size:12px;line-height:26px;font-weight:normal;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;'>
            
            <a class='phone-number' href='#' style='color:#FFFFFF;'><strong>Ola, Cristiano Gomes de mattos</strong></a> 
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>

    </td>
  </tr>
</table>

<table width='10' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:10px;max-width:10px;'>
  <tr>
    <td valign='middle' align='center' height='20' style='font-size:20px;line-height:20px;'></td>
  </tr>
</table>

<table width='260' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:260px;max-width:260px;'>
  <tr>
    <td align='center' valign='middle'>
<!-- Socials -->
<table border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr>
    <td valign='middle' align='center'>

      <table border='0' cellpadding='0' cellspacing='0' align='right' class='center-float'>
        <tr>
          <td valign='middle' align='center' height='26'> 

            <table mc:repeatable  border='0' cellpadding='0' cellspacing='0' style='display:inline-block;vertical-align:middle;'>
              <tr>
                <td align='center' valign='middle' width='28' class='img16'><img style='display:block;width:100%;max-width:16px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/facebook-wh.png' width='16' mc:edit='mod-header-7-facebook' border='0'   alt='facebook'></td>
              </tr>
            </table>
<!--[if (gte mso 9)|(IE)]></td><td valign='middle'><![endif]-->
            <table mc:repeatable  border='0' cellpadding='0' cellspacing='0' style='display:inline-block;vertical-align:middle;'>
              <tr>
                <td align='center' valign='middle' width='28' class='img16'><img style='display:block;width:100%;max-width:16px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/twitter-wh.png' width='16' mc:edit='mod-header-7-twitter' border='0'   alt='twitter'></td>
              </tr>
            </table>
<!--[if (gte mso 9)|(IE)]></td><td valign='middle'><![endif]-->
            <table mc:repeatable  border='0' cellpadding='0' cellspacing='0' style='display:inline-block;vertical-align:middle;'>
              <tr>
                <td align='center' valign='middle' width='28' class='img16'><img style='display:block;width:100%;max-width:16px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/instagram-wh.png' width='16' mc:edit='mod-header-7-instagram' border='0'   alt='instagram'></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>
    </td>
  </tr>
</table>


    </td>
  </tr>
</table>

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='20'></td>
  </tr>
</table>
<!-- space -->

    </td>
  </tr>
</table>

<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:600px;max-width:600px;'>
  <tr>
    <td align='center' valign='top' class='container-padding'>

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='space-control-1' valign='middle' align='center' height='20'   ></td>
  </tr>
</table>

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='mobile-padding' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='middle' height='50'>


<table width='200' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:200px;max-width:200px;'>
  <tr>
    <td align='center' valign='middle' height='50'>
      <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float'>
        <tr>
          <td valign='middle' align='center' class='img150'><img style='display:block;width:100%;max-width:150px;border:0px;' src='https://rmluxury.com.br/wp-content/uploads/logo_2_rm_luxury_branco_logotipo-design-3.png' width='180' mc:edit='mod-header-7-logo' border='0'   alt='logo'></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!-- column -->

<!--[if (gte mso 9)|(IE)]></td><td valign='top'><![endif]-->

<!-- gap -->
<table width='10' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:10px;max-width:10px;'>
  <tr>
    <td valign='middle' align='center' height='20' style='font-size:20px;line-height:20px;'></td>
  </tr>
</table>

<table width='5' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:5px;max-width:5px;'>
  <tr>
    <td valign='middle' align='center' height='20' style='font-size:20px;line-height:20px;'></td>
  </tr>
</table>

<table mc:repeatable  border='0' cellpadding='0' cellspacing='0' align='right' class='center-float' style='display:inline-block;vertical-align:middle;'>
  <tr>
    <td align='center' valign='middle' height='50'>
<table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
  <tr>
    <td class='button-bg-1' valign='middle' align='center'    bgcolor='#00c1c1' style='border-radius: 0px;'>
    <!-- Btn -->
    <table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
      <tr>
        <td colspan='3' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
      </tr>
      <tr>
        <td width='16'></td>
        <td valign='middle' align='center' mc:edit='mod-header-7-btn-1'     style='font-family: Montserrat, Arial, sans-serif;font-size:13px;line-height:13px;font-weight:bolder;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;'>
            
              <a href='#' target='_blank' style='color: #FFFFFF;'>A Melhor do Brasil</a>
            
        </td>
        <td width='16'></td>
      </tr>
      <tr>
        <td colspan='3' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
      </tr>
    </table>
    
    </td>
  </tr>
</table>

    </td>
  </tr>
</table>


    </td>
  </tr>
</table>

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='space-control-2' valign='middle' align='center' height='80'   ></td>
  </tr>
</table>
<!-- space-control-2 -->

<!-- subtitle -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='subtitle center-text' mc:edit='mod-header-7-subtitle'     valign='middle' align='left' style='font-family:Arial,Helvetica,sans-serif; font-size:18px; line-height:24px; font-weight:normal;font-style:normal; color:#FFFFFF;text-decoration:none;letter-spacing: 0px;'>
       
<h4 class='color:#FFFFFF'>        Parabéns você faz parte da
</h4>      
    </td>
  </tr>
</table>
<!-- subtitle -->

<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->

<!-- title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='title center-text' mc:edit='mod-header-7-title'     valign='middle' align='left' style='font-family:Arial,Helvetica,sans-serif; font-size:36px; line-height:42px; font-weight:bolder;font-style:normal; color:#FFFFFF;text-decoration:none;letter-spacing: 0px;'>
       
        FAMILIA R&M LUXURY
      
    </td>
  </tr>
</table>
<!-- title -->

<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->

<!-- row -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td valign='middle' align='center'>
<!-- text -->
<table mc:repeatable  border='0' width='480' cellpadding='0' cellspacing='0' align='left' class='row' style='width:480px; max-width:480px;'>
  <tr> 
    <td class='text center-text' mc:edit='mod-header-7-text' valign='middle' align='left' style='font-family:Arial,Helvetica,sans-serif; font-size:13px; line-height:23px; font-weight:normal;font-style:normal; color:#FFFFFF;text-decoration:none;letter-spacing: 0px;'>
      
        Informamos que seu backoffice foi APROVADO, você já pode acessar seu backoffice e desfrutar das varias opções de investimentos que a R&M Luxury tem especialmente para você.
      
    </td>
  </tr>
</table>
<!-- text -->
    </td>
  </tr>
</table>
<!-- row -->

<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='30'>&nbsp;</td>
  </tr>
</table>
<!-- space -->

<!-- Buttons-Container -->
<table border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr>
    <td align='center' valign='middle'>

<!-- Button-Bg -->
<table mc:repeatable  border='0' cellpadding='0' cellspacing='0' align='left' class='center-float'>
  <tr>
    <td align='center' valign='top'>
<!-- Container -->
<table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
  <tr>
    <td class='button-bg-2' valign='middle' align='center'    bgcolor='#ff0079' style='border-radius: 0px;'>
    <!-- Btn -->
    <table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
      <tr>
        <td colspan='5' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
      </tr>
      <tr>
        <td width='20'></td>
        <td valign='middle' align='center' mc:edit='mod-header-7-btn-2'     style='font-family:Arial,Helvetica,sans-serif;font-size:16px;line-height:24px;font-weight:bolder;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;'>
          
              <a href='#' target='_blank' style='color:#FFFFFF;'>Agora eu sou R&M Luxury!</a>
            
        </td>
        <td width='10'></td>
        <td valign='middle' align='center' class='img8'><img style='display:block;width:100%;max-width:8px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/right-arrow-wh.png' width='8' mc:edit='mod-header-7-arrow-icon' border='0'   alt='arrow-icon'></td>
        <td width='20'></td>
      </tr>
      <tr>
        <td colspan='5' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
      </tr>
    </table>
    <!-- Btn -->
    </td>
  </tr>
</table>
<!-- Container -->
    </td>
  </tr>
</table>
<!-- Button-Bg -->

    </td>
  </tr>
</table>
<!-- Buttons-Container -->

<!-- space-control-3 -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='space-control-3' valign='middle' align='center' height='40'   ></td>
  </tr>
</table>
<!-- space-control-3 -->

    </td>
  </tr>
</table>
<!-- container -->

<!-- shape-devider -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='middle'>
      <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float'>
        <tr>
          <td valign='middle' align='center' class='img800'><img style='display:block;width:100%;max-width:800px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/shape-devider-5.png' width='800' mc:edit='mod-header-7-shape-devider' border='0'   alt='shape-devider'></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!-- shape-devider -->

    </td>
  </tr>
</table>
<!-- header-7-bg-image -->

<!--[if (gte mso 9)|(IE)]></v:textbox></v:rect><![endif]-->

    </td>
  </tr>
</table>
<!-- bg-color -->

    </td>
  </tr>
</table>
<!-- body-bg-color -->

    </td>
  </tr>
</table>

<!-- header-7 -->

<!-- features-3 -->

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' mc:repeatable='psd2newsletters' mc:variant='features-3'     style='width:100%;max-width:100%;'>
  <tr>
    <td class='features-3' align='center' valign='top'>

<!-- body-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='body-bg-color' align='center' valign='top'    bgcolor='#F4F4F4'>

<!-- bg-color -->
<table border='0' width='800' align='center' cellpadding='0' cellspacing='0' class='row' style='width:800px;max-width:800px;'>
  <tr>
    <td class='bg-color' align='center' valign='top'    bgcolor='#f9fafc'>

<!-- container -->
<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:600px;max-width:600px;'>
  <tr>
    <td align='center' valign='top' class='container-padding'>

<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='space-control' valign='middle' align='center' height='20'   >&nbsp;</td>
  </tr>
</table>
<!-- space -->

<!-- container -->
<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:600px;max-width:600px;'>
  <tr>
    <td align='center' valign='top'>
<!-- subtitle -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='subtitle center-text' mc:edit='mod-features-3-subtitle'     valign='middle' align='left' style='font-family: Montserrat, Arial, sans-serif; font-size:14px; line-height:28px; font-weight:normal;font-style:normal; color:#333333;text-decoration:none;letter-spacing: 0px;'>
      
        CADASTRO REALIZADO COM SUCESSO!
      
    </td>
  </tr>
</table>
<!-- subtitle -->
<!-- title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='title center-text' mc:edit='mod-features-3-title'     valign='middle' align='left' style='font-family: Montserrat, Arial, sans-serif; font-size:28px; line-height:32px; font-weight:bolder;font-style:normal; color:#ff0079;text-decoration:none;letter-spacing: 0px;'>
      
        Seja Bem Vindo(a)
      
    </td>
  </tr>
</table>
<!-- title -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- text -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='text center-text' mc:edit='mod-features-3-text'     valign='middle' align='left' style='font-family:Helvetica,Arial,sans-serif; font-size:13px; line-height:23px; font-weight:normal;font-style:normal; color:#333333;text-decoration:none;letter-spacing: 0px;'>
      
        Você sabia que a R&M Luxury é hoje a maior distribuidora de Semijoias do Mercosul, e devemos tudo isso a vocês investidores, que fazerm da R&M cada dia maior, seu investimento se transforma em mais produtos, que são vendidos ou exportados para Argentina - Uruguai & Paraguai. 
      
    </td>
  </tr>
</table>
<!-- text -->
    </td>
  </tr>
</table>
<!-- container -->

<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='20'>&nbsp;</td>
  </tr>
</table>
<!-- space -->

<!-- container-2-columns -->
<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:600px;max-width:600px;'>
  <tr>
    <td align='center' valign='top'>

<!--[if (gte mso 9)|(IE)]><table border='0' cellpadding='0' cellspacing='0'><tr><td valign='top'><![endif]-->

<!-- column -->
<table width='290' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:290px;max-width:290px;'>
  <tr>
    <td align='center' valign='middle'>
<!-- container -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='top' height='560' class='autoheight'>
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->

<!-- row -->
<table mc:repeatable  width='290' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:290px;max-width:290px;'>
  <tr>
    <td class='bg-color-box-1 container-padding' align='center' valign='top'  bgcolor='#FFFFFF' style='box-shadow: 0 20px 25px 0 rgba(0,0,0,.08);'>
<!-- container -->
<table width='260' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:260px;max-width:260px;'>
  <tr>
    <td align='center' valign='top'>
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- icon-title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr>
    <td align='center' valign='middle'>
      <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float'>
        <tr> 
          <td align='center' valign='top'>
            <!--[if (gte mso 9)|(IE)]><table border='0' cellpadding='0' cellspacing='0'><tr><td valign='middle'><![endif]-->
            <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float' style='display:inline-block;vertical-align:middle;'>
              <tr> 
                <td align='center' valign='top' width='32' height='32' class='img32'><img style='display:block;width:100%;max-width:32px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/share-grey.png' width='32' mc:edit='mod-features-3-icon-1' border='0'   alt='icon'>
                </td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]></td><td valign='middle'><![endif]-->
            <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float' style='display:inline-block;vertical-align:middle;'>
              <tr>
                <td width='10'></td>
                <td height='32' class='title center-text' mc:edit='mod-features-3-title-1'     valign='middle' align='left' style='font-family: Montserrat, Arial, sans-serif; font-size:18px; line-height:21px; font-weight:bolder;font-style:normal; color:#ff0079;text-decoration:none;letter-spacing: 0px;'> Dados de Acesso</td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!-- icon-title -->

<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- text -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='text center-text' mc:edit='mod-features-3-text-1'     valign='middle' align='left' style='font-family: Arial, sans-serif; font-size:13px; line-height:21px; font-weight:normal;font-style:normal; color:#333333;text-decoration:none;letter-spacing: 0px;'> Usuario: $username<br> Senha: $password</td>
  </tr>
</table>
<!-- text -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
    </td>
  </tr>
</table>
<!-- container -->
    </td>
  </tr>
  <tr>
    <td valign='middle' align='center' height='40'>&nbsp;</td>
  </tr>
</table>
<!-- row -->

<!-- row -->
<table mc:repeatable  width='290' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:290px;max-width:290px;'>
  <tr>
    <td class='bg-color-box-2 container-padding' align='center' valign='top'  bgcolor='#FFFFFF' style='box-shadow: 0 20px 25px 0 rgba(0,0,0,.08);'>
<!-- container -->
<table width='260' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:260px;max-width:260px;'>
  <tr>
    <td align='center' valign='top'>
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- icon-title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr>
    <td align='center' valign='middle'>
      <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float'>
        <tr> 
          <td align='center' valign='top'>
            <!--[if (gte mso 9)|(IE)]><table border='0' cellpadding='0' cellspacing='0'><tr><td valign='middle'><![endif]-->
            <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float' style='display:inline-block;vertical-align:middle;'>
              <tr> 
                <td align='center' valign='top' width='32' height='32' class='img32'><img style='display:block;width:100%;max-width:32px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/team-grey.png' width='32' mc:edit='mod-features-3-icon-2' border='0'   alt='icon'>
                </td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]></td><td valign='middle'><![endif]-->
            <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float' style='display:inline-block;vertical-align:middle;'>
              <tr>
                <td width='10'></td>
                <td height='32' class='title center-text' mc:edit='mod-features-3-title-2'     valign='middle' align='left' style='font-family: Montserrat, Arial, sans-serif; font-size:18px; line-height:21px; font-weight:bolder;font-style:normal; color:#ff0079;text-decoration:none;letter-spacing: 0px;'> Meu Link Indicação</td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!-- icon-title -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- text -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='text center-text' mc:edit='mod-features-3-text-2'     valign='middle' align='left' style='font-family: Montserrat, Arial, sans-serif; font-size:13px; line-height:21px; font-weight:normal;font-style:normal; color:#333333;text-decoration:none;letter-spacing: 0px;'>
      
        <textarea style='width:100%;'>https://rmluxury.com.br/backoffice/cadastro.php?ref=$username</textarea>
      
    </td>
  </tr>
</table>
<!-- text -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
    </td>
  </tr>
</table>
<!-- container -->
    </td>
  </tr>
  <tr>
    <td valign='middle' align='center' height='40'>&nbsp;</td>
  </tr>
</table>
<!-- row -->

<!-- row -->
<table mc:repeatable  width='290' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:290px;max-width:290px;'>
  <tr>
    <td class='bg-color-box-2 container-padding' align='center' valign='top'  bgcolor='#FFFFFF' style='box-shadow: 0 20px 25px 0 rgba(0,0,0,.08);'>
<!-- container -->
<table width='260' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:260px;max-width:260px;'>
  <tr>
    <td align='center' valign='top'>
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- icon-title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr>
    <td align='center' valign='middle'>
      <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float'>
        <tr> 
          <td align='center' valign='top'>
            <!--[if (gte mso 9)|(IE)]><table border='0' cellpadding='0' cellspacing='0'><tr><td valign='middle'><![endif]-->
            <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float' style='display:inline-block;vertical-align:middle;'>
              <tr> 
                <td align='center' valign='top' width='32' height='32' class='img32'><img style='display:block;width:100%;max-width:32px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/microphone-grey.png' width='32' mc:edit='mod-features-3-icon-3' border='0'   alt='icon'>
                </td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]></td><td valign='middle'><![endif]-->
            <table border='0' cellpadding='0' cellspacing='0' align='left' class='center-float' style='display:inline-block;vertical-align:middle;'>
              <tr>
                <td width='10'></td>
                <td height='32' class='title center-text' mc:edit='mod-features-3-title-3'     valign='middle' align='left' style='font-family: Montserrat, Arial, sans-serif; font-size:18px; line-height:21px; font-weight:bolder;font-style:normal; color:#ff0079;text-decoration:none;letter-spacing: 0px;'> Ganhos Por Indicação</td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!-- icon-title -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- text -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='text center-text' mc:edit='mod-features-3-text-3'     valign='middle' align='left' style='font-family: Arial, sans-serif; font-size:13px; line-height:21px; font-weight:normal;font-style:normal; color:#333333;text-decoration:none;letter-spacing: 0px;'>
      
        <strong class='title center-text'>1º NIvel:</strong> 10%<br>
<strong>2º NIvel:</strong> 2%<br>
		<strong>3º NIvel:</strong> 1%<br>
		<strong>4º NIvel:</strong> 1%<br>
		<strong>5º NIvel:</strong> 1%<br>
      
    </td>
  </tr>
</table>
<!-- text -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
    </td>
  </tr>
</table>
<!-- container -->
    </td>
  </tr>
  <tr>
    <td valign='middle' align='center' height='40'>&nbsp;</td>
  </tr>
</table>
<!-- row -->

<!-- Buttons-Container -->
<table border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr>
    <td align='center' valign='middle'>

<!-- Button-Bg -->
<table mc:repeatable  border='0' cellpadding='0' cellspacing='0' align='left' class='center-float'>
  <tr>
    <td align='center' valign='top'>
<!-- Container -->
<table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
  <tr>
    <td class='button-bg' valign='middle' align='center'    bgcolor='#ff0079' style='border-radius: 0px;'>
    <!-- Btn -->
    <table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
      <tr>
        <td colspan='5' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
      </tr>
      <tr>
        <td width='20'></td>
        <td valign='middle' align='center' mc:edit='mod-features-3-btn-1'     style='font-family:Montserrat, Arial, sans-serif;;font-size:16px;line-height:24px;font-weight:bolder;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;'>
          
              <a href='https://rmluxury.com.br/backoffice/' target='_blank' style='color:#FFFFFF;'>Acessar meu Painel de Controle</a>
            
        </td>
        <td width='10'></td>
        <td valign='middle' align='center' class='img8'><img style='display:block;width:100%;max-width:8px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/right-arrow-wh.png' width='8' mc:edit='mod-header-7-arrow-icon' border='0'   alt='arrow-icon'></td>
        <td width='20'></td>
      </tr>
      <tr>
        <td colspan='5' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
      </tr>
    </table>
    <!-- Btn -->
    </td>
  </tr>
</table>
<!-- Container -->
    </td>
  </tr>
</table>
<!-- Button-Bg -->

    </td>
  </tr>
</table>
<!-- Buttons-Container -->

    </td>
  </tr>
</table>
<!-- container -->
    </td>
  </tr>
</table>
<!-- column -->

<!--[if (gte mso 9)|(IE)]></td><td valign='top'><![endif]-->

<!-- gap -->
<table width='30' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:30px;max-width:30px;'>
  <tr>
    <td valign='middle' align='center' height='20'></td>
  </tr>
</table>
<!-- gap -->

<!--[if (gte mso 9)|(IE)]></td><td valign='top'><![endif]-->

<!-- column -->
<table width='280' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:280px;max-width:280px;'>
  <tr>
    <td align='center' valign='top'>
<!-- image-responsive -->
<table mc:repeatable  width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='top' class='img-responsive img280'>
      <img style='display:block;width:100%;max-width:280px;border:0px;' width='280' src='https://www.psd2newsletters.com/templates/oxygen/img/businessman.png' mc:edit='mod-features-3-pict-1' border='0'   alt='picture'>
    </td>
  </tr>
</table>
<!-- image-responsive -->
    </td>
  </tr>
</table>
<!-- column -->

<!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->

    </td>
  </tr>
</table>
<!-- container-2-columns -->

<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='space-control' valign='middle' align='center' height='20'   >&nbsp;</td>
  </tr>
</table>
<!-- space -->

    </td>
  </tr>
</table>
<!-- container -->

    </td>
  </tr>
</table>
<!-- bg-color -->

    </td>
  </tr>
</table>
<!-- body-bg-color -->

    </td>
  </tr>
</table>

<!-- features-3 -->

<!-- speakers-1 -->

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' mc:repeatable='psd2newsletters' mc:variant='speakers-1'     style='width:100%;max-width:100%;'>
  <tr>
    <td class='speakers-1' align='center' valign='top'>

<!-- body-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='body-bg-color' align='center' valign='top'    bgcolor='#F4F4F4'>

<!-- bg-color -->
<table border='0' width='800' align='center' cellpadding='0' cellspacing='0' class='row' style='width:800px;max-width:800px;'>
  <tr> </tr>
</table>
<!-- bg-color -->

    </td>
  </tr>
</table>
<!-- body-bg-color -->

    </td>
  </tr>
</table>

<!-- speakers-1 -->

<!-- miscellaneous-10 -->

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' mc:repeatable='psd2newsletters' mc:variant='miscellaneous-10'     style='width:100%;max-width:100%;'>
  <tr>
    <td class='miscellaneous-10' align='center' valign='top'>

<!-- body-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='body-bg-color' align='center' valign='top'    bgcolor='#F4F4F4'>

<!-- bg-color -->
<table border='0' width='800' align='center' cellpadding='0' cellspacing='0' class='row' style='width:800px;max-width:800px;'>
  <tr>
    <td class='bg-color' align='center' valign='top'    bgcolor='#333333'>

<!-- miscellaneous-10-outlook-windows -->
<!--[if (gte mso 9)|(IE)]>
<v:rect xmlns:v='urn:schemas-microsoft-com:vml' fill='true' stroke='false' style='width:800px;height:392px;'>
<v:fill type='frame' src='https://www.psd2newsletters.com/templates/oxygen/img/miscellaneous-10-back.jpg' color='#333333'/>
<v:textbox style='v-text-anchor:middle;' inset='0,0,0,0'>
<![endif]-->

<!-- miscellaneous-10-bg-image -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr> </tr>
</table>
<!-- miscellaneous-10-bg-image -->

<!--[if (gte mso 9)|(IE)]></v:textbox></v:rect><![endif]-->

    </td>
  </tr>
</table>
<!-- bg-color -->

    </td>
  </tr>
</table>
<!-- body-bg-color -->

    </td>
  </tr>
</table>

<!-- miscellaneous-10 -->

<!-- miscellaneous-11 -->

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' mc:repeatable='psd2newsletters' mc:variant='miscellaneous-11'     style='width:100%;max-width:100%;'>
  <tr>
    <td class='miscellaneous-11' align='center' valign='top'>

<!-- body-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='body-bg-color' align='center' valign='top'    bgcolor='#F4F4F4'>

<!-- bg-color -->
<table border='0' width='800' align='center' cellpadding='0' cellspacing='0' class='row' style='width:800px;max-width:800px;'>
  <tr>
    <td class='bg-color' align='center' valign='top'    bgcolor='#FFFFFF'>

<!-- container -->

<!-- row -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='12' style='font-size:12px;line-height:12px;'>&nbsp;</td>
  </tr>
</table>


<!-- row -->
<table mc:repeatable  width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:600px;max-width:600px;'>
  <tr>
    <td class='schedule-row-3' align='center' valign='top'>

<!--[if (gte mso 9)|(IE)]><table border='0' cellpadding='0' cellspacing='0'><tr><td valign='top'><![endif]-->

<!-- column -->

<!-- column -->

<!--[if (gte mso 9)|(IE)]></td><td valign='top'><![endif]-->

<!-- column -->
<table width='420' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:420px;max-width:420px;'>
  <tr>
    <td class='content-bg' align='center' valign='middle'  bgcolor='#f9fafc'>


<!-- gap -->
<table width='30' border='0' cellpadding='0' cellspacing='0' align='left' class='hide-mobile' style='width:30px;max-width:30px;'>
  <tr>
    <td valign='middle' align='center' height='30'></td>
  </tr>
</table>

<table width='390' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:390px;max-width:390px;'>
  <tr>
    <td align='center' valign='middle' height='200' class='autoheight container-padding'>

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>




<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' mc:repeatable='psd2newsletters' mc:variant='price-1'     style='width:100%;max-width:100%;'>
  <tr>
    <td class='price-1' align='center' valign='top'>

<!-- body-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='body-bg-color' align='center' valign='top'    bgcolor='#F4F4F4'>

<!-- bg-color -->
<table border='0' width='800' align='center' cellpadding='0' cellspacing='0' class='row' style='width:800px;max-width:800px;'>
  <tr>
    <td class='bg-color' align='center' valign='top'    bgcolor='#333333'>


<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='bg-image' align='center' valign='top' background='https://www.psd2newsletters.com/templates/oxygen/img/price-1-back.jpg'   style='background-size:cover;background-position:center top;'>

<!-- container -->
<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:600px;max-width:600px;'>
  <tr>
    <td align='center' valign='top' class='container-padding'>

<!-- space-control -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='space-control' valign='middle' align='center' height='60'   ></td>
  </tr>
</table>
<!-- space-control -->

<!-- container -->
<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:600px;max-width:600px;'>
  <tr>
    <td align='center' valign='top'>
<!-- subtitle -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='subtitle center-text' mc:edit='mod-price-1-subtitle'     valign='middle' align='left' style='font-family: Montserrat, Arial, sans-serif; font-size:14px; line-height:28px; font-weight:normal;font-style:normal; color:#FFFFFF;text-decoration:none;letter-spacing: 0px;'>
      
        PLANOS DE INVESTIMENTOS
      
    </td>
  </tr>
</table>
<!-- subtitle -->
<!-- title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='title center-text' mc:edit='mod-price-1-title'     valign='middle' align='left' style='font-family: Montserrat, Arial, sans-serif; font-size:28px; line-height:32px; font-weight:bolder;font-style:normal; color:#FFFFFF;text-decoration:none;letter-spacing: 0px;'>
        VAMOS SER PARCEIROS
    </td>
  </tr>
</table>
<!-- title -->
    </td>
  </tr>
</table>
<!-- container -->

<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='30'>&nbsp;</td>
  </tr>
</table>
<!-- space -->

<!-- container-3-columns -->
<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:600px;max-width:600px;'>
  <tr>
    <td align='center' valign='top'>

<!--[if (gte mso 9)|(IE)]><table border='0' cellpadding='0' cellspacing='0'><tr><td valign='top'><![endif]-->

<!-- column -->
<table width='180' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:180px;max-width:180px;'>
  <tr>
    <td valign='top' align='center'>
<!-- dots -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='middle' width='180' class='img180 img-responsive'>
      <img style='display:block;width:100%;max-width:180px;display:block;border:0px;' width='180' src='https://www.psd2newsletters.com/templates/oxygen/img/dots-top.png' mc:edit='mod-price-1-dots-top-1' border='0'   alt='picture'>
    </td>
  </tr>
</table>
<!-- dots -->
<!-- column-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='column-bg-color' valign='top' align='center'  bgcolor='#FFFFFF'>
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='title center-text' mc:edit='mod-price-1-title-1'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:18px; line-height:24px; font-weight:bolder;font-style:normal; color:#3b1d82;text-decoration:none;letter-spacing: 0px;'>
      
        BASICO
      
    </td>
  </tr>
</table>
<!-- title -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- price -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='price center-text' mc:edit='mod-price-1-price-1'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:64px; line-height:64px; font-weight:bolder;font-style:normal; color:#3b1d82;text-decoration:none;letter-spacing: 0px;'>
      
        <span style='font-size:32px;line-height:42px;display:inline-block;vertical-align:top;'>R$</span>99
      
    </td>
  </tr>
</table>
<!-- price -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='5' style='font-size:5px;line-height:5px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- sm-title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='sm-title center-text' mc:edit='mod-price-1-sm-title-1'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:12px; line-height:24px; font-weight:normal;font-style:normal; color:#000000;text-decoration:none;letter-spacing: 0px;'>
      
        Ganhos Diarios até 0.85%
      
    </td>
  </tr>
</table>
<!-- sm-title -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- count -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='count center-text' mc:edit='mod-price-1-count-1'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:21px; line-height:24px; font-weight:bolder;font-style:normal; color:#ff0079;text-decoration:none;letter-spacing: 0px;'>
      
        0,84
      
    </td>
  </tr>
</table>
<!-- count -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- text -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='text center-text' mc:edit='mod-price-1-text-1'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:12px; line-height:24px; font-weight:normal;font-style:normal; color:#ff0079;text-decoration:none;letter-spacing: 0px;'>
      
        Estimativa Diaria 
      
    </td>
  </tr>
</table>
<!-- text -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- Button-Bg -->
<table mc:repeatable  border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
  <tr>
    <td align='center' valign='top'>
<!-- Container -->
<table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
  <tr>
    <td class='button-bg' valign='middle' align='center'    bgcolor='#ff0079' style='border-radius: 0px;'>
    <!-- Btn -->
    <table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
      <tr>
        <td colspan='3' height='12' style='font-size:12px;line-height:12px;'>&nbsp;</td>
      </tr>
      <tr>
        <td width='14'></td>
        <td valign='middle' align='center' mc:edit='mod-price-1-btn-1'     style='font-family: Montserrat, Arial, sans-serif;font-size:12px;line-height:12px;font-weight:bolder;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;'>
            
              <a href='https://rmluxury.com.br/loja/pacotes/pacote-de-investimento-49-reais/' target='_blank' style='color: #FFFFFF;'>CONHECER PACOTE</a>
            
        </td>
        <td width='14'></td>
      </tr>
      <tr>
        <td colspan='3' height='12' style='font-size:12px;line-height:12px;'>&nbsp;</td>
      </tr>
    </table>
    <!-- Btn -->
    </td>
  </tr>
</table>
<!-- Container -->
    </td>
  </tr>
</table>
<!-- Button-Bg -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- vat -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='vat center-text' mc:edit='mod-price-1-vat-1'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:12px; line-height:24px; font-weight:normal;font-style:normal; color:#333333;text-decoration:none;letter-spacing: 0px;'>
      
        Ganhos Variáveis
      
    </td>
  </tr>
</table>
<!-- vat -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
    </td>
  </tr>
</table>
<!-- column-bg-color -->
<!-- dots -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='middle' width='180' class='img180 img-responsive'>
      <img style='display:block;width:100%;max-width:180px;display:block;border:0px;' width='180' src='https://www.psd2newsletters.com/templates/oxygen/img/dots-bottom.png' mc:edit='mod-price-1-dots-bottom-1' border='0'   alt='picture'>
    </td>
  </tr>
</table>
<!-- dots -->
    </td>
  </tr>
</table>
<!-- column -->

<!--[if (gte mso 9)|(IE)]></td><td valign='top'><![endif]-->

<!-- gap -->
<table width='30' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:30px;max-width:30px;'>
  <tr>
    <td valign='middle' align='center' height='30'></td>
  </tr>
</table>
<!-- gap -->

<!--[if (gte mso 9)|(IE)]></td><td valign='top'><![endif]-->

<!-- column -->
<table width='180' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:180px;max-width:180px;'>
  <tr>
    <td valign='top' align='center'>
<!-- dots -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='middle' width='180' class='img180 img-responsive'>
      <img style='display:block;width:100%;max-width:180px;display:block;border:0px;' width='180' src='https://www.psd2newsletters.com/templates/oxygen/img/dots-top.png' mc:edit='mod-price-1-dots-top-2' border='0'   alt='picture'>
    </td>
  </tr>
</table>
<!-- dots -->
<!-- column-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='column-bg-color' valign='top' align='center'  bgcolor='#FFFFFF'>
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='title center-text' mc:edit='mod-price-1-title-2'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:18px; line-height:24px; font-weight:bolder;font-style:normal; color:#3b1d82;text-decoration:none;letter-spacing: 0px;'>
      
        INTERMEDIARIO
      
    </td>
  </tr>
</table>
<!-- title -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- price -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='price center-text' mc:edit='mod-price-1-price-2'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:64px; line-height:64px; font-weight:bolder;font-style:normal; color:#3b1d82;text-decoration:none;letter-spacing: 0px;'>
      
        <span style='font-size:32px;line-height:42px;display:inline-block;vertical-align:top;'>R$</span>499
      
    </td>
  </tr>
</table>
<!-- price -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='5' style='font-size:5px;line-height:5px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- sm-title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='sm-title center-text' mc:edit='mod-price-1-sm-title-2'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:12px; line-height:24px; font-weight:normal;font-style:normal; color:#000000;text-decoration:none;letter-spacing: 0px;'>
      
        Ganhos Diarios até 0.85%      
    </td>
  </tr>
</table>
<!-- sm-title -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- count -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='count center-text' mc:edit='mod-price-1-count-2'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:21px; line-height:24px; font-weight:bolder;font-style:normal; color:#ff0079;text-decoration:none;letter-spacing: 0px;'> 4,24</td>
  </tr>
</table>
<!-- count -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- text -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='text center-text' mc:edit='mod-price-1-text-2'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:12px; line-height:24px; font-weight:normal;font-style:normal; color:#ff0079;text-decoration:none;letter-spacing: 0px;'>
      
        Estimativa Diaria 
      
    </td>
  </tr>
</table>
<!-- text -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- Button-Bg -->
<table mc:repeatable  border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
  <tr>
    <td align='center' valign='top'>
<!-- Container -->
<table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
  <tr>
    <td class='button-bg' valign='middle' align='center'    bgcolor='#ff0079' style='border-radius: 0px;'>
    <!-- Btn -->
    <table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
      <tr>
        <td colspan='3' height='12' style='font-size:12px;line-height:12px;'>&nbsp;</td>
      </tr>
      <tr>
        <td width='14'></td>
        <td valign='middle' align='center' mc:edit='mod-price-1-btn-2'     style='font-family: Montserrat, Arial, sans-serif;font-size:12px;line-height:12px;font-weight:bolder;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;'>
            
              <a href='https://rmluxury.com.br/loja/pacotes/pacote-de-investimento-499-reais-rmluxury/' target='_blank' style='color: #FFFFFF;'>CONHECER PACOTE</a>
            
        </td>
        <td width='14'></td>
      </tr>
      <tr>
        <td colspan='3' height='12' style='font-size:12px;line-height:12px;'>&nbsp;</td>
      </tr>
    </table>
    <!-- Btn -->
    </td>
  </tr>
</table>
<!-- Container -->
    </td>
  </tr>
</table>
<!-- Button-Bg -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- vat -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='vat center-text' mc:edit='mod-price-1-vat-2'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:12px; line-height:24px; font-weight:normal;font-style:normal; color:#333333;text-decoration:none;letter-spacing: 0px;'>
      
        Ganhos Variáveis
      
    </td>
  </tr>
</table>
<!-- vat -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
    </td>
  </tr>
</table>
<!-- column-bg-color -->
<!-- dots -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='middle' width='180' class='img180 img-responsive'>
      <img style='display:block;width:100%;max-width:180px;display:block;border:0px;' width='180' src='https://www.psd2newsletters.com/templates/oxygen/img/dots-bottom.png' mc:edit='mod-price-1-dots-bottom-2' border='0'   alt='picture'>
    </td>
  </tr>
</table>
<!-- dots -->
    </td>
  </tr>
</table>
<!-- column -->

<!--[if (gte mso 9)|(IE)]></td><td valign='top'><![endif]-->

<!-- gap -->
<table width='30' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:30px;max-width:30px;'>
  <tr>
    <td valign='middle' align='center' height='30'></td>
  </tr>
</table>
<!-- gap -->

<!--[if (gte mso 9)|(IE)]></td><td valign='top'><![endif]-->

<!-- column -->
<table width='180' border='0' cellpadding='0' cellspacing='0' align='left' class='row' style='width:180px;max-width:180px;'>
  <tr>
    <td valign='top' align='center'>
<!-- dots -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='middle' width='180' class='img180 img-responsive'>
      <img style='display:block;width:100%;max-width:180px;display:block;border:0px;' width='180' src='https://www.psd2newsletters.com/templates/oxygen/img/dots-top.png' mc:edit='mod-price-1-dots-top-3' border='0'   alt='picture'>
    </td>
  </tr>
</table>
<!-- dots -->
<!-- column-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='column-bg-color' valign='top' align='center'  bgcolor='#FFFFFF'>
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='title center-text' mc:edit='mod-price-1-title-3'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:18px; line-height:24px; font-weight:bolder;font-style:normal; color:#3b1d82;text-decoration:none;letter-spacing: 0px;'> IDEAL</td>
  </tr>
</table>
<!-- title -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- price -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='price center-text' mc:edit='mod-price-1-price-3'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:64px; line-height:64px; font-weight:bolder;font-style:normal; color:#3b1d82;text-decoration:none;letter-spacing: 0px;'>
      
        <span style='font-size:32px;line-height:35px;display:inline-block;vertical-align:top;'></span>1199
      
    </td>
  </tr>
</table>
<!-- price -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='5' style='font-size:5px;line-height:5px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- sm-title -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='sm-title center-text' mc:edit='mod-price-1-sm-title-3'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:12px; line-height:24px; font-weight:normal;font-style:normal; color:#000000;text-decoration:none;letter-spacing: 0px;'>
      
        Ganhos Diarios até 0.85%      
      
    </td>
  </tr>
</table>
<!-- sm-title -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- count -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='count center-text' mc:edit='mod-price-1-count-3'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:21px; line-height:24px; font-weight:bolder;font-style:normal; color:#ff0079;text-decoration:none;letter-spacing: 0px;'>
      
10,19      
    </td>
  </tr>
</table>
<!-- count -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- text -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='text center-text' mc:edit='mod-price-1-text-3'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:12px; line-height:24px; font-weight:normal;font-style:normal; color:#ff0079;text-decoration:none;letter-spacing: 0px;'>
      
        Estimativa Diaria 
      
    </td>
  </tr>
</table>
<!-- text -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- Button-Bg -->
<table mc:repeatable  border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
  <tr>
    <td align='center' valign='top'>
<!-- Container -->
<table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
  <tr>
    <td class='button-bg' valign='middle' align='center'    bgcolor='#ff0079' style='border-radius: 0px;'>
    <!-- Btn -->
    <table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
      <tr>
        <td colspan='3' height='12' style='font-size:12px;line-height:12px;'>&nbsp;</td>
      </tr>
      <tr>
        <td width='14'></td>
        <td valign='middle' align='center' mc:edit='mod-price-1-btn-3'     style='font-family: Montserrat, Arial, sans-serif;font-size:12px;line-height:12px;font-weight:bolder;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;'>
            
              <a href='https://rmluxury.com.br/loja/pacotes/pacote-de-investimentos-1199-reais/' target='_blank' style='color: #FFFFFF;'>CONHECER PACOTE</a>
            
        </td>
        <td width='14'></td>
      </tr>
      <tr>
        <td colspan='3' height='12' style='font-size:12px;line-height:12px;'>&nbsp;</td>
      </tr>
    </table>
    <!-- Btn -->
    </td>
  </tr>
</table>
<!-- Container -->
    </td>
  </tr>
</table>
<!-- Button-Bg -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='10' style='font-size:10px;line-height:10px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
<!-- vat -->
<table mc:repeatable  border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr> 
    <td class='vat center-text' mc:edit='mod-price-1-vat-3'     valign='middle' align='center' style='font-family: Montserrat, Arial, sans-serif; font-size:12px; line-height:24px; font-weight:normal;font-style:normal; color:#333333;text-decoration:none;letter-spacing: 0px;'>
      
        Ganhos Variáveis
      
    </td>
  </tr>
</table>
<!-- vat -->
<!-- space -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='15' style='font-size:15px;line-height:15px;'>&nbsp;</td>
  </tr>
</table>
<!-- space -->
    </td>
  </tr>
</table>
<!-- column-bg-color -->
<!-- dots -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='middle' width='180' class='img180 img-responsive'>
      <img style='display:block;width:100%;max-width:180px;display:block;border:0px;' width='180' src='https://www.psd2newsletters.com/templates/oxygen/img/dots-bottom.png' mc:edit='mod-price-1-dots-bottom-3' border='0'   alt='picture'>
    </td>
  </tr>
</table>
<!-- dots -->
    </td>
  </tr>
</table>
<!-- column -->

<!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->

    </td>
  </tr>
</table>
<!-- container-3-columns -->

<!-- space-control -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='space-control' valign='middle' align='center' height='60'   ></td>
  </tr>
</table>
<!-- space-control -->

    </td>
  </tr>
</table>
<!-- container -->

    </td>
  </tr>
</table>
<!-- price-1-bg-image -->

<!--[if (gte mso 9)|(IE)]></v:textbox></v:rect><![endif]-->

    </td>
  </tr>
</table>
<!-- bg-color -->

    </td>
  </tr>
</table>
<!-- body-bg-color -->

    </td>
  </tr>
</table>

<!-- price-1 -->

<!-- blog-4 -->

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' mc:repeatable='psd2newsletters' mc:variant='blog-4'     style='width:100%;max-width:100%;'>
  <tr>
    <td class='blog-4' align='center' valign='top'>

<!-- body-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='body-bg-color' align='center' valign='top'    bgcolor='#F4F4F4'>

<!-- bg-color -->
<table border='0' width='800' align='center' cellpadding='0' cellspacing='0' class='row' style='width:800px;max-width:800px;'>
  <tr> </tr>
</table>
<!-- bg-color -->

    </td>
  </tr>
</table>
<!-- body-bg-color -->

    </td>
  </tr>
</table>

<!-- blog-4 -->

<!-- brands-1 -->

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' mc:repeatable='psd2newsletters' mc:variant='brands-1'     style='width:100%;max-width:100%;'>
  <tr>
    <td class='brands-1' align='center' valign='top'>

<!-- body-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='body-bg-color' align='center' valign='top'    bgcolor='#F4F4F4'>

<!-- bg-color -->
<table border='0' width='800' align='center' cellpadding='0' cellspacing='0' class='row' style='width:800px;max-width:800px;'>
  <tr>
    <td class='bg-color' align='center' valign='top'    bgcolor='#333333'>

<!-- brands-1-outlook-windows -->
<!--[if (gte mso 9)|(IE)]>
<v:rect xmlns:v='urn:schemas-microsoft-com:vml' fill='true' stroke='false' style='width:800px;height:290px;'>
<v:fill type='frame' src='https://www.psd2newsletters.com/templates/oxygen/img/brands-1-back.jpg' color='#333333'/>
<v:textbox style='v-text-anchor:middle;' inset='0,0,0,0'>
<![endif]-->

<!-- brands-1-bg-image -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr> </tr>
</table>
<!-- brands-1-bg-image -->

<!--[if (gte mso 9)|(IE)]></v:textbox></v:rect><![endif]-->

    </td>
  </tr>
</table>
<!-- bg-color -->

    </td>
  </tr>
</table>
<!-- body-bg-color -->

    </td>
  </tr>
</table>

<!-- brands-1 -->

<!-- miscellaneous-12 -->

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' mc:repeatable='psd2newsletters' mc:variant='miscellaneous-12'     style='width:100%;max-width:100%;'>
  <tr>
    <td class='miscellaneous-12' align='center' valign='top'>

<!-- body-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='body-bg-color' align='center' valign='top'    bgcolor='#F4F4F4'>

<!-- bg-color -->
<table border='0' width='800' align='center' cellpadding='0' cellspacing='0' class='row' style='width:800px;max-width:800px;'>
  <tr> </tr>
</table>
<!-- bg-color -->

    </td>
  </tr>
</table>
<!-- body-bg-color -->

    </td>
  </tr>
</table>

<!-- miscellaneous-12 -->

<!-- unsubscribe-2 -->

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' mc:repeatable='psd2newsletters' mc:variant='unsubscribe-2'     style='width:100%;max-width:100%;'>
  <tr>
    <td class='unsubscribe-2' align='center' valign='top'>

<!-- body-bg-color -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td class='body-bg-color' align='center' valign='top'    bgcolor='#F4F4F4'>

<!-- bg-color -->
<table border='0' width='800' align='center' cellpadding='0' cellspacing='0' class='row' style='width:800px;max-width:800px;'>
  <tr>
    <td class='bg-color' align='center' valign='top'    bgcolor='#1A1831'>

<!-- container -->
<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:600px;max-width:600px;'>
  <tr>
    <td align='center' valign='top'>

<!-- space-control -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='space-control' valign='middle' align='center' height='40'   ></td>
  </tr>
</table>
<!-- space-control -->

<!-- column -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='middle'>
      <table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
        <tr>
          <td valign='middle' align='center' class='img150'><img style='display:block;width:100%;max-width:150px;border:0px;' src='https://rmluxury.com.br/wp-content/uploads/logo_2_rm_luxury_branco_logotipo-design-3.png' width='150' mc:edit='mod-unsubscribe-2-logo' border='0'   alt='logo'></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!-- column -->

<!-- gap -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='20' style='font-size:20px;line-height:20px;'>&nbsp;</td>
  </tr>
</table>
<!-- gap -->

<!-- column -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='middle'>
<!-- Socials -->
<table border='0' width='100%' cellpadding='0' cellspacing='0' align='center' style='width:100%; max-width:100%;'>
  <tr>
    <td valign='middle' align='center'>

      <table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
        <tr>
          <td valign='middle' align='center' height='26'> 
<!--[if (gte mso 9)|(IE)]><table border='0' cellpadding='0' cellspacing='0'><tr><td valign='middle'><![endif]-->
            <table mc:repeatable  border='0' cellpadding='0' cellspacing='0' style='display:inline-block;vertical-align:middle;'>
              <tr>
                <td align='center' valign='middle' width='28' class='img16'><img style='display:block;width:100%;max-width:16px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/facebook-wh.png' width='16' mc:edit='mod-unsubscribe-2-facebook' border='0'   alt='facebook'></td>
              </tr>
            </table>

            <table mc:repeatable  border='0' cellpadding='0' cellspacing='0' style='display:inline-block;vertical-align:middle;'>
              <tr>
                <td align='center' valign='middle' width='28' class='img16'><img style='display:block;width:100%;max-width:16px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/twitter-wh.png' width='16' mc:edit='mod-unsubscribe-2-twitter' border='0'   alt='twitter'></td>
              </tr>
            </table>

            <table mc:repeatable  border='0' cellpadding='0' cellspacing='0' style='display:inline-block;vertical-align:middle;'>
              <tr>
                <td align='center' valign='middle' width='28' class='img16'><img style='display:block;width:100%;max-width:16px;border:0px;' src='https://www.psd2newsletters.com/templates/oxygen/img/instagram-wh.png' width='16' mc:edit='mod-unsubscribe-2-instagram' border='0'   alt='instagram'></td>
              </tr>
            </table>

          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>
<!-- Socials -->
    </td>
  </tr>
</table>
<!-- column -->

<!-- gap -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='20' style='font-size:20px;line-height:20px;'>&nbsp;</td>
  </tr>
</table>
<!-- gap -->

<!-- column -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr> 
    <td class='text center-text' mc:edit='mod-unsubscribe-2-text'     valign='middle' align='center' height='20' style='font-family:Arial,Helvetica,sans-serif; font-size:13px; line-height:16px; font-weight:normal;font-style:normal; color:#737d93;text-decoration:none;letter-spacing: 0px;'>
      
        Copyright © 2012 a 2019. Todos os Direitos Reservados.
      
    </td>
  </tr>
</table>
<!-- column -->

<!-- gap -->
<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td valign='middle' align='center' height='5' style='font-size:5px;line-height:5px;'>&nbsp;</td>
  </tr>
</table>
<!-- gap -->

<!-- Unsubscribe-Tags -->
<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='row' style='width:100%;max-width:100%;'>
  <tr>
    <td align='center' valign='top'>

  <table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
    <tr>
      <td class='center-float' valign='middle' align='left'>
        <!-- Mailchimp -->
        <table border='0' cellpadding='0' cellspacing='0' align='center' class='center-float'>
          <tr>
            <td class='unsubscribe' mc:edit='mod-unsubscribe-2' valign='middle' align='center' height='20' style='font-family: Montserrat, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:16px;color:#737d93;letter-spacing: 0px;'>Acesse nosso <a href='https://rmluxury.com.br' style='color:#ff0079;text-decoration:none; font-family:inherit;'>SITE</a> Agora mesmo
            </td>
          </tr>
        </table>

<table border='0' width='100%' align='center' cellpadding='0' cellspacing='0' style='width:100%;max-width:100%;'>
  <tr>
    <td class='space-control' valign='middle' align='center' height='40'   ></td>
  </tr>
</table>







"; // Aqui é a mensagem que você quer enviar. Pode digitar o que quiser
$headers .= "To:  <grupoashisa@gmail.com>" . "\r\n";  // Aqui é o cabeçalho do Email. Aqui aparece o nome e o email preechido no formulário
$headers .= "From: R&M Luxury <naoresponda@rmluxury.com.br>" . "\r\n"; // Aqui você pode colocar o seu email
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n"; // Aqui você nao muda nada
   
mail($email, $subject, $message, $headers); // Essa é a linha que faz a mágica toda :)
?>
</body>
</html>