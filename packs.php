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
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<?php
include_once ("admin/site/header.php");
?>
<body>
<div id="wrapper">
     <!-- Navigation -->
<?php
include_once ("admin/site/menu.php");
?>
        <div id="page-wrapper">
        <div class="graphs">
		<h3>Pacotes / Planos 2019</h3>
		
		<div class="grid_3 grid_5">
	     
	     <div class="but_list">
	       <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
			  <li role="presentation" class="active"><a href="#home" class="btn btn-lg btn-primary" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Comprar Pacote</a></li>
			  <li role="presentation"><a href="#stats" class="btn btn-lg btn-info" role="tab" id="stats-tab" data-toggle="tab" aria-controls="profile">PAGAR Pedidos Realizados / Faturas</a></li>
			  
			</ul>
		<div id="myTabContent" class="tab-content">
		  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
		    <h2>Escolha:</h2>
<?php

$query="SELECT * FROM  packages WHERE active=1 ORDER BY id DESC"; 
 
 
 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result))
{
	
	$p_id="$row[id]";
	$p_name="$row[name]";
	$p_price="$row[price]";
	$p_points="$row[sbonus]";
	$p_active="$row[active]";
	$p_valid="$row[validity]";
	
	
	?>
			  <div class="col-sm-3 widget_1_box">
              	<div class="wid-social google-plus">
                    
                    <div class="social-info">
                        <h3 class="number_counter bold count text-light start_timer counted"><?php print $p_name ?></h3>
                        <h4 class="counttype text-light">preço= R$ <?php print number_format($p_price, 2, ',', '.'); ?></h4>
						<h4><?php print $p_points ?> PONTOS PL</h4>

						<h4><?php print $bonus_nv1 ?>% indicação direta</h4>
						<h4><?php print $bonus_nv2 ?>% no 2º nível</h4>
						<h4><?php print $bonus_nv3 ?>% no 3º nível</h4>
						<h4><?php print $bonus_nv4 ?>% no 4º nível</h4>
						<h4><?php print $bonus_nv5 ?>% no 5º nível - <?php print $p_id ?></h4>
						<h4>validade: <?php print $p_valid ?> dias</h4>
                    </div>
					<form method="post" action="packs_buy.php">
					<input type="hidden" name="packid" value="<?php print $p_id ?>">
					<button type="submit" class="btn btn-primary">COMPRAR</button>
					</form>
                </div>
			  </div>
              <?php
			  }
?>
			  
              <div class="clearfix"> </div>
		 				
					</tbody>
					</table>
					</div>
				</div>
				</div>
			</div>
		  
		</div>
   </div>
   </div>
  </div>

		</div>
		<?php
include_once ("admin/site/footer.php");
?>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
