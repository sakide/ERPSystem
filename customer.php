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
    $title=$_POST['title'];
    $first=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $mobile=$_POST['concatc_number'];
    $district=$_POST['district'];
    
    $sql="insert into customer (title,first_name,last_name,contact_no,district) values ('$title','$first','$lastname','$mobile','$district') ";
    mysqli_query($con,$sql);

   
    mysqli_close($con);
}




?>




<html>
    <head>
      
    </head>
    <body bgcolor="applegreen">
        <h1><b><u><center>Customer Form</center></u></b></h1>

        <form  class="form-inline" action="customer.php" method="post" style="margin: auto; width: 220px;" >
            Title : <br>
            <input type="text" name="title" placeholder="Mr/Mrs/Miss/Dr">
            <br><br>
            First Name : <br>
            <input type="text" name="first_name" placeholder="Enter the First name">
            <br><br>
            Last Name : <br>
            <input type="text" name="last_name" placeholder="Enter the Last name">
            <br><br>
            Contact Number : <br>
            <input type="text" name="concatc_number" placeholder="Enter the Contact number">
            <br><br>
            District : <br>
            <input type="text" name="district" placeholder="Enter the District">
            
            <br><br>
            <a href="http://localhost/ERP%20System/Item.php"><input type="submit" value="Submit" name="save" ></a>
            <input type="submit" value="Cancel">
            
        </form>
        
</html>