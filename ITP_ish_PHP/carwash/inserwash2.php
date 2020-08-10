  <?php

	require_once("connection.php");

	if(isset($_POST['submit']))

	{
 		if(empty($_POST['name']) || empty($_POST['phone'])  || empty($_POST['model'])  || empty($_POST['colour']) || empty($_POST['number'])  )
			{
				echo "please fill in the blanks";
			}

		else
			{
				$namee=$_POST['name'];
				$phonee=$_POST['phone'];
	  			$modele=$_POST['model'];
				$coloure=$_POST['colour'];
				$numbere=$_POST['number'];

				
				

				

	 			$query= " insert into carwashveh(name,phone,model,colour,number) values ('$namee','$phonee','$modele','$coloure','$numbere')";
				$result=mysqli_query($con,$query);


				if($result)
				{
					header("location:end.php");	
				}else
					{
						echo "Plese chk ur que";
					}
			}
	}

	else
	{
		header("location:carwash2.php");
	}


?>


		