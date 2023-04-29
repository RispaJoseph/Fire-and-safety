
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
     input[type=text],input[type=feedbacktype] ,input[type=describe feedback],input[type=email],select,{
    width: 200%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    resize: vertical;
     }
     label
         {
             color:green;
         }
     input[type=submitfeedback],{
         background-color:  #4CAF50;
         color: blue;
         height:100px;
         width: 100px;
         border: none;
         border-radius: 50px;
     }
     input[type=submit feedback]:hover {
         background-color: beige;
              }
    </style>  
    <title>FEEDBACK FORM
</title>
</head>
<body>
<form action="" method="post">
<h1 style="position:relative;left:500px;top:70px;color:#17c3a2";>FEEDBACK FORM</h1>
<table style="position:relative;left:400px;top:120px">
<tr> 
    <td><b><label>Name:</label></td>    </b>
    <td><input type="text" name="name"></td>
    </tr>
    <tr> 
    <td><b><label>Email:</label></td>  </b>  
    <td><input type="email" name="email"></td>
    </tr>
    <tr>
    <td><b><label>Feedbacktype </label></td></b>
    <td> <input type="radio" name="feedbacktype" value="comment">comment
        <input type="radio"  name="feedbacktype" value="bugreports">bugreports
        <input type="radio"  name="feedbacktype" value="questions">questions
        </td></tr>
        <tr>
        <td><b><label>Describefeedback</label></td></b>
       <td><input type ="text" name="describefeedback"></td>
       </tr>
       <tr>
    <td><b><input type="submit" value="Submit"></td></b>
    </tr>
       </table>
       </form>
       </body>
       </html>
       <?php
if (isset($_POST['name'])) {

        $sql="select ifnull(max(feedback_id),0)+1 from feedback_reg";
        $tbl=getDatas($sql);
        
         $n1=$_POST['name'];
         echo $n1;

     $n2=$_POST['email'];
     $n3=$_POST['feedbacktype'];
     $n4=$_POST['describefeedback'];
     

     $sql="insert into feedback_reg values('$tbl[0][0]','$n1','$n2','$n3','$n4')";
     setDatas($sql);
     msgbox('success');
     }

    

    ?>



