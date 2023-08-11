<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="read.css">
    <link rel="stylesheet" href="./css/read.css">

    <style>
       
    </style>
</head>

<body>

    <nav>

        <?php include 'topnav.php' ?>
    </nav>

    <div id="main-content">

        <div class="margin">

            <div class="body-heading">
                    <h1>PREVIOUS YEAR PAPER</h1>
            </div>

            <div id="toggle-btn">
                <button name='button' onclick="jeemains()">JeeMains</button>
                <button name='button' onclick="neet()">neet</button>
                <button name='button' onclick="classx()">Class 10</button>
            </div>

            <div id="jee" class="jee">
                <div class="heading">
                    <h2>Jee mains </h2>
                </div>

                <div class="syllabus">



                    <div id="physics-syllabus" class="syllabus-item">
                        <div id="phy-heading" class="subject-heading"><h2> Jee Previous Year Paper</h2></div>
                        <div id="phy-list" class="chapter-list">
                            <ol>
                                <li><a href="xyz.pdf" download>2010</a></li>
                                <li><a href="#">2011</a></li>
                                <li><a href="#">2012 </a></li>
                                <li><a href="#">2013</a></li>
                                <li><a href="#">2014</a></li>
                                <li><a href="#">2015</a></li>
                                <li><a href="#">2016</a></li>
                                <li><a href="#">2017</a></li>
                                <li><a href="#">2018</a></li>
                                <li><a href="#">2019</a></li>
                                <li><a href="#">2021</a></li>
                                <li><a href="#">2022 </a></li>
                                <li><a href="#">2023 </a></li>
                                <!-- <li><a href="#">2021 </a></li>
                                <li><a href="#">2021 </a></li>
                                <li><a href="#">201</a></li>
                                <li><a href="#">201 </a></li>
                                <li><a href="#">201</a></li>
                                <li><a href="#">201</a></li>
                                <li><a href="#">201</a></li> -->
                              </ol>

                        </div>

                    </div>


                    




                </div>
            </div>



            <div id="neet" class="neet">
                <div class="heading">
                    <h2>Neet </h2>
                </div>

                <div class="syllabus">

                    <div id="physics-syllabus" class="syllabus-item">
                        <div id="phy-heading" class="subject-heading"><h2>Neet Previous Year Paper</h2></div>
                        <div id="phy-list" class="chapter-list">
                            <ol>
                                <li><a href="#">2010</a></li>
                                <li><a href="#">2011</a></li>
                                <li><a href="#">2012 </a></li>
                                <li><a href="#">2013</a></li>
                                <li><a href="#">2014</a></li>
                                <li><a href="#">2015</a></li>
                                <li><a href="#">2016</a></li>
                                <li><a href="#">2017</a></li>
                                <li><a href="#">2018</a></li>
                                <li><a href="#">2019</a></li>
                                <li><a href="#">2021</a></li>
                                <li><a href="#">2022 </a></li>
                                <li><a href="#">2023 </a></li>
                            </ol>

                        </div>

                    </div>


                    


                </div>
            </div>



            <div id="class-x" class="class-x">
                <div class="heading">
                    <h2>Class 10 board</h2>
                </div>

                <div class="syllabus">

                </div>
            </div>

        </div>


    </div>


    <script src="./js/read.js"></script>


</body>

</html>