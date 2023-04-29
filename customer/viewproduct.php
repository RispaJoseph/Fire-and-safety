
<?php
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<head>
<style>
table
{
	width:100px;
	height:100px;
	border:2px solid #17c3a2;
	border-collapse;collapse;
}
th
{
	color:#17c3a2
	background-color:BLACK;

}
</style>
</head>
<?php
$sql="select * from addproduct_reg";
$tbl=getDatas($sql);
if($tbl==null)
{
	echo"no datas";
}
else
{
	?>
	<h1 style="position: relative;left:500px;top:100px;color:#17c3a2;">VIEWPAGE</h1>
	<table border="1"style="position:relative;left:250px;top:150px;">
	<tr>
	<th>Addproduct_id</th>
	<th>Name</th>
	<th>Brand</th>
	<th>Use</th>
	<th>Stockdate</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>File</th>
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
<td><?php echo $tbl[$i][1];?></td>
<td><?php echo $tbl[$i][2];?></td>
<td><?php echo $tbl[$i][3];?></td>
<td><?php echo $tbl[$i][4];?></td>
<td><?php echo $tbl[$i][5];?></td>
<td><?php echo $tbl[$i][6];?></td>
<td><img src="<?php echo $tbl[$i][7]; ?>" width="100" height="100"></td>

</tr>
<?php
}
}
?>
	
</table>
