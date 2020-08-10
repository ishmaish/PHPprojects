<?php
	require_once("connection.php");

	$query = "select * from carwashapp " ;
	$result = mysqli_query($con,$query); 

	
?>





<!DOCTYPE html>
<html>
    <head>
        <title>rental dashboard</title>
        <link rel="stylesheet" media="all" href="../css/newrentalhome.css" type="text/css"/ >
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Form1</title>
	<link rel="stylesheet" type="text/css" href="">

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
          APPOINTMENT DETAILS
        </div>

        <div class="line1">
                <input class="btnhome" type="button" value="home" onclick="window.location.href = 'adminhome.php';">
                <input class="btnlogout" type="button" value="logout" onclick="window.location.href = 'adminlogin.php';">
        </div>

                <br><br><br>
        <!-- Page content -->
         
        <center><h1>APPOINTMENT LIST</h1></center><br>

    <div class="col-sm-12">
      <div class="well">
        <div style="overflow-x:auto;">

  
              <table>
                <tr>
				<td> AID </td>
                     <td> type</td>
				<td> package </td>
				<td> date </td>
				<td> time </td>
				
				<td> EDIT </td>
				<td> DELETE </td>
				
		</tr>  

           <?php
		while($row=mysqli_fetch_assoc($result))
		{
			$appID=$row['AID'];
			$typee=$row['type'];
			$packagee=$row['package'];
		     $dat=$row['date'];
			$tim=$row['time'];
			         ?>

		<tr>
			<td> <?php echo $appID?> </td>
			<td> <?php echo $typee?> </td>
			<td> <?php echo $packagee?> </td>
			
			<td> <?php echo $dat?> </td>
			<td> <?php echo $tim?> </td>
						<td> <a href="edit.php?GETID=<?php echo $appID ?>"> EDIT </a> </td>
			<td> <a href="deletewash1.php?delete=<?php echo $appID ?>"> DELETE </a> </td>
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