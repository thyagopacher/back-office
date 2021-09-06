<?php

	/**realiza a conexão ao banco de dados e também upload da foto escolhida.*/

    include ("admin/site/mmn_db.php");
	include ("Upload.php");
    date_default_timezone_set('America/Sao_Paulo');
    session_start();
    if(!isset($_SESSION["username"])){
        die(json_encode(array('mensagem' => 'Isto não é um erro, sua sessão caiu, por favor logue novamente!!!', 'situacao' => false)));
    } 
	
	$query2 = "SELECT Id FROM  affiliateuser WHERE username = '{$_SESSION["username"]}'";
	$result = mysqli_query($con,$query2);
	$row = mysqli_fetch_array($result);
	
	$upload = new Upload();
	
	$separacao = explode('.', $_FILES['foto']['name']);
	$nome_arquivo = $row["Id"] . '.' . $separacao[1];
	
	if($separacao[1] == "png"){
		$resUpload = $upload->upload_png ($_FILES['foto']['tmp_name'], $nome_arquivo, '150', "arquivos");
	}elseif($separacao[1] == "jpg"){
		$resUpload = $upload->upload_jpg ($_FILES['foto']['tmp_name'], $nome_arquivo, '150', "arquivos");
	}
	
	if(!$resUpload){
		die(json_encode(array('mensagem' => "Não conseguimos fazer upload da imagem !!!", 'situacao' => false)));
	}
    $resAtualizarPessoa = mysqli_query($con,"update affiliateuser set foto='$nome_arquivo' where username='".$_SESSION['username']."'");;
    if($resAtualizarPessoa !== FALSE){         
        die(json_encode(array('mensagem' => "Sucesso ao salvar imagem", 'situacao' => true)));
    }else{
        die(json_encode(array('mensagem' => "Erro ao salvar imagem causado por:". mysqli_error($conexao->conexao), 'situacao' => false)));
    }