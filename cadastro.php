<?php
if(!isset($_SESSION)){
    session_start();
}
include_once ("admin/site/mmn_db.php");

include_once ("admin/site/config.php");
?>
<!doctype html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/img/logo/applify-app-icon.png" rel="shortcut icon" type="image/x-icon" />
	<title>R&M Luxury Semijoias & Investimentos</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:600|Source+Sans+Pro:600,700" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/applify.min.css"/>
	<link href="dist/css/style5.min.css" rel="stylesheet">
	
</head>
<body class="ui-transparent-nav" data-fade_in="on-load">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146779877-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146779877-1');
</script>

	
	<!-- Navbar Fixed + Default -->
    <nav class="navbar navbar-fixed-top transparent navbar-light bg-white">
		<div class="container">
		
			<!-- Navbar Logo -->
			<a class="ui-variable-logo navbar-brand" href="#" title="R&M Luxury SemiJoias e Investimentos">
				<!-- Default Logo -->
				<img class="logo-default" src="assets/img/logo/applify-logo.png" alt="Logotipo da R&M Luxury Semijoias" data-uhd>
				<!-- Transparent Logo -->
				<img class="logo-transparent" src="assets/img/logo/applify-logo-white.png" alt="R&M Luxury SemiJoias e Investimentos" data-uhd>
			</a><!-- .navbar-brand -->

			<!-- Navbar Navigation -->
			<div class="ui-navigation navbar-right">
				<ul class="nav navbar-nav">
					<!-- Nav Item -->
					<li>
						<a href="#" data-scrollto="features">Sobre a R&M</a>
					</li>
					<!-- Nav Item -->
					<li>
						<a href="#" data-scrollto="video">Ganhos</a>
					</li>
                    <!-- Nav Item -->
					<li>
						<a href="#" data-scrollto="steps">Como funciona?</a>
					</li>
					<!-- Nav Item -->
					<li>
						<a href="#" data-scrollto="integrations">Integrate</a>
					</li>
                    <!-- Nav Item -->
					<li>
						<a href="#" data-scrollto="faq">Cadastre-se</a>
					</li>
                    <!-- Nav Item -->
					<li>
						<a href="#" data-scrollto="testimonials">Testemunhos</a>
					</li>
				</ul><!--.navbar-nav -->
			</div><!--.ui-navigation -->

			<!-- Navbar Button -->
			<a href="https://rmluxury.com.br/backoffice/cadastro2.php?ref=<?php if (isset($_SESSION['ref'])){ print $_SESSION['ref']; } ?>" class="btn btn-sm ui-gradient-green pull-right">Cadastro Simples </a>
			

			<!-- Navbar Toggle -->
			<a href="#" class="ui-mobile-nav-toggle pull-right"></a>

		</div><!-- .container -->
	</nav> <!-- nav -->
	
	<!-- Main Wrapper -->
    <div class="main" role="main">
    	
    	<!-- Hero Waves Center -->
		<div class="ui-hero hero-lg hero-center ui-gradient-blue ui-waves hero-svg-layer-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="heading">
                            N??s vamos mudar a sua Vida!
                        </h1>
                        <p class="paragraph">
                           Seja socio Investidor da Maior distribuidora de semijoias do Mercosul.
							
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
$msg=$msg."Nome de usu??rio - username - deve conter mais de 6 caracteres.<BR>";
$status= "NOTOK";}					

if(!ctype_alnum($username)){
$msg=$msg."Username deve conter apenas caracteres alfanum??ricos.<BR>";
$status= "NOTOK";}					


$rr=mysqli_query($con,"SELECT COUNT(*) FROM affiliateuser WHERE username = '$username'");
$r = mysqli_fetch_row($rr);
$nr = $r[0];
if($nr==1){
$msg=$msg."Este username j?? est?? registrado, tente outro.<BR>";
$status= "NOTOK";
}	

$rrr=mysqli_query($con,"SELECT COUNT(*) FROM affiliateuser WHERE mobile = '$mobile'");
$r3 = mysqli_fetch_row($rrr);
$nr3 = $r3[0];
if($nr3>0){
$msg=$msg."N??mero do celular/WhatsApp j?? registrado no sistema, tente outro.<BR>";
$status= "NOTOK";
}	

$remail=mysqli_query($con,"SELECT COUNT(*) FROM affiliateuser WHERE email = '$email'");
$re = mysqli_fetch_row($remail);
$nremail = $re[0];
if($nremail>0){
$msg=$msg."Este email j?? est?? registrado no sistema, tente outro.<BR>";
$status= "NOTOK";
}

$rcpf=mysqli_query($con,"SELECT COUNT(*) FROM affiliateuser WHERE cpf = '$cpf'");
$re = mysqli_fetch_row($rcpf);
$nrcpf = $re[0];
if($nrcpf>0){
$msg=$msg."Este CPF j?? est?? registrado no sistema. Cada usu??rio pode ter apenas 1 conta por CPF<BR>";
$status= "NOTOK";
}				

$result = mysqli_query($con,"SELECT count(*) FROM  affiliateuser where username = '$ref' AND active=1");
$row = mysqli_fetch_row($result);
$numrows = $row[0];
if ($numrows==0)
{
$msg=$msg."Seu indicador N??O est?? ativo, ou n??o existe no sistema.<BR>";
$status= "NOTOK";
}

if ( strlen($cpf) <> 11 ){
$msg=$msg."Informe seu CPF corretamente, ser?? necess??rio para sacar, coloque apenas n??meros, n??o use espa??os, nem sinais, ex.: 01234567890.<BR>";
$status= "NOTOK";}

if ( strlen($password) < 6 ){
$msg=$msg."A senha deve ter no m??nimo 6 d??gitos.<BR>";
$status= "NOTOK";}	

if ( strlen($mobile) > 12 ){
$msg=$msg."Coloque seu WhatsApp da maneira correta, DDD + n??mero, ex. 11988884444<BR>";
}

if ( strlen($email) < 1 ){
$msg=$msg."Coloque seu melhor email.<BR>";
$status= "NOTOK";}


if ( $password <> $password2 ){
$msg=$msg."As senhas n??o conferem, preste aten????o.<BR>";
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

print "<div class='gradient-green shadow-xl'><h2><strong class='close btn ui-gradient-blue shadow-xl'>Parab??ns seus Cadastro foi um Sucesso!</br></strong>Bem Vindo(a) R&M Luxury.<a href='login.php' class='btn ui-gradient-green shadow-xl'>ACESSAR MEU PAINEL DE CONTROLE</a></h2></div>";
}

else
{ 
print "
<div class='gradient-green shadow-xl'><button type='button' class='close btn ui-gradient-blue shadow-xl' data-dismiss='alert'>Opa! um erro foi detectado</button>
<i class='fa fa-ban-circle gradient-green shadow-xl'></i><strong>ERROS : </br></strong>".$msg."</div>";
}

}
?>

                        </p>
                        <div class="actions">
							
                            <a class="btn ui-gradient-primary shadow-xl" data-scrollto="features" href="#">CONFIAN??A + SEGURAN??A</a>
							<a class="btn ui-gradient-blue shadow-xl" data-scrollto="features" href="#">= </a>
				            <a class="btn ui-gradient-green shadow-xl" href="#">COMPROMISSO COM VOC??</a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <img src="assets/img/mockups/applify-mockup-1-lg.png" alt="Como ficar rico?" data-uhd data-max_width="740" class="responsive-on-md" />
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
		</div><!-- .ui-hero -->
   
   		<!-- Tabbed Showcase Section -->
   		<div id="features" class="section">
   			<div class="container">
   				<!-- Section Heading -->
   				<div class="section-heading center">
   					<h2 class="heading text-indigo">
   						Somos diferentes porque somos Transparentes
   					</h2>
   					<p class="paragraph">
   						Aqui n??o existe nada oculto, voc?? vai ser nosso parceiro, por que acredita na R&M e sabe cada passo que est?? tomando.
   					</p>
   				</div><!-- .section-heading -->
   				<!-- UI Tabbed Showcase -->
   				<div class="row ui-tabbed-showcase">
   				
   					<!-- Device Slider Column -->
   					<div class="col-md-6 col-sm-5 animate" data-show="fade-in-right">
   						<!-- Device Slider -->
   						<div class="ui-device-slider">
   							<!-- Device Image -->
   							<div class="device">
   								<img src="assets/img/device-slider/device.png" data-uhd alt="R&M Luxury SemiJoias e Investimentos" />
   							</div>
   							<!-- Slider Images -->
   							<div id="device-slider-2" class="screens owl-carousel owl-theme">
   								<div class="item">
   									<img src="assets/img/device-slider/app-screen-1.jpg" data-uhd alt="Confie na R&M Luxury" />	
   								</div>
   								<div class="item">
   									<img src="assets/img/device-slider/app-screen-8.jpg" data-uhd alt="Mercado Pago" />	
   								</div>
   								<div class="item">
   									<img src="assets/img/device-slider/app-screen-2.jpg" data-uhd alt="Nossos Produtos" />	
   								</div>
   								
   							</div>
   						</div><!-- .ui-device-slider -->
   					</div><!-- Device Slider Column -->
   					
   					<!-- Tabs Column -->
   					<div class="col-md-6 col-sm-6" data-vertical_center="true">
   						<!-- UI Tabs -->
   						<div class="ui-tabs ui-green">
   							<!-- Nav Tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<!-- Nav Tab 1 -->
								<li role="presentation" class="nav-item">
									<a class="nav-link active" href="#home" role="tab" data-toggle="tab" data-toggle_screen="1" data-toggle_slider="device-slider-2">
									<span class="icon icon-star"></span> Ganhos
									</a>
								</li>
								<!-- Nav Tab 2 -->
								<li role="presentation" class="nav-item">
									<a class="nav-link" href="#profile" role="tab" data-toggle="tab" data-toggle_screen="2" data-toggle_slider="device-slider-2">
										<span class="icon icon-credit-card"></span> Mercado Pago
									</a>
								</li>
								<!-- Nav Tab 3 -->
								<li role="presentation" class="nav-item">
									<a class="nav-link" href="#messages" role="tab" data-toggle="tab" data-toggle_screen="3" data-toggle_slider="device-slider-2">
										<span class="icon icon-present"></span> Produtos
									</a>
								</li>
								<!-- Nav Tab 4 -->
								
							</ul>

							<!-- Tab Panels -->
							<div class="tab-content">
								<!-- Tab 1 -->
								<div role="tabpanel" class="tab-pane fade show active" id="home">
									<p class="sub-heading">O seu Investimento n??o s?? vai te permitir fazer da sua vida financeira muito mais f??cil (r??pido), como tamb??m t??m outros incont??veis benef??cios, como.</p>
									<ul class="">
										<li>
											<h6 class="heading">Valores dispon??veis para sacar todos os meses
</h6>
										</li>
										<li>
											<h6 class="heading">Ganhos Di??rios at?? 0.85%</h6>
										</li>
										<li>
											<h6 class="heading">B??nus Indica????o at?? 5?? Nivel</h6>
										</li>
										<li>
											<h6 class="heading">Saques Ilimitados</h6>
										</li>
										<li>
											<h6 class="heading">Saque b??nus Semanalmente</h6>
										</li>
										<li>
											<h6 class="heading">Extrato Financeiro</h6>
										</li>
										<li>
											<h6 class="heading">Contrato 10 Meses</h6>
										</li>
										<li>
											<h6 class="heading">Conta Seguro 15% Junto ao Banco Central</h6>
										</li>
										<li>
											<h6 class="heading">Emitimos Nota Fiscal do Valor Investido</h6>
										</li>
									</ul>
								</div>
								<!-- Tab 2 -->
								<div role="tabpanel" class="tab-pane fade" id="profile">
									<p class="sub-heading">A R&M Possui contrato com Mercado pago, todos os investidores tem direito a ter uma conta digital e um cart??o de Cr??dito Pr??-pago onde ira receber seus ganhos na R&M Luxury</p>
									<ul class="icon icon-asterisk">
										<li>
											<h6 class="heading">Envie Dinheiro para qualquer Pessoa</h6>
										</li>
										<li>
											<h6 class="heading">Cart??o de Cr??dito Pr??-Pago Internacional</h6>
										</li>
										<li>
											<h6 class="heading">Sem anuidade nem tarifa de manuten????o.
</h6>										</li>
										<li>
											<h6 class="heading">Saques em lot??rias ou Caixa 24hs</h6>
										</li>
										<li>
											<h6 class="heading">Recarga Celular - Pagar Boletos</h6>
										</li>
										<li>
											<h6 class="heading">Sem Conta Banc??ria.</h6>
										</li>
										<li>
											<h6 class="heading">Recarga Bilhete Unico</h6>
										</li>
										
										<li>
											<h6 class="heading">Maquineta Cart??o de Cr??dito</h6>
										</li>
									</ul>
								</div>
								<!-- Tab 3 -->
								<div role="tabpanel" class="tab-pane fade" id="messages">
									<p class="sub-heading">A R&M ?? hoje a Maior distribuidora de Semijoias de Luxo do Mercosul. Todos os seus ganhos, vem das vendas e exporta????es da R&M, aqui voc?? n??o precisa indicar ningu??m</p>
									<ul class="icon icon-asterisk">
										<li>
											<h6 class="heading">Distribuidora de Grande porte Atacado</h6>
										</li>
										<li>
											<h6 class="heading">+ 10 Mil Revendedoras Consignado</h6>
										</li>
										<li>
											<h6 class="heading">2 Anos de Garantia</h6>
										</li>
										<li>
											<h6 class="heading">Folheado Ouro 18k - Ouro Ros?? - Prata & R??dio</h6>
										</li>
										<li>
											<h6 class="heading">Todas as Semijoias s??o Antial??rgicas
</h6>
										</li>
										<li>
											<h6 class="heading">Exportamos para Argentina - Uruguai & Paraguai</h6>
										</li>
										<li>
											<h6 class="heading">Distribu??mos mais de 1 Milh??o de pe??as todos os meses</h6>
										</li>
									</ul>
								</div>
								<!-- Tab 4 -->
								
							</div><!-- .tab-content -->
   						</div><!-- .ui-tabs -->
					  	
   					</div><!-- Tabs Column -->
   				</div><!-- .row -->
   			</div><!-- .container -->
   		</div><!-- .section -->
   			
   		<!-- Video Section -->
   		<div id="video" class="section bg-green ui-action-section">
   			<div class="container">
   				<div class="row">
   					<!-- Text Column -->
   					<div class="col-md-6 col-sm-7 text-block" data-vertical_center="true">
   						<!-- Section Heading -->
   						<div class="section-heading">
							<h2 class="heading">
								Comece hoje mesmo Ativa????o Imediata
							</h2>
							<p class="paragraph">
								A R&M Possui pacotes de investimentos a partir de R$ 49,99, comece com o que voc?? tem dispon??vel, sem prejudicar a sa??de financeira, voc?? pode realizar upgrade a qualquer momento.

							</p>
							
						</div><!-- .section-heading -->
   					</div>
   					<!-- Image Column -->
   					<div class="col-md-6 col-sm-5 img-block animate" data-show="fade-in-left">
   						<img src="assets/img/mockups/applify-mockup-3.png" alt="Conhe??a nossos pacotes de Investimentos" data-uhd class="responsive-on-sm" data-max_width="577" />
   					</div>
   				</div><!-- .row -->
   			</div><!-- .container -->
   		</div><!-- .section -->
        
        <!-- Process Section -->
   		<div id="steps" class="section">
   			<div class="container">
   				<!-- Section Heading -->
   				<div class="section-heading center">
   					<h2 class="heading text-indigo">
   						COMO FUNCIONA OS INVESTIMENTOS?
   					</h2>
   					<p class="paragraph">
   						Confira a trajet??ria do seu dinheiro at?? voltar para voc?? com alta margem de lucro.
   					</p>
   				</div><!-- .section-heading -->
                
   				<!-- UI Steps -->
                <div class="ui-showcase-blocks ui-steps">
                    <!-- Step 1 -->
                    <div class="step-wrapper">
                        <span class="step-number ui-gradient-green">1</span>
                        <div class="row">
                            <div class="col-md-6" data-vertical_center="true">
                                <h4 class="heading text-dark-gray">
	                                Cadastre-se e escolha um dos pacotes de Investimentos
                                </h4>
                                <p class="paragraph">
                                    Imagine que a R&M Luxury est?? tomando emprestado o seu dinheiro, devolvendo ele com juros muito al??m dos praticados no mercado, com a seguran??a e responsabilidade que voc?? merece. A R&M Investe seu dinheiro em mercadorias que posteriormente vai ser Exportada, vendido atacado, ou distribu??das para as mais de 10 mil revendedoras no consignado.
                                </p>
                                <a href="#" class="btn-link btn-arrow">+ 1.8 Milh??es de pe??as distribu??das por m??s</a>
                            </div>
                            <div class="col-md-6">
                                <img class="responsive-on-xs" src="assets/img/mockups/applify-mockup-7.png" data-uhd alt="Aprenda a Investir" data-max_width="464" />
                            </div>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="step-wrapper">
                        <span class="step-number ui-gradient-green">2</span>
                        <div class="row">
                            <div class="col-md-6" data-vertical_center="true">
                                <h4 class="heading text-dark-gray">
                                    Exemplo Simples de como seu Investimento se transforma em Ganhos.
                                </h4>
                                <p class="paragraph">
									 Investimento: R$ 1199,00<br>
Custo de fabrica????o: 20,00 / R$ 1000,00 = 50 Semijoias.<br>
 Valor de venda: R$ 100,00 x 50 Pe??as = 5.000,00<br>
Obs.: J?? ganhos 5x o valor Investido.<br>
<h5 class="heading text-dark-gray">
                                    Custos da R&M no M??s
                                </h5>

* Porcentagem referente a revendedora: R$ 1.750,00 (35%)<br>

* Valor a Reinvestir nas pe??as novamente: R$ 1.000,00<br>

* Pagamento dos seus Juros mensais: R$ 200,00 (Vari??vel)<br>

* Outros Gastos: R$ 350,00 (10%)<br>

R$:5.000,00 ??? 1750,00 ??? 1.000,00 ??? 200,00 ??? 350,00 = 1.700,00<br>
<h5 class="heading text-blue">
                                    Lucro L??quido da R&M: R$ 1.700,00
                                </h5>

                                   

                                </p>
                                <a href="#" class="btn-link btn-arrow">O Processo se repete M??s a M??s</a>
                            </div>
                            <div class="col-md-6">
                                <img class="responsive-on-xs" src="assets/img/mockups/applify-mockup-8.png" data-uhd alt="Investimentos com ganhos Diarios" data-max_width="445" />
                            </div>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="step-wrapper">
                        <span class="step-number ui-gradient-green">3</span>
                        <div class="row">
                            <div class="col-md-6" data-vertical_center="true">
                                <h4 class="heading text-dark-gray">
                                    Conhe??a seus ganhos e quando pode Sacar.
                                </h4>
                                <p class="paragraph">
                                    Voc?? vai receber seus dividendos todos os dias uteis de Segunda a Sexta Feira, os ganhos sobre o seu pacote de investimento pode ser sacado a cada 30 dias, mas voc?? pode sacar toda semana seus ganhos como b??nus de indica????o direto ou indireto.
                                </p>
								<h5 class="heading text-blue">
                                    Acompanhe em tempo real seus ganhos em seu backoffice
                                </h5>
                                <a href="#" class="btn-link btn-arrow">Voc?? est?? no melhor neg??cio da sua Vida!</a>
                            </div>
                            <div class="col-md-6">
                                <img class="responsive-on-xs" src="assets/img/mockups/applify-mockup-10.png" data-uhd alt="Aprenda como investir com seguran??a" data-max_width="451" />
                            </div>
                        </div>
                    </div>
                </div>
   			</div><!-- .container -->
   		</div><!-- .section -->
   			
        <!-- Call To Action Section -->
   		<div class="section bg-indigo ui-section-tilt ui-action-section">
   			<div class="container">
   				<div class="row">
   					<!-- Text Column -->
   					<div class="col-md-6 col-sm-7 text-block">
   						<!-- Section Heading -->
   						<div class="section-heading">
							<h2 class="heading">
								INVESTIMENTOS COM GANHOS DI??RIOS
							</h2>
							<p class="paragraph">
								Todos os dias voc?? vai receber uma porcentagem vari??vel referente ao seu investimento, a R&M Fecha o balan??o do dia tendo como base as Vendas no Consignado, Atacado, Distribuidora e exporta????es.<br>

							</p>
							<div class="actions">
								
								<a class="btn ui-gradient-green shadow-xl" href="#">Ganhos M??nimo: 0.55%</a>
								<a class="btn ui-gradient-blue shadow-xl" href="#">Ganhos M??ximo: 0.85%</a>
							</div>
						</div><!-- .section-heading -->
   					</div>
   					<!-- Image Column -->
   					<div class="col-md-6 col-sm-5 img-block animate" data-show="fade-in-left">
   						<img src="assets/demo/img/mockups/applify-mockup-2-lg.png" alt="Seus valores recebidos" data-uhd class="responsive-on-sm" data-max_width="547" />
   					</div>
   				</div><!-- .row -->
   			</div><!-- .container -->
   		</div><!-- .section -->
        
   		<!-- App Screens Section -->
		<div class="section">
   			<div class="container">
   				<!-- Dection Heading -->
   				<div class="section-heading center">
   					<h2 class="heading text-indigo">
   						Nossas Semijoias
   					</h2>
   					<p class="paragraph">
   						Nossos produtos s??o folheados a Ouro 18k ??? Ouro Ros?? ??? Prata 950 ??? R??dio. Todas as pe??as s??o antial??rgicas com garantia de 2 anos.
   					</p>
   				</div><!-- .section-heading -->
				<!-- App Screens Carousel -->
				<div class="ui-app-screens owl-carousel owl-theme animate" data-show="fade-in">
					<!-- App Screen 1 -->
					<div class="ui-card shadow-lg">
						<img src="assets/img/app-screens/1.jpg" alt="Fotos SemiJoias da R&M Luxury" data-uhd/>
					</div>
					<!-- App Screen 2 -->
					<div class="ui-card shadow-lg">
						<img src="assets/img/app-screens/2.jpg" alt="Fotos SemiJoias da R&M Luxury" data-uhd/>
					</div>
					<!-- App Screen 3 -->
					<div class="ui-card shadow-lg">
						<img src="assets/img/app-screens/3.jpg" alt="Fotos SemiJoias da R&M LuxuryFotos SemiJoias da R&M Luxury" data-uhd/>
					</div>
					<!-- App Screen 4 -->
					<div class="ui-card shadow-lg">
						<img src="assets/img/app-screens/4.jpg" alt="Semijoias R&M Luxury" data-uhd/>
					</div>
					<!-- App Screen 5 -->
					<div class="ui-card shadow-lg">
						<img src="assets/img/app-screens/5.jpg" alt="Fotos SemiJoias da R&M Luxury" data-uhd/>
					</div>
  					<!-- App Screen 6 -->
					<div class="ui-card shadow-lg">
						<img src="assets/img/app-screens/6.jpg" alt="Fotos SemiJoias da R&M Luxury" data-uhd/>
					</div>
					<!-- App Screen 8 -->
					<div class="ui-card shadow-lg">
						<img src="assets/img/app-screens/7.jpg" alt="Fotos SemiJoias da R&M Luxury" data-uhd/>
					</div>
					
					<div class="ui-card shadow-lg">
						<img src="assets/img/app-screens/9.jpg" alt="Fotos SemiJoias da R&M Luxury" data-uhd/>
					</div>
					<div class="ui-card shadow-lg">
						<img src="assets/img/app-screens/10.jpg" alt="Fotos SemiJoias da R&M Luxury" data-uhd/>
					</div>
					<div class="ui-card shadow-lg">
						<img src="assets/img/app-screens/11.jpg" alt="Fotos SemiJoias da R&M Luxury" data-uhd/>
					</div>
   				</div><!-- .ui-app-screens -->
   			</div><!-- .container -->
   		</div><!-- .section -->
   		
        <!-- Integration Section -->
   		<div id="integrations" class="section bg-green">
   			<div class="container">
   				<div class="row">
                    
   					<!-- Left Column -->
   					<div class="col-lg-4 col-xl-4" data-vertical_center="true">
                        
                        <!-- Section Heading -->
                        <div class="section-heading mb-2">
                            <h2 class="heading">
                                Por qu?? escolher a R&M Luxury?
                            </h2>
                            <p class="paragraph">
                                Voc?? sabia que a R&M Luxury? Movimenta por m??s mais de 1 Milh??o de produtos todos os meses.
                            </p>
                        </div><!-- .section-heading -->
                        
   						<!-- Left blocks -->
   						<ul class="ui-icon-blocks ui-blocks-v icons-sm">
   							<li class="ui-icon-block">
   								<span class="icon icon-diamond"></span>
   								<p class="">
   									N??o Depende de novos cadastros para pagar seus Investimentos</p>

   							</li>
							<li class="ui-icon-block">
   								<span class="icon icon-diamond"></span>
   								<p class="">
   									Seu Investimento vira Produto altamente vend??vel.</p>

   							</li>
							
							
							
							
							
   							
   						</ul>
   					</div>
                    
					<!-- Right Column -->
   					<div class="col-lg-9 col-xl-8">
   						
                        <!-- Logo Cloud -->
   						<div class="ui-logos-cloud">
							<div data-size="5" class="mt-0 animate" data-show="fade-in">
								<img src="assets/img/avatars/13.jpg" alt="R&M Luxury" />
							</div>
							<div data-size="10" class="mt-0 animate" data-show="fade-in">
								<img src="assets/img/avatars/09.jpg" alt="R&M SemiJoias de Luxo" />
							</div>
							<div data-size="7" class="mt-0 animate" data-show="fade-in">
								<img src="assets/img/avatars/07.jpg" alt="Seja um Lider de Lucesso" />
							</div>
							
                            
                            <!-- Flex Break -->
                            <span class="flex-break"></span>
                            
                            <div data-size="7" class="animate" data-show="fade-in">
								<img src="assets/img/avatars/17.jpg" alt="Trainamento Gratuito" />
							</div>
							<div data-size="10" class="animate" data-show="fade-in">
								<img src="assets/img/avatars/01.jpg" alt="Cdastre-se agora mesmo" />
							</div>
							<div data-size="4" class="animate" data-show="fade-in">
								<img src="assets/img/avatars/11.jpg" alt="Como Investir com seguran??a" />
							</div>
							<div data-size="6" class="animate" data-show="fade-in">
								<img src="assets/img/avatars/20.jpg" alt="Invista e dobre o seu Dinheiro" />
							</div>
							
                            
                            <!-- Flex Break -->
                            <span class="flex-break"></span>
                            
							<div data-size="8" class="animate" data-show="fade-in">
								<img src="assets/img/avatars/04.jpg" alt="A Maior Distribuidora do pais" />
							</div>
							<div data-size="3" class="animate" data-show="fade-in">
								<img src="assets/img/avatars/02.jpg" alt="Revenda Semijoias" />
							</div>
							<div data-size="10" class="animate" data-show="fade-in">
								<img src="assets/img/avatars/03.jpg" alt="R&M Luxury Investimentos" />
							</div>
							<div data-size="5" class="animate" data-show="fade-in">
								<img src="assets/img/avatars/05.jpg" alt="Como ficar rico" />
							</div>
                            
                            <!-- Flex Break -->
                            <span class="flex-break"></span>
                            
                            <div data-size="5" class="animate" data-show="fade-in">
								<img src="assets/img/avatars/a-4.png" alt="Aceitamos Mercado pago" />
							</div>
                            <div data-size="10" class="animate" data-show="fade-in">
								<img src="assets/img/avatars/10.jpg" alt="Investimentos com retorno garantido" />
							</div>
                            <div data-size="7" class="animate" data-show="fade-in">
								<img src="assets/img/avatars/12.jpg" alt="Como investir seu Dinheiro" />
							</div>
                            
                           
						</div><!-- .ui-logo-cloud  -->
                        
   					</div>
   				</div><!-- .row -->
   			</div><!-- .container -->
   		</div><!-- .section -->
        
        <!-- FAQ Section -->
   		<div id="faq" class="section bg-light">
   			<div class="container">
   				<div class="section-heading center">
   					<h2 class="heading text-indigo">
   						Fa??a parte da R&M Luxury Cadastre-se
   					</h2>
   					<p class="paragraph">
   						Voc?? j?? chegou at?? aqui, j?? sabe que a R&M ?? a empresa certa para voc??, conclua seu cadastro, e desfrute de ganhos di??rios.

						
   					</p>
   				</div><!-- .section-heading -->
   				<div class="row">
   					<div class="col-md-6" data-vertical_center="true">
   						<!-- Accordion -->
						<div class="ui-accordion-panel">  
							<!-- Accordion 1  -->
							<div class="ui-card shadow-sm ui-accordion  ">
								<h6 class="toggle  " data-toggle="accordion-one">1. Quais as Formas de Pagamento</h6>
								<div class="body in" data-accord="accordion-one">
									
                        <p>A R&M Usa como forma de Pagamento o Mercado Pago, voc?? pode pagar por: <br>
Boleto Bancario<br>
Deposito em Lot??ricas<br>
Cart??o de Cr??dito at?? 12x </p>
								</div>
								</div>
							
							<!-- Accordion 2  -->
							<div class="ui-card shadow-sm ui-accordion">
								<h6 class="toggle" data-toggle="accordion-two">2. Abrir Formulario de Cadastro</h6>
								<div class="body" data-accord="accordion-two">
									<p><div class="auth-box">
                <div>
					
                   
                    <!-- Form -->
					
                    
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
                                        <button class="btn ui-gradient-green shadow-xl btn-block" type="submit">CONCLUIR MEU CADASTRO</button>
										
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
					</div> </div> </p>
								
							
						</div></div>
   					<div class="col-md-6">
   						<img src="assets/img/mockups/applify-mockup-4.png" alt="R&M Luxury" class="responsive-on-sm" data-max_width="500" data-uhd />
   					</div>
   				</div><!-- .row -->
   			</div><!-- .container -->
   		</div><!-- .section -->
        
        <!--  Testimonial Section -->
   		<div id="testimonials" class="section">
   			<div class="container">
   				<!-- Card Heading -->
   				<div class="section-heading center">
   					<h2 class="heading text-indigo">
   						Fa??a como eles acredite.
   					</h2>
   					<p class="paragraph">
   						Queremos o seu depoimento, mostrando como a R&M Luxury mudou sua vida, assim como mudou a deles.
   					</p>
   				</div><!-- .section-heading -->
   				
   				<!-- Slider  -->
				<div class="ui-testimonials slider owl-carousel owl-theme">
					<!-- Testimonials Item 1 -->
					<div class="item">
						<!-- Card -->
						<div class="ui-card shadow-md"><br>

							<p>Eu gostei muito da R&M, pela seriedade com que mostra os ganhos reais, estou no meu 3?? m??s na empresa, e tudo est?? perfeito.</p>
						</div>
						<!-- User -->
						<div class="user">
							<div class="avatar"><img alt="Testemunhos Certificados" src="assets/img/avatars/t-3.png"></div>
							<div class="info">
								<h6 class="heading text-dark-gray">Renato Goes</h6>
								<p class="sub-heading">Investidor Iniciante</p>
							</div>
						</div>
					</div>
					<!-- Testimonials Item 2 -->
					<div class="item">
						<!-- Card -->
						<div class="ui-card shadow-md"><br>

							<p> Uma empresa genu??na, trabalhando em alto n??vel, onde teve a esperteza de alavancar suas vendas, abrindo capital para novos s??cios investidores, uma ideia genial de uma empresa que merece todo respeito e gratid??o.</p>
						</div>
						<!-- User -->
						<div class="user">
							<div class="avatar"><img alt="Testemunhos Certificados" src="assets/img/avatars/t-8.png"></div>
							<div class="info">
								<h6 class="heading text-dark-gray">Alex Vargas</h6>
								<p class="sub-heading">Investidor Premium</p>
							</div>
						</div>
					</div>
					<!-- Testimonials Item 3 -->
					<div class="item">
						<!-- Card -->
						<div class="ui-card shadow-md"><br>

							<p>Fa??o parte da Fam??lia R&M a 6 anos e de l?? para c?? posso comprovar que minha vida mudou, al??m de vender os produtos tamb??m fa??o parte dos investidores da empresa.</p>
						</div>
						<!-- User -->
						<div class="user">
							<div class="avatar"><img alt="Testemunhos Certificados" src="assets/img/avatars/t-2.png"></div>
							<div class="info">
								<h6 class="heading text-dark-gray">Solange Beneveluto</h6>
								<p class="sub-heading">Revendedora &amp; Investidora</p>
							</div>
						</div>
					</div>
					<!-- Testimonials Item 4 -->
					<div class="item">
						<!-- Card -->
						<div class="ui-card shadow-md"><br>

							<p>Em meios a tantas empresas de "investimentos", a R&M se destaca pela transpar??ncia, e a facilidade de entender que estamos diante de uma empresa que vai perpetuar por decadas. </p>
						</div>
						<!-- User -->
						<div class="user">
							<div class="avatar"><img alt="Testemunhos Certificados" src="assets/img/avatars/t-4.png"></div>
							<div class="info">
								<h6 class="heading text-dark-gray">Sebastian Weber</h6>
								<p class="sub-heading">Investidor Premium</p>
							</div>
						</div>
					</div>
					<!-- Testimonials Item 5-->
					<div class="item">
						<!-- Card -->
						<div class="ui-card shadow-md"><br>

							<p>Para quem tem medo de investir e perder dinheiro, assim como n??s t??nhamos, n??s alertamos, aqui ?? tudo diferente, a R&M Luxury ?? simples de trabalhar, n??o enrola, ?? transparente, voc?? sabe que os produtos geram um alto lucro, e que ela vai se manter por anos.</p>
						</div>
						<!-- User -->
						<div class="user">
							<div class="avatar"><img alt="Testemunhos Certificados" src="assets/img/avatars/t-1.png"></div>
							<div class="info">
								<h6 class="heading text-dark-gray">Sonia & Everton Carvalho</h6>
								<p class="sub-heading">Investidores Premium</p>
							</div>
						</div>
					</div>
					<!-- Testimonials Item 5-->
					<div class="item">
						<!-- Card -->
						<div class="ui-card shadow-md"><br>

							<p>N??s Conhecemos a R&M Atrav??s de um familiar, j?? vinhamos de uma perda muito grande junto a Unick, e est??vamos calejados, e com muito medo de colocar nosso dinheiro em outra piramide, mas hoje conhecendo a empresa, os produtos, inclusive as f??bricas, temos a seguran??a que busc??vamos.</p>
						</div>
						<!-- User -->
						<div class="user">
							<div class="avatar"><img alt="Testemunhos Certificados" src="assets/img/avatars/t-5.png"></div>
							<div class="info">
								<h6 class="heading text-dark-gray">Angela & Cleinton Gusm??o</h6>
								<p class="sub-heading">Investidores</p>
							</div>
						</div>
					</div>
					<!-- Testimonials Item 5-->
					<div class="item">
						<!-- Card -->
						<div class="ui-card shadow-md"><br>

							<p>N??o digo ?? facil investir o dinheiro que juntamos com muito suor, relutei muito at?? entrar na R&M, mas hoje agrade??o a deus a oportunidade que ele me deu, s??o mais de 1 ano na empresa conlhendo os frutos diariamente.</p>
						</div>
						<!-- User -->
						<div class="user">
							<div class="avatar"><img alt="Testemunhos Certificados" src="assets/img/avatars/t-6.png"></div>
							<div class="info">
								<h6 class="heading text-dark-gray">Victor Gast??o</h6>
								<p class="sub-heading">Investidor</p>
							</div>
						</div>
					</div>
				</div><!-- .ui-testimonials  -->
   			</div><!-- .container -->
   		</div><!-- .section -->
        
   		<!--  Call To Action Section -->
   		
   		
   		<!-- Basic Footer -->
   		<footer class="ui-footer">	
   			<!-- Footer Copyright -->
   			<div class="footer-copyright bg-dark-gray">
   				<div class="container">
					<div class="row">
						<!-- Copyright -->
						<div class="col-6">
							<p>
								&copy; 2012 a 2019 <a href="https://rmluxury.com.br" target="_blank" title="R&M Luxury Investimentos">R&M Luxury</a> Todos os Direitos reservados
							</p>
						</div>
						<!-- Social Icons -->
						<div class="col-6 text-right img-fluid">
							<a class="btn ui-gradient-blue btn-circle shadow-md">
								<span class="icon icon-collapse"></span>
							</a>
							<a class="btn ui-gradient-peach btn-circle shadow-md">
								<span class="icon icon-collapse"></span>
							</a>
							<a class="btn ui-gradient-green btn-circle shadow-md">
								<span class="icon icon-collapse"></span>
							</a>
							<a class="btn ui-gradient-purple btn-circle shadow-md">
								<span class="icon icon-collapse"></span>
							</a>
						</div>
					</div>
   				</div><!-- .container -->
   			</div><!-- .footer-copyright -->
   		</footer><!-- .ui-footer -->
    </div><!-- .main -->
    
    <!-- Scripts -->
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d743719eb1a6b0be60b86a9/1dlatiifn';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<!--End of Tawk.to Script-->
	<script type="text/javascript" src="assets/js/libs/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/slider-pro/jquery.sliderPro.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/owl.carousel/owl.carousel.min.js"></script>	
	<script type="text/javascript" src="assets/js/libs/form-validator/form-validator.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/applify/build/applify.js"></script>
	
</body>
</html>
