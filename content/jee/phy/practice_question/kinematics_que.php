
<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "phy_practice_question";

    $conn = mysqli_connect($server, $user, $pass , $db);


    $sql = "select * from kinematics";
    $query =  mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Question</title>
</head>
<body>
    <nav>
    <?php include '../../../../topnav.php' ?>
    </nav>
   
    <div class="box">
        <div class="margin">

            <div class="heading">

            </div>

                <div class="question">
                    <ol>

                             <?php
                                 while($row=mysqli_fetch_array($query)){
                                     ?>

                                     <li class="each-question"><?php echo $row['questions'];?></li>


                             <?php
                                 }
                             
                             ?>
                    </ol>
                    


                </div>
        </div>
    </div>
   
    
</body>
</html>