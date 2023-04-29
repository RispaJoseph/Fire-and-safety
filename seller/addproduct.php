<?php
session_start();
$user=$_SESSION['userid'];
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<!DOCTYPE html>
<html>
<head>    
 <style>  
     table{
         width: 800px;
         height: 300px;
     }
     input[type=text],input[type=email],input[type=date] ,input[type=password],select,textarea{
    width: 100%;
    font: 5px;
    padding: 11px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    left:500px;
     }
     th{
         color:#17c3a2;
         background-color:#17c3a2;
     }
         label
         {
             color:black;
             font-size:20px;
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
     input[type=submit]:hover,input[type=reset]:hover{
         background-color: beige;
     }
    </style>   
<title>ADD PRODUCT
</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<h1 style="position:relative;left:480px;top:40px;color:#17c3a2";>ADD PRODUCT</h1>
<table style="position:relative;left:200px;top:100px;width:800px;">
<tr>
    <td><b>
    <label>Name</label></b>
    </td>
    <td><input type="text" name="name"></td>
    </tr>
    <tr>
    <td><b>
    <label>Brand</label>
        </b>
    </td>
    <td><input type="text" name="brand"></td>
    </tr>
    <tr>
    <td><b>
    <label>Category</label>
    <td></b>
    <select name="category">
    <option value="fireextinguisher">Fireextinguisher</option>
    <option value="jackets">Jackets</option>
    </select>
    </td>
    <tr>
    <td><b>
    <label>Use</label>
        </b>
    </td>
    <td><input type="text" name="use"></td>
    </tr>
    <tr>
    <td><b>
    <label>Stockdate</label>
        </b>
    </td>    
    <td><input type="date" name="stockdate"></td>
    </tr>
    <tr>
    <td><b>
    <label>Price</label>
        </b>
    </td>   
    <td><input type="text" name="price"></td>
    </tr>
    <tr>
    <td><b>
    <label>Quantity</label>
        </b>
    </td> 
    <td><input type="text" name="quantity"></td>
    </tr>
    <tr>
   <td><b>
   <label>Image</label>
       </b>
   </td>    
    <td><input type="file" name="file"></td>
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
     $n2=$_POST['brand'];
     $n3=$_POST['category'];
     $n4=$_POST['use'];
     $n5=$_POST['stockdate'];
     $n6=$_POST['price'];
     $n7=$_POST['quantity'];
     $n8=$_POST['file'];
     

      $sql="select ifnull(max(addproduct_id),0)+1 from addproduct_reg";
        $tbl=getDatas($sql);

     $sql="insert into addproduct_reg values('$tbl[0][0]','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$fname','$user')";
     setDatas($sql);
     msgbox('successfully uploaded');
     }}

    }
    



    ?>
    
            