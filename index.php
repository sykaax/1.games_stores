<?php
	define("ACCESS", true);
	
	require($_SERVER["DOCUMENT_ROOT"] . '/_links.php');
		
	$url = $_SERVER["REDIRECT_URL"];
	$url = (($url && (!strpos($url, 'index.html')) && !is_dir($_SERVER["DOCUMENT_ROOT"].$url) && file_exists($_SERVER["DOCUMENT_ROOT"].$url))? $url : "/index.html");
	$file_name = basename( $_SERVER["DOCUMENT_ROOT"].$url);
	$oplata_url = (isset($arLinks[$file_name]) ? $arLinks[$file_name] : "");
	
	ob_start();
	
	include($_SERVER["DOCUMENT_ROOT"].$url);
	
	$content = ob_get_clean();
	
	$content = strtr($content, array('<?= $oplata_url ?>' => $oplata_url));
	
	echo $content;