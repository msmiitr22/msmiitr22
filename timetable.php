<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TIMETABLE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

    <link href="css/sheet.css" rel="stylesheet">
	 <link rel="icon" type="image/png" href="./img/icons/time.png">
    <link href="css/timetable.css" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="./img/icons/time.png" width="100.06px" height="60px">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./index.html#intro">Home</a></li>
        <li><a href="./index.html#about">About Branch</a></li>
		<li><a href="./index.html#service">Features</a></li>
		<li><a href="./index.html#contact">Contact Us</a></li>
		<li><a href="./branchmates.html">Branchmates</a></li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="main">
      <h1><br><br>TIMETABLE</h1>
      <h3>CLICK ON YOUR SUBBATCH</h3>
      <div class = "row">
        <div class="col-md-6"><div class="subbatch" id="s3">S3</div></div>
        <div class="col-md-6"><div class="subbatch" id="s4">S4</div></div>
      </div>
      <div class = "day-tt">
      <div class="row" id="s3-tday">
        <div class = "col-md-1">
          <div  class="day-tt-slot days"><?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("l");
                                            echo $a;
                                          ?>
          </div>
        </div>
        <div class = "col-md-1">
          <div  class="day-tt-slot"><div class="time">8:00 - 8:55</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s3/".$a."1.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">9:00 - 9:55</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s3/".$a."2.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">10:00 - 10:55</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s3/".$a."3.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">11:05 - 12:00</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s3/".$a."4.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">12:05 - 13:00</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s3/".$a."5.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">14:00 - 14:55</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s3/".$a."6.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">15:00 - 15:55</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s3/".$a."7.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">16:05 - 17:00</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s3/".$a."8.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">17:05 - 18:00</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s3/".$a."9.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
      </div>


      <div class="row" id="s4-tday">
        <div class = "col-md-1">
          <div  class="day-tt-slot days"><?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("l");
                                            echo $a;
                                          ?>
          </div>
        </div>
        <div class = "col-md-1">
          <div  class="day-tt-slot"><div class="time">8:00 - 8:55</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s4/".$a."1.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">9:00 - 9:55</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s4/".$a."2.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">10:00 - 10:55</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s4/".$a."3.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">11:05 - 12:00</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s4/".$a."4.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">12:05 - 13:00</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s4/".$a."5.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">14:00 - 14:55</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s4/".$a."6.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">15:00 - 15:55</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s4/".$a."7.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">16:05 - 17:00</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s4/".$a."8.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>
        <div class = "col-md-1"><div  class="day-tt-slot"><div class="time">17:05 - 18:00</div><div class="details">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $a = date("N");
                                            $file = fopen("./timetable/s4/".$a."9.txt","r");
                                            echo fgets($file);
                                            fclose($file);
                                          ?>
          </div></div>
      </div>

      </div>

      </div>
      <h3>Click Here to get <a href="https://drive.google.com/open?id=1ZkQn2aenDi7uAQ_cB8YRzsmDeul5dHiY" target="blank">full Time-Table</a>.</h3>
    </div>
  <footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p style="font-family: 'Nunito';">Made with <img src="https://cdn0.iconfinder.com/data/icons/df_On_Stage_Icon_Set/128/Heart.png" width="50px" alt="heart icon" height="50px"> by: Bhavesh & Praduman</p>
					<p>&copy;Copyright 2018 - MSM-22. All rights reserved.</p>
				</div>
			</div>	
		</div>
	</footer>


    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script src="js/timetable.js"></script>

</body>

</html>
