

 
<?php
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<html>
<head>  
 <style>  
     table{
         width: 800px;
         height: 500px;
     }
     input[type=text],input[type=email],input[type=date] ,input[type=password],select,textarea{
    width:100%;
    padding: 13px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
     }
         label
         {
             color: black;
         }
     input[type=submit] ,input[type=reset]{
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    float: right;
     }
     
     }
   

    </style>   
<script src="maha.js"></script>
</head>
<body>
<div style="position:relative;border:groove;left:320px;height:700px;width:900px;top:100px;background-color:#ccc ">
<br>
<form action="" method="post" enctype="multipart/form-data">
<h3 style="position: relative;left:320px;"><font color="black">CUSTOMER REGISTRATION</font></h3>
<div id="err" style="color: #ccc;height: 20px"></div>

<br>
<table style="position:relative;left:50px;height:600px;">
<tr>
    
    <td>NAME</td>    
    <td><input type="text" name="name"></td>
    </tr>
     <tr>
    <td>ADDRESS</td>    
     <td><textarea name="address"></textarea></td>
    </tr> 
    <tr>
    <td>Gender</td>
    <td> <input type="radio" name="gender" value="male">Male
    
<input type="radio"  name="gender" value="female">Female
        </td>
         <tr>
           <tr>
        <td>Phoneno</td>    
        <td><input type="text" name="phoneno" required="" onkeypress="return verifyPhone(this,event,'err')" onblur="return varifyLength(this,'err',10,10);"></td>
        </tr>
        <tr>
        <td>Email</td>    

    <td><input type="text" name="email"></td>
    </tr>
    <tr>
    <td>Password:</td>
            <td><input type="password" name="password"></td>
            </tr>
            <tr>
        <td>Cfpassword:</td>
                <td><input type="password" name="cfpassword"></td>
            </tr>
        <tr>
        <td><input type="submit" value="SUBMIT"></td>
    <td><input type="reset" value="RESET"></td>
    </tr>
    </table>
    </form>
    </div>
    </body>
</html>

<?php 
if(isset($_POST['name'])) {

$sql="select ifnull(max(customer_id),0)+1 from customer_reg";
$tbl= getDatas($sql);
$a=$_POST['name'];
$b=$_POST['address'];
$c=$_POST['gender'];
$d=$_POST['phoneno'];
$e=$_POST['email'];
$f=$_POST['password'];

$g=$_POST['cfpassword'];
if($f==$g){
$sql="insert into customer_reg values('$tbl[0][0]','$a','$b','$c','$d','$e')";
     setDatas($sql);
         
         $sql="insert into login_reg values('$e','$f','customer','1')";
         setDatas($sql);
msgbox("success");
}
else
{
    msgbox('password mismatch');
}

}
?>
    
     
            




                                                   



























