<?php 
require("connect.php");
function render($template,$data=[])
{
	$path=__DIR__."/../templates/".$template;    //generating path
	if (file_exists($path))
	{
		extract($data);
		require($path);
	}	
}

function redirect($url){
	header('Location: '.$url);
	exit();
}



?>