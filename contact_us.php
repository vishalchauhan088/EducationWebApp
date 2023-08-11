<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/contact_us.css">
</head>
<body>


    <nav>
               
         <?php include 'topnav.php' ?>
    </nav>

    <div class="main">
        <h1>Contact Us</h1>
        <p>Leave your contact and message here:-</p>

        <div class="form-area">
            <form action="userinfo.php" method="post">
                <div class="input">

                <span>Name: </span> <input type="text" name="fname" id="name" required>
                
                </div>
                <div class="input">
                    <span>Mobile NO. :</span><input type="number" name="fphone" id="phone" required>
                </div>

                <div class="input">

                    <span>Email :</span> <input type="email" name="femail" id="email" required>
                </div>

                <div class="input">
                    <span>Message</span>
                    <input type="text" maxlength="500" name="fmessage"  id="message" required>


                </div>

                <div class="input">
                    <input type="submit" value="submit">
                </div>
               
               
               
              
            </form>
        </div>
       
    </div>

    
</body>
</html>