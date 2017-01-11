<?php
header("Content-Type:application/json");

if(!empty($_GET['x'])){

	$x = $_GET['x'];
	// calculate the sum of x and 1
	$y = $x + 1;

	$result['input'] = $x;
	$result['output'] = $y;

	deliver_response(200,"Addition",$result);

	}
else
	{
		deliver_response(400,"Erreur: Something went wrong",NULL);
	}
		
	function deliver_response($status, $status_message,$result)
	{
			header("HTTPS/1.2 $status $status_message");
			$response['status']=$status;
			$response['status_message']=$status_message;
			$response['result']=$result;
			
			$json_response = json_encode($response);
			echo $json_response;			
	}
?>
