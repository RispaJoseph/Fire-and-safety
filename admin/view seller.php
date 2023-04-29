
<?php
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<head><style>
 table{
                   border: 2px solid #111;
                   border-radius: 1px;
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
    text-align: center;
}

    </style>
</head>

<?php
$sql="select login_reg.*,seller_reg.* from login_reg JOIN seller_reg ON login_reg.username=seller_reg.email where login_reg.status='0' " ;
                     $tbl=getDatas($sql);
if($tbl==null)
{
    echo "<div style='position:relative;top:250px;left:620px;'><font color='red'>NO new registerations...</font></div>";

}
else
{
    ?>
    <h1 style="position: relative;left:500px;top:100px;color:black;"> NEW SELLERS</h1>
    <table border="1"style="position:relative;left:150px;top:150px;">
    <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Email</th>
    <th>Licenseno</th>
    <th>Anyidproof</th>
    <th colspan="2">APPROVAL</th>
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

<td>
<a href="?id=<?php echo $tbl[$i][0];?>& mode=app">APPROVE</a>
<a href="?id=<?php echo $tbl[$i][0];?>& mode=rej">REJECT</a>
</td>

</tr>


<?php
}
}

?>
    
</table>
<?php

if(isset($_GET['id'])){

  $id=$_GET['id'];
  $m=$_GET['mode'];
  echo $id;
  echo $m;
  if($m=="app"){
    $sql="update login_reg set status='1' where username='$id' ";
    setDatas($sql);
    msgbox('success');
    nextpage('approve.php');
  
  }
  else
  {
    $sql="update login_reg set status='0' where username='$id' ";
    setDatas($sql);
     msgbox('success');

   
}
}
?>