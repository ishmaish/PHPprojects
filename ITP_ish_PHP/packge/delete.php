<?php

	
	require_once("connection.php");

	if(isset($_GET['delete']))
	{
           $pkgID=$_GET['delete']; 
		$query = "delete from pkg where ID = '".$pkgID."'" ;
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
 