<?php
	
/*
AwayDrasil Authentication Server.
Author : Jambonlatex
This files will help you to create a new authentication service based on Yggdrasil authentication project.
It could be very useful for big personnal servers.
*/	

/*This is the configuration file, everything you need to setup is here */


// SYSTEM_USED : Here enter 'database' to use database verification system, or enter 'whitelist' to use whitelist file verification.
$systemUsed = 'whitelist';

// HOSTNAME : Define your hostname (http://localhost/ for local user)
$cfg_hostname = 'http://localhost/remote/';

// DATABASE : Define all database configuration parameters to permit the access of custom members database

$cfg_db_host = 'localhost';
$cfg_db_username = 'root';
$cfg_db_password = '';
$cfg_db_database = 'minecraft_server_db';


// FOR WHITELIST USER : enter your whitelist path here :
$filename = 'http://localhost/remote/whitelist.txt';


//END OF THE CONFIGURATION//




/////////////////////////////////////////////////////////////////////////////////////////////////////////
/*REFERENCE FUNCTIONS*/
//TOUCH THIS PART ONLY IF YOU KNOW WHAT YOU DO !

function db_connect(){
	global $cfg_db_host, $cfg_db_username, $cfg_db_password, $cfg_db_database;
	$db = mysqli_connect($cfg_db_host, $cfg_db_username, $cfg_db_password, $cfg_db_database);
	
	if (mysqli_connect_errno($db))
	  {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
  return $db;
  
}

function base_url()
{
	global $cfg_hostname;
	return $cfg_hostname;
}

function system_used(){
	global $systemUsed;
	return $systemUsed;
}

function get_filename(){
	global $filename;
	return $filename;
}

?>
