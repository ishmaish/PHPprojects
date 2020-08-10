<?php
	require_once("connection.php");

	$query = "select * from pkg " ;
	$result = mysqli_query($con,$query); 

	
?>



<!DOCTYPE html>
<html>
    <head>
        <title>rental dashboard</title>
        <link rel="stylesheet" media="all" href="../css/newrentalhome.css" type="text/css"/ >
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/pkg.css">


<!--TableStyles------------------------------------------->
  <style>
    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}
  </style>
<!--TableStyles--------------------------------------->
</head>


<body>
<!--edit------------------------------------------->

  <div class="jumbotron">
  <div class="container text-center">  
  </div>
</div>

<!--edit-----------headder navbar-------------------------------->
 

<!--edit------------------------------------------->


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

                <br><br><br>
        <!-- Page content -->
         
        <center><h1>PACKAGE LIST</h1></center><br>

    <div class="col-sm-12">
      <div class="well">
        <div style="overflow-x:auto;">

  
              <table>
                <tr>
				<td> PID </td>
                     <td> P_NAME </td>
				<td> TYPE </td>
				<td> PRICE </td>
				<td> FUN1 </td>
				<td> FUN2 </td>
				<td> FUN3 </td>
				<td> FUN4 </td>
				<td> FUN5 </td> 
				<td> FUN6 </td>
				<td> FUN7 </td>
				<td> FUN8 </td>
				<td> EDIT </td>
				<td> DELETE </td>
				
		</tr>  

           <?php
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
         ?>

		<tr>
			<td> <?php echo $pkgID ?> </td>
			<td> <?php echo $pkgname ?> </td>
			<td> <?php echo $typo ?> </td>
			<td> <?php echo $priso?> </td>
                <td> <?php echo $f1 ?> </td>
			<td> <?php echo $f2 ?> </td>
			<td> <?php echo $f3 ?> </td>
			<td> <?php echo $f4 ?> </td>
			<td> <?php echo $f5 ?> </td>
			<td> <?php echo $f6 ?> </td>
			<td> <?php echo $f7 ?> </td>
			<td> <?php echo $f8 ?> </td>

			<td> <a href="edit.php?GETID=<?php echo $pkgID ?>"> EDIT </a> </td>
			<td> <a href="delete.php?delete=<?php echo $pkgID ?>"> DELETE </a> </td>
		</tr>

	<?php
		} 
	?>
 

	    </div>
      </div>
    </div>		
					
				
					
			
              </table>


       
	
        




    </body>

</html>