<?php 
 include_once("../shares/db/mydatabase.inc"); 
 ?>
 <?php include("admin_top.php"); ?>
<html>
<head>
<script src="maha.js"></script>
    <style>
        
       
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
			 height:50px;
           
             
            }
            label{
                color: green;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 800px;
                height: 600px;
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
<body>
<div id="err" style="color: red;height: 20px"></div>

<div class="w3_login">
			<h3 style="position: relative;top:130px;left:620px">ADD PRODUCT </h3>
			
        <form action="" method="post" enctype="multipart/form-data">
            <table style="position: relative;left:190px;top:155px">
                <tr>
                    <td>
                        <label>Product Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" onkeypress="return verifyText(event,'err')"  required="">
                      </td>
                </tr>
           <tr><td></td></tr>
                 <tr>
                    <td>
                        <label>Brand Name</label>
                    </td>
                    <td>
                        <input type="text" name="name2" onkeypress="return verifyText(event,'err')"  required="">
                      </td>
                </tr> <tr><td></td></tr>
                 <tr>
                    <td>
                         <label>Category</label>
                    </td>
                    <td>
                        <select name="category">
                          
							<option value="bone">Bone</option>
							<option value="muscle">Muscle</option>
                            <option value="strength">strength</option>
                                     </select>
                      </td>
                </tr> <tr><td></td></tr>
              
                 <tr>
                    <td>
                         <label>Uses</label>
                    </td>
                    <td>
                        <textarea name="use" ></textarea>
                      </td>
                </tr> <tr><td></td></tr>

                 <tr>
                    <td>
                        <label>Price per packet</label>
                    </td>
                    <td>
                        <input type="text" name="price" required="">
                      </td>
                </tr> <tr><td></td></tr>
                 <tr>
                    <td>
                        <label> Quantity </label>
                    </td>
                    <td>
                        <input type="text" name="quantity" required="">
                      </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <label> Stock Date </label>
                    </td>
                    <td>
                        <input type="date" name="date" required="">
                      </td>
                </tr>
                <tr><td></td><td>
				 <tr>
                    <td>
                        <label> Image </label>
                    </td>
                    <td>
                        <input type="file" name="file" required="">
                      </td>
                </tr>
                <tr><td></td><td>
                        <input type="submit" value="ADD"/>
            </table>
            
            
        </form>
                                   </div>
        <div class="clearfix"></div>
			
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
			
			 $a=$_POST['name'];
            $e=$_POST['use'];
			$g=$_POST['price'];
			$h=$_POST['quantity'];
			$b=$_POST['name2'];
			$c=$_POST['category'];
			
			$i=$_POST['date'];
			
			$sql="select ifnull(max(aid),0)+1 from addproduct";
			$tbl=getDatas($sql);
		$sql="insert into addproduct values('$tbl[0][0]','$a','$b','$c','$e','$g','$h','$i','$fname')";
		setDatas($sql);
			
			//echo "saved".$fname;
			msgbox('successfully uploaded');
		}
		}
	}
	/*else
	{
		echo "Invalid file";
	}
*/
?>
        <!-- Bootstrap Core JavaScript -->
<script src="../temp/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="../temp/js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>