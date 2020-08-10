<?php
	require_once("connection.php");
	$worID=$_GET['GETID'];
	$query = "select * from workdays where WID='".$worID."'";
	$result = mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($result))
	{
		     $worID=$row['WID'];
			
			$d1=$row['day1'];
			$d2=$row['day2'];
			$d3=$row['day3'];
			$d4=$row['day4'];
			$d5=$row['day5'];
			$d6=$row['day6'];
			$d7=$row['day7'];
		


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
           WORKING DAYS DETAILS
        </div>

        <div class="line1">
                <input class="btnhome" type="button" value="home" onclick="window.location.href = 'adminhome.php';">
                <input class="btnlogout" type="button" value="logout" onclick="window.location.href = 'adminlogin.php';">
        </div>

        <div class="sidebar">
          
            <a href="../packge/start.php">car wash home</a>
            <a href="view.php">view days list</a>
            
           
<a href="head.php">add days</a>
	
 </div>

        <br><br><br>
        <!-- Page content -->

<div class="login-box1">
        <center><h1>WORKING DAYS UPDATION</h1></center><br>
        <form action="update.php?WID=<?php echo $worID ?>"  method="POST" >

			 

                         <lable>WORKING DAYS UPDATION: </lable><br>

				<input type="text" name="day1" placeholder="1" value="<?php echo $d1 ?>" required> <br>

                                <input type="text" name="day2" placeholder="2" value="<?php echo $d2 ?>" required> <br>

				<input type="text" name="day3" placeholder="3" value="<?php echo $d3 ?>" required> <br>

				<input type="text" name="day4" placeholder="4" value="<?php echo $d4 ?>" required> <br>

				<input type="text" name="day5" placeholder="5" value="<?php echo $d5 ?>" required> <br>

				<input type="text" name="day6" placeholder="6" value="<?php echo $d6 ?>" required> <br>

				<input type="text" name="day7" placeholder="7" value="<?php echo $d7 ?>" required> <br>

				
<br><br>
	
        <input type="submit" name="update" value="update">
        </form>
        </div>
 
       




    </body>

</html>