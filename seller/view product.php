<?php
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<head>
<style>
 table{
                   border: 3px solid #111;
                   border-radius: 1px;
                   width: 1100px;
                   margin-left:0px;
                   
               }
               th {
    background-color: #17c3a2;
    color: white;
    height: 50px;
    text-align: center;
}
tr{
    height: 20px;
    border-bottom: 1px solid #ddd;
     text-align: center;
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
    <h1 style="position: relative;left:650px;top:50px;color:black;">PRODUCTS</h1>
    <table border="1"style="position:relative;left:180px;top:90px;width:1100px;">
    <tr>
    <th>Image</th>
    <th>Name</th>
    <th>Brand</th>
    <th>Category</th>
    <th>Use</th>
    <th>Stockdate</th>
    <th>Price</th>
    <th>Quantity</th>
    
    </tr>
    <?php
        for($i=0;$i<count($tbl);$i++)
    {
for($j=0;$j<count($tbl[$i]);$j++)
{
}
    ?>

<tr>

<td><b><img src="<?php echo $tbl[$i][8]; ?>" width="100" height="100"></b></td>
<td><b><?php echo $tbl[$i][1];?></b></td>
<td><b><?php echo $tbl[$i][2];?></b></td>
<td><b><?php echo $tbl[$i][3];?></b></td>
<td><b><?php echo $tbl[$i][4];?></b></td>
<td><b><?php echo $tbl[$i][5];?></b></td>
<td><b><?php echo $tbl[$i][6];?></b></td>
<td><b><?php echo $tbl[$i][7];?></b></td>



</tr>
<?php
}
}
?>  
</table>








