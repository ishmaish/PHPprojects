
  <?php

	require_once("connection.php");

	if(isset($_POST['submit']))

	{
 		if(empty($_POST['type']) || empty($_POST['package'])  || empty($_POST['date'])  || empty($_POST['time']))
			{
				echo "please fill in the blanks";
			}

		else
			{
				$typee=$_POST['type'];
				$packagee=$_POST['package'];
	  		
				$dat=$_POST['date'];
				$tim=$_POST['time'];
				

	 			$query= " insert into carwashapp(type,package,date,time) values ('$typee','$packagee','$dat','$tim')";
				$result=mysqli_query($con,$query);


				if($result)
				{
					
					header("location:carwash2.php");	
				}else
					{
						echo "Plese chk ur que";
					}
			}
	}

	else
	{
		header("location:carwash1.php");
	}


?>


		