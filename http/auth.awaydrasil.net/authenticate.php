<?php
	header('Content-Type: application/json');
	include('config.php');
	include('errors.php');


  	if(system_used() == "database")
  	{
  		if($_SERVER['REQUEST_METHOD'] == "POST")
  		{
  			$input = file_get_contents("php://input");
  			if(json_decode($input) != NULL)
  			{
  				$decode = json_decode($input, true);
  				$u = $decode['username'];
  				if(authenticate($u))
  				{
  					echo "User ".$u." exists.";
  				}
  				else
  				{
  					echo show_error(3);
  				}
  			}
  			else
  			{
  				echo show_error(6);
  			}
  		}
  		else
  		{
  			echo show_error(1);
  		}
  		
  		
  	}
  	else
  	{
  		
  	
  	
  		if($_SERVER['REQUEST_METHOD'] == "POST")
  		{
  			$input = file_get_contents("php://input");
  			if(json_decode($input) != NULL)
  			{
  				$decode = json_decode($input, true);
  				$u = $decode['username'];
  				$searchfor = $u;
  				$file = file_get_contents(get_filename());
  				if(strpos($file, $searchfor) !== FALSE) 
  				{
  				   echo "User ".$searchfor." exists";
  				}
  				else
  				{
  					echo show_error(3);
  				}
  			}
  			else
  			{
  				echo show_error(6);
  			}
  
  		}
  		else
  		{
  			echo show_error(1);
  		}
  	}
  	

	
	
	
	
	
	
	function authenticate($u)
	{

	    if($u != NULL)
  		{
  			$query1 = mysqli_query(db_connect(), "SELECT COUNT(*) AS exist FROM members WHERE username = '$u'") or die(mysqli_error(db_connect()));
  			$sqlArray = mysqli_fetch_array($query1);
  			if($sqlArray['exist'] != 0)
  			{
  				return true;
  			}
  			else
  			{
  				return false;
  			}
  		}
  		else
  		{
  			return false;
  		}

	}
	
?>
