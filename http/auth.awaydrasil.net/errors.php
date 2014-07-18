<?php

	
	

	function show_error($er_nb){
	
		if($er_nb == 1)
		{
			$error = "Method Not Allowed";
			$cause = "";
			$errorMessage = "The method specified in the request is not allowed for the resource identified by the request URI";
			$notes = "Something other than a POST request was received.";
		}
		elseif($er_nb == 2)
		{
			$error = "Not Found";
			$cause = "";
			$errorMessage = "The server has not found anything matching the request URI";
			$notes = "Non-existing endpoint was called.";
		}
		elseif($er_nb == 3)
		{
			$error = "ForbiddenOperationException";
			$cause = "";
			$errorMessage = "Invalid credentials. Invalid username or password.";
			$notes = "";
		}
		elseif($er_nb == 4)
		{
			$error = "ForbiddenOperationException";
			$cause = "";
			$errorMessage = "Invalid token.";
			$notes = "accessToken was invalid.";
		}
		elseif($er_nb == 5)
		{
			$error = "IllegalArgumentException";
			$cause = "";
			$errorMessage = "Access token already has a profile assigned.";
			$notes = "Selecting profiles isn't implemented yet.";
		}
		elseif($er_nb == 6)
		{
			$error = "Unsupported Media Type";
			$cause = "";
			$errorMessage = "The server is refusing to service the request because the entity of the request is in a format not supported by the requested resource for the requested method";
			$notes = "Data was not submitted as application/json";
		}
	
	
	
		$error_array = array(
			'error' => $error,
			//'cause' => $cause,
			'errorMessage' => $errorMessage,
			//'notes' => $notes
		);
		$result = json_encode($error_array);
		return $result;
	}

?>
