<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php");?>
<br><br><br><br><br><br><br><br><br><br>
<head>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="../temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="../temp/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="../temp/css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="../temp/css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="../temp/css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="../temp/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="../temp///fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="../temp///fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	</head>
<!-- //products-breadcrumb -->
<div class="left-ads-display py-lg-4 col-lg-9" style="position:relative;left:150px;top:-50px">
                  <div class="row">

<?php
$sql="select * from myorder";
$tbl=getDatas($sql);
if($tbl==null){
echo "<div style='position:relative;top:250px;left:620px;'><font color='red'>NO Orders...</font></div>";

}
else
{
    
    ?><h1 style="position: relative;left:500px;top:100px;color:red;">view page</h1>
	<table border="1"style="position:relative;left:250px;top:150px;">
                      <tr>
                          <th>oid</th>
                      <th>pname</th>
                          <th>price</th>                     
                        <th>paytype</th> 
                          <th>orderdate</th>             
                          <th>expecteddelievery</th>                      
                         <th>orderstatus</th>  
                           <th>image</th>  
                      </tr>
                      <?php
    



for($i=0;$i<count($tbl);$i++)
{
	
	for($j=0;$j<count($tbl[$i]);$j++)
	{
		
    }


?>
<tr>
                      <td><?php echo $tbl[$i][0];?></td>
    <td><?php echo $tbl[$i][2];?></td>
    <td><?php echo $tbl[$i][3];?></td>
    <td><?php echo $tbl[$i][5];?></td>
    <td><?php echo $tbl[$i][4];?></td>
    <td><?php echo $tbl[$i][7];?></td>
    <td><?php echo $tbl[$i][6];?></td>
    <td><img src="<?php echo $tbl[$i][8];?>" width="100" height="100"></td></tr>
  <?php
}}
    ?>
                      </table>