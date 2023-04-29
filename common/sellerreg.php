<?php

include("../shares/db/mydatabase.inc");
include("top.php");
?>
<html>
<head>
    <style>
table{
         width: 800px;
         height:600px;
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
<div style="position:relative;border:groove;left:320px;height:720px;width:900px;top:100px;background-color:#ccc ">
<br>
<form action="" method="post" enctype="multipart/form-data">
<h3 style="position: relative;left:220px;"><font color="black">COMPANY REGISTRATION</font></h3>
<div id="err" style="color: #ccc;height: 20px"></div>

<br>
<table style="position:relative;left:50px;height:600px;">

        <tr>
            <td>Name:</td>
 
         <td><input type="text" name="name" required="" onkeypress="return verifyText(event,'err')"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea name="address"></textarea></td>
        </tr>
        <tr>
        <td>Email:</td>
            <td><input type="email" name="email"></td>
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
        <td>Licenseno:</td>
            <td><input type="text" name="licenseno"></td>
            </tr>

        <tr>

        <td>Anyidproof:</td>
            <td><input type="file" name="file"></td>
            </tr>

         <tr>
        <td>Phoneno</td>    
        <td><input type="text" name="phoneno" required="" onkeypress="return verifyPhone(this,event,'err')" onblur="return varifyLength(this,'err',10,10);"></td>
        </tr>
        
        <tr>

            <td><input type="submit" name="submit"></td>
           <td> <input type="reset" name="cancel"></td>

        </tr>    
        </table>
        </form>
        </div>
    </body>
</html>
<?php
   $fldr = "../uploads";
    $allowedExts = array("jpg", "gif", "jpeg","mp4");
    $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $f=$_FILES["file"]["name"];
    
    //echo "upload/$f";

    
    $size = $_FILES["file"]["size"];
    if($_FILES["file"]["size"] > 5000000)
    {
        die("File Size is ".($size/1000000)."MB, Maximum allowed size is 5MB");
    }
    if ((($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "video/mp4"))
    
    && ($_FILES["file"]["size"] <= 50000000)
    && in_array($extension, $allowedExts)){
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Return Code: " .$_FILES["file"]["error"]. "<br />";
        }
        else
        {
        if (file_exists("$fldr/" .$_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],"$fldr/" . $_FILES["file"]["name"]);
            

            $mv_name = $_FILES["file"]["name"];     
            $mv_type = $_FILES["file"]["type"];
                $fname=$fldr."/".$mv_name;
            $mv_size = $_FILES["file"]["size"];
      
        
         $n1=$_POST['name'];
         echo $n1;
     $n2=$_POST['address'];
     $n3=$_POST['email'];
     $n4=$_POST['password'];
     $n5=$_POST['cfpassword'];
     $n6=$_POST['licenseno'];
     $n7=$_POST['phoneno'];
     

     $n8=$_POST['file'];
if($n4==$n5)
{
  $sql="select ifnull(max(seller_id),0)+1 from seller_reg";
    $tbl=getDatas($sql);
     $sql="insert into seller_reg values('$tbl[0][0]','$n1','$n2','$n3','$n6','$fname','$n7')";
     setDatas($sql);
     $sql="insert into login_reg values('$n3','$n4','seller','0')";
     setDatas($sql);
         
     msgbox('success');
     }
else
{
    msgbox('password mismatch');
}
        }
        }
    }

?>

                             
    
    
    
    
    