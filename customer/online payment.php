
<?php
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<html>
<head>  
 <style>  
     table{
         width: 800px;
         height: 300px;
     }
         label
         {
             color: red;
         }
     input[type=submit],input[type=reset]{
         background-color:bisque;
         color: green;
         height:50px;
         width: 50px;
         border: none;
         border-radius: 4px;
     }
     input[type=submit]:hover,input[type=reset]:hover{
         background-color: beige;
     }
    </style>   
<title> ONLINE PAYMENT FORM</title>
</head>
<body>
<h1 style="position:relative;left:400px;top:100px;color:blue";> ONLINE PAYMENT FORM</h1>
<form action="" method="post">
<table style="position:relative;left:400px;top:100px">
<tr>
    <td><label>card holder</label></td>
    <td><input type="text" name="cardholder"></td>
    </tr>
    <tr>
    <td><label>card no</label></td>
    <td><input type="text" name="cardno"></td>
    </tr>
    <tr>
    <td><label>date</label></td>
    <td><input type="date" name="date"></td>
    </tr>
    <tr>
    <td><label>cvv</label></td>
    <td><input type="text" name="cvv"></td>
    </tr>
    <tr>
    <td><input type="submit" value="Submit"></td>
    <td><input type="reset" value="Reset"></td>
    </tr>
    </table>
    </form>
    </body>
    </html>

<?php 
if(isset($_POST['cardholder'])) {

$sql="select ifnull(max(payment_id),0)+1 from payment_reg";
$tbl= getDatas($sql);
    
$a=$_POST['cardholder'];
$b=$_POST['cardno'];
$c=$_POST['date'];
$d=$_POST['cvv'];

$sql="insert into payment_reg values('$tbl[0][0]','$a','$b','$c','$d')";
     setDatas($sql);
         
    msgbox('success');
}




?>
    
     
            
































