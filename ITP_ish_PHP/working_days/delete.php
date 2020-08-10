<?php

	
	require_once("connection.php");

	if(isset($_GET['delete']))
	{
           $worID=$_GET['delete']; 
		$query = "delete from workdays where WID = '".$worID."'" ;
		$result = mysqli_query($con,$query);
		


		if($result)
		{

			header("location:view.php");
		}

		else
		{

			echo "Please check ur que";
		}

    }
?>
 