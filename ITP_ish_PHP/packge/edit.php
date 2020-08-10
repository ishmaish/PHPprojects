<?php
	require_once("connection.php");
	$pkgID=$_GET['GETID'];
	$query = "select * from pkg where ID='".$pkgID."'";
	$result = mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($result))
	{
		     $pkgID=$row['ID'];
			$pkgname=$row['packagename'];
			$typo=$row['type'];
			$priso=$row['price'];
			$f1=$row['fun1'];
			$f2=$row['fun2'];
			$f3=$row['fun3'];
			$f4=$row['fun4'];
			$f5=$row['fun5'];
			$f6=$row['fun6'];
			$f7=$row['fun7'];
			$f8=$row['fun8'];


	}

?> 




<!DOCTYPE html>
<html>
    <head>
        <title>rental dashboard</title>
        <link rel="stylesheet" media="all" href="../css/newrentalhome.css" type="text/css"/ >
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/pkg.css">
    </head>
<style>
*{
    margin:0;
  }
html,body{
    height:100%;
    }
    
.heading{
    width: 100%;
    height:11%;
    background-color: #3498db;
    top: 0%;
    text-align: center;
    font-size: 50px;
    color: white;
}
.line1{
    width:100%;
    height:6%;
    background-color: #3498db;
    transform: translateY(10px);
}
.btnhome{
    background-color: #de0e1d;
    border: none;
    color: white;
    width: 10%;
    height: 100%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    transform: translateX(300px);
}
.btnlogout{
    background-color: #de0e1d;
    border: none;
    color: white;
    width: 10%;
    height: 100%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    transform: translateX(900px);
}
.line2{
    width:100%;
    height:20%;
    
    background-color: white;
    transform: translateY(50px);
}
.sidebar {
    margin: 0;
    padding: 0;
    width: 250px;
    background-color: #3498db;
    position: fixed;
    height: 100%;
    overflow: auto;
    transform: translateY(50px);
  }
  
  /* Sidebar links */
  .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
    font-size: 20px;
  }
  
  /* Active/current link */
  .sidebar a.active {
    background-color: #de0e1d;
    color: white;
  }
  
  /* Links on mouse-over */
  .sidebar a:hover:not(.active) {
    background-color: #de0e1d;
    color: white;
  }
  
  /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
  div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }
  
  /* On screens that are less than 700px wide, make the sidebar into a topbar */
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }
  
  /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
    </html>
</style>


    <body>

        <div class="heading">
           PACKAGE DETAILS
        </div>

        <div class="line1">
                <input class="btnhome" type="button" value="home" onclick="window.location.href = 'adminhome.php';">
                <input class="btnlogout" type="button" value="logout" onclick="window.location.href = 'adminlogin.php';">
        </div>

        <div class="sidebar">
            
            <a href="start.php">car wash home</a>
            <a href="view.php">view package list</a>
            
            <a href="head.php">add package</a>

	
 </div>

        <br><br><br>
        <!-- Page content -->

<div class="login-box1">
        <center><h1>PACKAGE LIST UPDATION</h1></center><br>
        <form action="update.php?ID=<?php echo $pkgID ?>"  method="POST" >

			  <lable>PACKAGE id : </lable> <br>
                  
				<input type="text" name="ID"  placeholder=""  value="<?php echo $pkgID ?>" required>	<br>	<br> 

<lable>PACKAGE NAME : </lable><br>

				<input type="text" name="packagename"  placeholder="" value="<?php echo $pkgname?>" required> <br> <br>



	 <lable>PACKAGE TYPE : </lable><br>

				<input type="text" name="type"  placeholder="" value="<?php echo $typo ?>" required> <br> <br>



                          <lable>AMOUNT : </lable><br>

				<input type="text" name="price"  placeholder="" value="<?php echo $priso ?>" required> <br> <br>


                         <lable>FUNTIONALITIES: </lable><br>

				<input type="text" name="fun1" placeholder="1" value="<?php echo $f1 ?>" required> <br>

                                <input type="text" name="fun2" placeholder="2" value="<?php echo $f2 ?>" required> <br>

				<input type="text" name="fun3" placeholder="3" value="<?php echo $f3 ?>" required> <br>

				<input type="text" name="fun4" placeholder="4" value="<?php echo $f4 ?>" required> <br>

				<input type="text" name="fun5" placeholder="5" value="<?php echo $f5 ?>" required> <br>

				<input type="text" name="fun6" placeholder="6" value="<?php echo $f6 ?>" required> <br>

				<input type="text" name="fun7" placeholder="7" value="<?php echo $f7 ?>" required> <br>

				<input type="text" name="fun8" placeholder="8" value="<?php echo $f8 ?>" required> <br>
<br><br>
	
        <input type="submit" name="update" value="update">
        </form>
        </div>
 
       




    </body>

</html>