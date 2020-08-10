<?php

	
	require_once("connection.php");

	if(isset($_GET['delete']))
	{
           $appID=$_GET['delete']; 
		$query = "delete from carwashapp where AID = '".$appID."'" ;
		$result = mysqli_query($con,$query);
		


		if($result)
		{

			header("location:viewwash1.php");
		}

		else
		{

			echo "Please check ur que";
		}

    }
?>
 