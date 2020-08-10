<?php
function fetch_data()
{
  $output='';
   $con= mysqli_connect("localhost","root","","svauto"); 
   $query="SELECT * FROM pkg ORDER BY ID ASC";
   $result=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($result))
   {
    $output .='
        <tr>
            <td>'.$row["ID"].'</td>
            <td>'.$row["packagename"].'</td>
            <td>'.$row["type"].'</td>
            <td>'.$row["price"].'</td>
            <td>'.$row["fun1"].'</td>
            <td>'.$row["fun2"].'</td>
            <td>'.$row["fun3"].'</td>
            <td>'.$row["fun4"].'</td>
            <td>'.$row["fun5"].'</td>
            <td>'.$row["fun6"].'</td>
            <td>'.$row["fun7"].'</td>
            <td>'.$row["fun8"].'</td>
      </tr>
    ';
   }

   return $output;
}

if(isset($_POST["create_pdf"]))

{
  require_once("tcpdf_min/tcpdf.php");
  $obj_pdf = new TCPDF('P',PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
  $obj_pdf->SetCreator(PDF_CREATOR);
  $obj_pdf->SetTitle("Package LIST");
  $obj_pdf->SetHeaderData('' , '',PDF_HEADER_TITLE,PDF_HEADER_STRING);
  $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '',PDF_FONT_SIZE_MAIN));

  $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '',PDF_FONT_SIZE_DATA));
  $obj_pdf->SetDefaultMonospacedFont('helvetica');
  $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
  $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '1' ,PDF_MARGIN_RIGHT);
  $obj_pdf->setPrintHeader(false);
  $obj_pdf->setPrintFooter(false);
  $obj_pdf->setAutoPageBreak(TRUE ,10);
  $obj_pdf->SetFont('helvetica','',8);


  $content = '';

  $content .= '
    <h3 align="center"> Package details </h3> 

    <table border="1" cellspacing="1" cellpadding="1">

    <tr>
        <td width="5%"> PID </td>
        <td width="10%"> P_NAME </td>
        <td width="10%"> TYPE </td>
        <td width="10%"> PRICE </td>
        <td width="10%"> F1 </td>
        <td width="10%"> F2 </td>
        <td width="10%"> F3 </td>
        <td width="5%"> F4 </td>
        <td width="10%"> F5 </td> 
        <td width="10%"> F6 </td>
        <td width="10%"> F7 </td>
        <td width="10%"> F8 </td>
        
        
    </tr>  


    

  ';

$content .= fetch_data();

$content .= '</table>' ;

$obj_pdf->AddPage();
$obj_pdf->writeHTML($content);

$obj_pdf->Output("PackageReport.pdf" ,"I");
 

}



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
				<td width="5%"> PID </td>
        <td width="5%"> P_NAME </td>
				<td width="5%"> TYPE </td>
				<td width="5%"> PRICE </td>
				<td width="5%"> FUN1 </td>
				<td width="5%"> FUN2 </td>
				<td width="5%"> FUN3 </td>
				<td width="5%"> FUN4 </td>
				<td width="5%"> FUN5 </td> 
				<td width="5%"> FUN6 </td>
				<td width="5%"> FUN7 </td>
				<td width="5%"> FUN8 </td>
				
				
		</tr>  

      <?php

          echo fetch_data();

          ?>
					
				
					
			
              </table>

<br/>

<form method="post">
       
	
        
<input type="submit" name="create_pdf" class="btn btn-danger" value="create PDF" />

</form>

    </body>

</html>