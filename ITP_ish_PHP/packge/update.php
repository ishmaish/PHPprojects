<?php
	
	require_once("connection.php");

	if(isset($_POST['update']))
	{
		$pkgID= $_GET['ID'];
		$pkgname= $_POST['packagename'];
		$typo= $_POST['type'];
		$priso= $_POST['price'];
		$f1=$_POST['fun1'];
		$f2=$_POST['fun2'];
		$f3=$_POST['fun3'];
		$f4=$_POST['fun4'];
		$f5=$_POST['fun5'];
		$f6=$_POST['fun6'];
		$f7=$_POST['fun7'];
		$f8=$_POST['fun8'];

		$query = " update pkg set packagename = '".$pkgname."' , type= '".$typo."' , price= '".$priso."' , fun1= '".$f1."' , fun2='".$f2."' , fun3= '".$f3."' ,  fun4= '".$f4."' ,  fun5= '".$f5."' ,  fun6= '".$f6."' ,  fun7= '".$f7."' , fun8= '".$f8." 'where ID='".$pkgID."'";

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