<?php

	require_once("connection.php");

	if(isset($_POST['submit']))

	{
 		if(empty($_POST['day1']) || empty($_POST['day2']) || empty($_POST['day3']) || empty($_POST['day4']) || empty($_POST['day5']) || empty($_POST['day6']) || empty($_POST['day7']))
			{
				echo "please fill in the blanks";
			}

		else
			{
				
				$d1=$_POST['day1'];
				$d2=$_POST['day2'];
				$d3=$_POST['day3'];
				$d4=$_POST['day4'];
				$d5=$_POST['day5'];
				$d6=$_POST['day6'];
				$d7=$_POST['day7'];
				

				$query= " insert into workdays(day1,day2,day3,day4,day5,day6,day7) values ('$d1','$d2','$d3','$d4','$d5','$d6','$d7')";

				$result=mysqli_query($con,$query);


				if($result)
				{
					header("location:view.php");	
				}else
					{
						echo "Plese chk ur que";
					}
			}
	}

	else
	{
		header("location:head.php");
	}


?>

