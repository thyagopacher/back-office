<?php

$query="SELECT * FROM  affiliateuser where username='".$_SESSION['username']."'";
$result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result))
{
	$my_id="$row[Id]";
	$my_username="$row[username]";
	$my_password="$row[password]";
	$my_nome="$row[fname]";
	$my_email="$row[email]";
	$my_ref="$row[referedby]";
	$my_whats="$row[mobile]";
	$my_status="$row[active]";
	$my_saldo="$row[tamount]";
	$my_code="$row[signupcode]";
	$my_level="$row[level]";
	$my_lider="$row[lider]";
	$my_expiry="$row[expiry]";
	$my_cpf="$row[cpf]";
	$my_endereco="$row[endereco]";
	$my_bairro="$row[bairro]";
	$my_cidade="$row[cidade]";
	$my_estado="$row[estado]";
	$my_cep="$row[cep]";
	$my_pais="$row[pais]";
	$my_foto="$row[foto]";
	$my_mercadopago="$row[mercadopago]";
	$my_youtube="$row[youtube]";
	$my_instagram="$row[instagram]";
	$my_facebook="$row[facebook]";
	$my_site="$row[site]";
	$my_rg="$row[rg]";
	$my_nascimento="$row[nascimento]";
	$my_total="$row[total]";
	$my_pontos="$row[pontos]";
	$my_banco="$row[banco]";
	$my_agencia="$row[agencia]";
	$my_conta="$row[conta]";
	$my_conta_tipo="$row[tipo]";
	
	if($my_status==1)
	{
	$mystatus="Ativo";
	}
	else if($my_status==0)
	{
	$mystatus="Pendente";
	}
	else
	{
	$my_status="Inativo";
	}
	
  
  }
?>