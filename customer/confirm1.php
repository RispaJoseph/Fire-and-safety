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
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: #4CAF50;
}


    </style>
 
	
		<!---feedback-->
			<?php
		if(isset($_GET['id'])){
			$a=$_GET['id'];
			$sql="select name,brand,price from addproduct_reg where addproduct_id='$a'";
			$tbl=getDatas($sql);
			
		}
?>
	
    <h3 style="position: relative;left:620px;top:150px;">CONFIRM </h3>
    	<div class="div1"  style="position: relative;top:180px;">
        <form action="pro_payment.php" method="post">
           
            <table style="position: relative;left:10px;top:30px">
                <tr>
                    <td><b>
                        <label>  Name</label>
                    </td></b>
                    <td>
                        <input type="text" name="name" value="<?php echo $user;?>" readonly="">
                      </td>
                </tr>
           <tr><td></td></tr>
                 
                   <tr>
                    <td><b>
                        <label>Product name</label>
                    </td></b>
                    <td> <input type="text" name="id" hidden value="<?php echo $a;?>" >
                        <input type="text" name="pname" value="<?php echo $tbl[0][0];?>" >
                      </td>
                </tr>
           <tr><td></td></tr>
               
               <tr>
                    <td><b>
                        <label> brand</label>
                    </td></b>
                    <td>
                        <input type="text" name="brand" value="<?php echo $tbl[0][1];?>" required=""/>
                      </td>
                </tr>
           <tr><td></td></tr>
		   <tr>
                    <td><b>
                        <label>  Price</label>
                    </td></b>
                    <td>
                        <input type="text" name="price" value="<?php echo $tbl[0][2];?>" readonly="">
                      </td>
                </tr>
           <tr><td></td></tr>
		   
		    <tr>
                    <td><b>
                        <label> Payment Type</label>
                    </td></b>
                    <td>
                        <input type="radio" name="radio" value="cod" checked>Cash On Delivery</td><td>
						<input type="radio" name="radio" value="credit">Credit/Debit
                      </td>
                </tr>
           <tr><td></td></tr>
         
               
				<tr><td></td><td><input type="submit" value="CONFIRM"></td></tr>
            </table>
            
            
        </form></div>
                                   </div>
								   
        <div class="clearfix"></div>

	
