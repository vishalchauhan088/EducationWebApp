<?php
    $servername="localhost";
    $username = "root";
    $password = "";
    $database = "user_info";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    $fname = $_POST['fname'];
    $fphone = $_POST['fphone'];
    $femail = $_POST['femail'];
    $fmessage = $_POST['fmessage'];
    echo "Connected succesfully";
    $sql = "INSERT INTO contant_us
            (name,phone_no, email,message)
            VALUES
            ('$fname',$fphone,'$femail','$fmessage')";

   
    
   $result =  mysqli_query($conn, $sql);
//    echo mysqli_num_rows($result);
    
   if($result){
    echo "<br>";
    echo "the record has been inserted succesfully ";
   

   }
   else{
    echo "The record was not inserted ---->".mysqli_error($conn);
   }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome<?php echo"  " .$_POST['fname'];?></h1>
    <p>thanks for contacting us , We will reach you soon </p>
</body>
</html>

