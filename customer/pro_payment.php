<?php session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php"); ?>

<head>
<style>
 


.aa:link, .aa:visited {
  background-color: #f44336;
  color: white;
  padding: 20px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.aa:hover, .aa:active {
  background-color: red;
}
        
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
                height: 200px;
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
$b=$_POST['radio'];
//echo $b;
 
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
$balstock=$stock-1;
$sql="select ifnull(max(oid),0)+1 from myorder";
	$tbl=getDatas($sql);
	$oid=$tbl[0][0];
	//echo "orderid------".$oid;
if($stock<=0){
					echo "<div style='position:relative;top:250px;left:620px;'><font color='red'>Sorry No Stock available...</font></div>";
		}
		else
		{
		
		$sql="update addproduct_reg set quantity='$balstock' where addproduct_id='$a'";
		setDatas($sql);
	

if($b=="credit"){
	?>
<h3 style="position:relative;left:620px;top:130px;">CARD Info.  </h3>
    	<div class="div1"  style="position:relative;top:150px;">
        <form action="card.php" method="post">
           
            <table style="position: relative;left:10px;top:10px">
                <tr>
                    <td>
                        <label>  Card Number</label>
                    </td>
                    <td>
                        <input type="text" name="cno" required />
						<input type="text" name="id" value="<?php echo $a;?>" hidden required />
                      </td>
                </tr>
                      
		   </td></tr>
                 
                   <tr>
                    <td>
                        <label> Password</label>
                    </td>
                    <td>
                        <input type="password" name="pass" required />
                      </td>
                </tr>
           <tr><td></td></tr>                    
				<tr><td></td><td><input type="submit" value="verify"/></td></tr>
            </table>
            
            
        </form></div>

 
<?php
}
 else{
	 
	$sql="insert into myorder values('$oid','$user','$pname','$price','$d','cod','processing','$k','$img','$cat','$seller')";
	       setDatas($sql);
	echo "
		    <div style='position:relative;left:450px;top:120px;'>
			<font color='green'><b>Buyer Name:</b></font>$user<br>
			<font color='green'><b>Product:</b></font>$pname<br>
			
			<font color='green'><b>Price:</font></b>$price<br>
			<font color='green'><b>Expected Delivery:</b></font>$k<br>
			<font color='green'><b>Order Date:</b></font>$d<br>
			we will get back to you shortly!!!!! Thank You.
			</div>
		";
	
 }
 
 }
 }
?>













