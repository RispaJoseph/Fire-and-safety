<?php session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php"); ?>

<head>
<style>
        
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: green;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 400px;
            }
			
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit] {
    background-color: tomato;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: #ac2925;
}


    </style>
 </head>
 
 <?Php
 if(isset($_POST['id']))
 {

$a=$_POST['id'];
//echo $a;
	
		
		
 
$sql="select * from addproduct_reg where addproduct_id='$a'";
$tbl=getDatas($sql);
$stock=$tbl[0][5];
$pname=$tbl[0][1];
//$quantity=1;
$price=$tbl[0][6];
$img=$tbl[0][8];
$cat=$tbl[0][3];
     $seller=$tbl[0][9];
     date_default_timezone_set('Asia/Calcutta');
$d = date("M-d-Y");
		$s=strtotime("+10 day");
       $k=date("M-d-Y", $s);
$sql="select ifnull(max(oid),0)+1 from myorder";
	$tbl=getDatas($sql);
	$oid=$tbl[0][0];

 
		//echo $accbal;
$sql="insert into myorder values('$oid','$user','$pname','$price','$d','credit','processing','$k','$img','$cat','$seller')";
	       setDatas($sql);
		   
		   echo "
		    <div style='position:relative;left:450px;top:120px;'>
			<font color='red'>Buyer Name:</font>$user<br>
			<font color='red'>Product:</font>$pname<br>
			
			<font color='red'>Price:</font>$price<br>
			<font color='red'>Order Date:</font>$d<br>
			<font color='red'>Expected Delivery:</font>$k<br>
			
			we will get back to you shortly!!!!! Thank You.
			</div>
 	";

 }

?>













