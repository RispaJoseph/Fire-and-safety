<?php include_once("../shares/db/mydatabase.inc");?>
 <?php include("top.php"); ?>
 <head>
<style>
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 80%;
                   margin-left:0px;
                   
               }
               th {
    background-color: #17c3a2;
    color: white;
    height: 40px;
}
tr{
    height: 30px;
    border-bottom: 1px solid #ddd;
}

    </style>
 </head><?php
					$sql="select login_reg.*,seller_reg.* from login_reg JOIN seller_reg ON login_reg.username=seller_reg.email where login_reg.status='1' " ;
                     $tbl=getDatas($sql);
					?>
			
	
	<h1 style="position:relative;left:520px;top:120px;">Approved Sellers</h1>

	<table border="1" style="position:relative;width:900px;left:260px;top:150px;">

	<tr>
								
	<th> Name</th>
	<th>Address</th>
	<th> email</th>
	<th> license no</th>
	<th> anyidproof</th>
	
							
							
	
							
	</tr>
	<?php
        for($i=0;$i<count($tbl);$i++)
    {
for($j=0;$j<count($tbl[$i]);$j++)
{
}
    ?>

<tr>

<td><?php echo $tbl[$i][5];?></td>
<td><?php echo $tbl[$i][6];?></td>
<td><?php echo $tbl[$i][7];?></td>
<td><?php echo $tbl[$i][8];?></td>
 <td><img src="<?php echo $tbl[$i][9]; ?>" width="50" height="50"></td>
</tr>
<?php
}

?>
</table>

		
					