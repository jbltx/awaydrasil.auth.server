<?php
	header('Content-Type: application/json');
	include('config.php');
	include('errors.php');
	
	if(strstr($_SERVER['REQUEST_URI'], 'index'))
	{
		header("HTTP/1.0 404 Not Found");
		echo show_error(2);
	}
	elseif(strstr($_SERVER['REQUEST_URI'], 'index.php'))
	{
		header("HTTP/1.0 404 Not Found");
		echo show_error(2);
	}
	else
	{
		$server_properties = array(
			'Status'=>'OK',
			'Runtime-Mode'=>'production',
			'Application-Description'=>'AwayDrasil Authentication Server.',
			'Specification-Version'=>'1.0.0',
			'Application-Name'=>'awaydrasil.auth.server',
			'Implementation-Version'=>'1.0.0_build10',
			'Application-Owner'=>'Jambonlatex',
			'Application-Author'=>'Jambonlatex'
		);
		$release = json_encode($server_properties);
		echo $release;
	}
?>
