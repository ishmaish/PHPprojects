<?php
	
	require_once("connection.php");

	if(isset($_POST['update']))
	{
		$worID= $_GET['WID'];
		
		$f1=$_POST['day1'];
		$f2=$_POST['day2'];
		$f3=$_POST['day3'];
		$f4=$_POST['day4'];
		$f5=$_POST['day5'];
		$f6=$_POST['day6'];
		$f7=$_POST['day7'];
		

		$query = " update workdays set day1= '".$f1."' , day2='".$f2."' , day3= '".$f3."' ,  day4= '".$f4."' ,  day5= '".$f5."' ,  day6= '".$f6."' ,  day7= '".$f7." 'where WID='".$worID."'";

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


	else
	{
		header("location:view.php");
	}


	
	

?>