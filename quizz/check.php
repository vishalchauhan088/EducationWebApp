<?php

    error_reporting(0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "neet";

    $conn = mysqli_connect($servername,$username,$password,$database);

    $result = 0;
   $count = count($_POST['quizcheck']);
//    echo $count;
   $selected = $_POST['quizcheck'];

   
//    print_r($selected); //prints what user has selected;


   $sql = "select * from kinematics_opt where correct=1";

   $query = mysqli_query($conn, $sql);
 
    $i=1;

    $k=1;

    foreach($selected as $x => $x_value) {
        // echo "Key=" . $x . ", Value=" . $x_value;
        // echo "<br>";
        $age[$k]=$x_value;
        $k++;

    }

   while($rows = mysqli_fetch_array($query) ){
    // echo "<br>";
    // echo $rows['opt'];
    
   
    
    // echo "<br>";
    // echo $rows['opt'];
    // echo "<br> hellow";
    // print_r($selected);

    $checked = $rows['option_id'] == $age[$i];

    
   
    if($checked==1){
        $result=$result+1;

    }
   
   

    $i=$i+1;

   }

   print_r($rows);


   
//    echo "<br>asldfkj".$i;
//    echo "your score is:".$result;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
     <link rel="stylesheet" href="../css/check.css" >
    
</head>
<body>

   <div class="box">
        <div class="margin">

            
            <section class="each-section">

            
                    <div class="head">
                            <h1>Result</h1>
                    </div>

                    <div class="score-show">


                            <table>
                                <tr>
                                  <th>Total Question</th>
                                  <th>Total Attempted</th>
                                  <th>Total Correct</th>
                                </tr>
                                <tr>
                                  <td>10</td>
                                  <td><?php echo $count;?> </td>
                                  <td><?php echo $result;?></td>
                                </tr>
                               
                              </table>
                    </div>

            </section>

            <section class="each-section">

                    <div class="head">
                        <h1>Answers</h1>
                    </div>

                    <div class="answer-table">

                            <table>
                                <tr>
                                  <th>Question NO.</th>
                                  <th>Answers</th>
              
                                </tr>
                                <?php
                                    $ans_sql = "select * from kinematics_opt where correct=1";
                                    $ans_query = mysqli_query($conn, $ans_sql); 
                                    while($row=mysqli_fetch_array($ans_query)){
                                    ?>

                                        <tr>
                                             <td><?php echo $row['question_id']; ?></td>
                                            <td><?php echo $row['opt'] ?></td>
                                        </tr>

                                    
                                <?php
                                    }


                                ?>

                               
                              </table>

                    </div>
            </section>

            <section class="go-back">
                <button id="go-back" type="button" onclick="go_back()">Go Back</button>
            </section>

        </div>
   </div>
        <script>
            function go_back(){
                window.location="website\quizz\home.php";
                
            }
        </script>
    
</body>
</html>