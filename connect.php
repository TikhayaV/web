<?php 

	//
	require $_SERVER['DOCUMENT_ROOT'].'/vk/config.php'; 

	$redirect_uri = 'localhost/vk/connect.php';

	if(empty($_SESSION['token']))
	{
	if (!empty($_GET['code']))
	{ 
		$vkAppCode=$_GET['code']; 
		$sUrl = "https://oauth.vk.com/access_token?client_id=$vkAppID&client_secret=$vkAppKey&code=$vkAppCode&redirect_uri=".$redirect_uri;
		$responce = json_decode(file_get_contents($sUrl),true);	
		$_SESSION['token'] = $responce['access_token'];


		$fp = fopen('token.txt', 'w'); 
		fputs($fp, $_SESSION['token']); 
		fclose($fp); 
		header('Location: index.php', true,301);
		exit();
	}
	else
	{
		echo '<a href="https://oauth.vk.com/authorize?client_id='.$vkAppID.'&scope=market,friends,groups,stats,wall&redirect_uri=http://'.$redirect_uri.'&response_type=code">Авторизация Вк</a>';
	}
	}

?> 
