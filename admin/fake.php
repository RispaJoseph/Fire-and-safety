
 
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
<div style="position:relative;border:groove;left:320px;height:1080px;width:900px;top:100px;background-color:#ccc ">
<br>
<form action="" method="post" enctype="multipart/form-data">
<h3 style="position: relative;left:320px;"><font color="black">BIODATA</font></h3>
<div id="err" style="color: #ccc;height: 20px"></div>

<br>
<table style="position:relative;left:50px;height:600px;">
<tr>
    <td>Name</td>
     <td><input type="text" name="name" required="" onkeypress="return verifyText(event,'err')"></td>

    </tr>
    <tr>
    <td>Address</td>
    <td><textarea name="address"></textarea></td>
    </tr>
    <tr>
    <td>Gender</td>
    <td> <input type="radio" name="gender" value="male">Male
        <input type="radio"  name="gender" value="female">Female
        </td>
         <tr>
    <td>Dob</td>    
    <td><input type="date" name="dob"></td>
    </tr>
        <tr>
    <td>Age</td>    
    <td><input type="text" name="email"></td>
    </tr>
     <tr>
    <td>Qualification</td>    
    <td><input type="text" name="email"></td>
    </tr>
    <tr>
    <td></td>    
    <td><input type="text" name="phoneno" required="" onkeypress="return verifyPhone(this,event,'err')" onblur="return varifyLength(this,'err',10,10);"></td>
    
   
    </tr>
    <tr>
    <td>Email</td>    
    <td><input type="email" name="email"></td>
    </tr>
    <tr>
    <td>Height</td>    
    <td><input type="text" name="email"></td>
    </tr>
    <tr>
    <td>Weight</td>    
    <td><input type="text" name="email"></td>
    </tr>
     <tr>
    <td>Colour</td>    
    <td><input type="text" name="email"></td>
    </tr>
     <tr>
    <td>Caste</td>    
    <td><input type="text" name="email"></td>
    </tr>
     <tr>
    <td>Religion</td>    
    <td><input type="text" name="email"></td>
    </tr>
     <tr>
    <td>Job</td>    
    <td><input type="text" name="email"></td>
    </tr>
     <tr>
    <td>Company name</td>    
    <td><input type="text" name="email"></td>
    </tr>
     <tr>
    <td>Salary</td>    
    <td><input type="text" name="email"></td>
    </tr> 
    <tr>
    <td>Job location</td>    
    <td><input type="text" name="email"></td>
    </tr>
     <tr>
    <td>Image</td>    
    <td><input type="file" name="email"></td>
    </tr>

 

   
    <td><input type="submit" value="SUBMIT"></td>
    <td><input type="reset" value="RESET"></td>
    </tr>
    </table>
    </form>
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
    
     
            




                                                   



























