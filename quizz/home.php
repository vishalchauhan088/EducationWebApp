<?php

    $server = "localhost";
    $user = "root";
    $passw = "";
    $db = "neet";

    $conn = mysqli_connect($server,$user,$passw,$db);

    if($conn){
        // echo " Connection succesfull!!!";
        
    }
    else{
        echo "Failed to connect!!!";
        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/home.css">
</head>


<body>


    <nav>
        <section class="nav">
            <h1 class="fitem" id="logo" class="fitem">EDU.IN</h1>
            <div id="link-list" class="fitem">
                <a href="../index.php">HOME</a>
                <a href="../practice.php">Practice</a>
                <a href="" download>notes</a>
                <a href="home.php">Quizz</a>

            </div>
        </section>
    </nav>

    <div class="box">

        <div class="header">
            <h1>Kinematics Quizz</h1>

            <p id="note">NOTE: There are 10 mulitple choice question</p>

        </div>

        


        <form action="check.php" method="post">

        
    
        <?php
         $qn=1;
         for($i=1;$i<11;$i++){


         $sql = "select * from kinematics_ques where qid=$i";
         $result = mysqli_query($conn, $sql);

         while($rows = mysqli_fetch_array($result)){
             ?>


            <div class="each-que-box">
                 <h4><?php echo "Q".$qn. ".".$rows['que']?></h4>

                 <?php
                         $s= "select * from kinematics_opt where question_id= $i";
                         $r = mysqli_query($conn,$s);

                         while($row = mysqli_fetch_array($r)){
                             ?>

                             <div class="opt">
                                 <input type="radio" name="quizcheck[ <?php  echo $row['question_id']; ?>  ] " value="<?php echo $row['option_id']; ?>">
                                 <?php echo $row['opt']; ?>
                             </div>

                 <?php
                         }

                 ?>



            </div>

    <?php
        }

        $qn++;

        }
    ?>
    <input type="submit" name="submit" class="btn">
    <input type="reset" value="reset" class="btn">

</form>

</div>
  
</body>
</html>