<?php
$host ="localhost";
$username ="root";
$pass ="";
$con =mysqli_connect($host,$username,$pass,"assignment");
if (!$con)
{
    die('Could not connect:'.mysqli_error());
}
if(isset($_POST['save']))
{
    $item_code=$_POST['itmcde'];
    $item_name=$_POST['itm_name'];
    $item_category=$_POST['itm_ctgry'];
    $item_sub_category=$_POST['itm_sb_ctgry'];
    $quantity=$_POST['qnty'];
    $unit_price=$_POST['unt_prce'];
    
    $sql="insert into item(Item_code,Item_name,Item_category,Item_sub_category,Quantity,Unit_price) values ('$item_code','$item_name','$item_category','$item_sub_category','$quantity','$unit_price') ";
    mysqli_query($con,$sql);

   
    mysqli_close($con);
}




?>




<html>
    <head>
      
    </head>
    <body bgcolor="applegreen">
        <h1><b><u><center>Item Form</center></u></b></h1>

        <form  class="form-inline" action="Item.php" method="post" style="margin: auto; width: 220px;" >
            Item code : <br>
            <input type="text" name="itmcde" placeholder="Enter the Item code">
            <br><br>
            Item name : <br>
            <input type="text" name="itm_name" placeholder="Enter the Item name">
            <br><br>

            Item category : <br>
            <input type="text" name="itm_ctgry" placeholder="Enter the Item category"> 

            <br><br>
            Item sub category : <br>
            <input type="text" name="itm_sb_ctgry" placeholder="Enter the Item sub category">
            <br><br>
            Quantity : <br>
            <input type="text" name="qnty" placeholder="Enter the Quantity">
            <br><br>

            Unit price : <br>
            <input type="text" name="unt_prce" placeholder="Enter the Unit price">

            <br><br>
            <input type="submit" value="Submit" name="save" >
            <input type="submit" value="Cancel">
            
        </form>
        
</html>