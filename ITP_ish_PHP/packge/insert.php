  <?php

	require_once("connection.php");

	if(isset($_POST['submit']))

	{
 		if(empty($_POST['packagename']) || empty($_POST['type'])  || empty($_POST['price'])  || empty($_POST['fun1']) || empty($_POST['fun2']) || empty($_POST['fun3']) || empty($_POST['fun4']) || empty($_POST['fun5']) || empty($_POST['fun6']) || empty($_POST['fun7']) || empty($_POST['fun8']))
			{
				echo "please fill in the blanks";
			}

		else
			{
				$pkgname=$_POST['packagename'];
				$typo=$_POST['type'];
				$prico=$_POST['price'];
				$f1=$_POST['fun1'];
				$f2=$_POST['fun2'];
				$f3=$_POST['fun3'];
				$f4=$_POST['fun4'];
				$f5=$_POST['fun5'];
				$f6=$_POST['fun6'];
				$f7=$_POST['fun7'];
				$f8=$_POST['fun8'];

				$query= " insert into pkg(packagename,type,price,fun1,fun2,fun3,fun4,fun5,fun6,fun7,fun8) values ('$pkgname','$typo','$prico','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8')";
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


		