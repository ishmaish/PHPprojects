<?php

	
	require_once("connection.php");

	if(isset($_GET['delete']))
	{
           $vehID=$_GET['delete']; 
		$query = "delete from carwashveh where VID = '".$vehID."'";
		$result = mysqli_query($con,$query);
		


		if($result)
		{

			header("location:viewwash2.php");
		}

		else
		{

			echo "Please check ur que";
		}

    }

   

?>
 