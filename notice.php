<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NOTICE BOARD</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

    <link href="css/sheet.css" rel="stylesheet">
	 <link rel="icon" type="image/png" href="./img/icons/notice.png">
    <link href="css/notice.css" rel="stylesheet">
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
                    <img src="./img/icons/notice.png" width="64.06px" height="40px">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">About Branch</a></li>
		<li><a href="#service">Features</a></li>
		<li><a href="#contact">Contact Us</a></li>
		<li><a href="#">Branchmates</a></li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0"></li>
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
    <li data-target="#myCarousel" data-slide-to="10"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" data-interval="false">
  <h1>NOTICE</h1>
    <div class="item active">
       <div class="times">
          <div class="time">#1</div>
          <div class="date"><?php $file1 = fopen("./notice/notices/10.txt", "r"); $a=fgets($file1); echo $a; fclose($file1);?></div>
          <div class="time"><?php $file1 = fopen("./notice/notices/10.txt", "r"); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        </div>
        <div class="head"><?php $file1 = fopen("./notice/notices/10.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        <div class="content"><?php $file1 = fopen("./notice/notices/10.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); $a=fread($file1,filesize("./notice/notices/10.txt"));echo $a; fclose($file1);?></div>
    </div>

    <div class="item">
       <div class="times">
          <div class="time">#2</div>
          <div class="date"><?php $file1 = fopen("./notice/notices/9.txt", "r"); $a=fgets($file1); echo $a; fclose($file1);?></div>
          <div class="time"><?php $file1 = fopen("./notice/notices/9.txt", "r"); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        </div>
        <div class="head"><?php $file1 = fopen("./notice/notices/9.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        <div class="content"><?php $file1 = fopen("./notice/notices/9.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); $a=fread($file1,filesize("./notice/notices/9.txt"));echo $a; fclose($file1);?></div>

    </div>

    <div class="item">
       <div class="times">
          <div class="time">#3</div>
          <div class="date"><?php $file1 = fopen("./notice/notices/8.txt", "r"); $a=fgets($file1); echo $a; fclose($file1);?></div>
          <div class="time"><?php $file1 = fopen("./notice/notices/8.txt", "r"); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        </div>
        <div class="head"><?php $file1 = fopen("./notice/notices/8.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        <div class="content"><?php $file1 = fopen("./notice/notices/8.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); $a=fread($file1,filesize("./notice/notices/8.txt"));echo $a; fclose($file1);?></div>
    </div>

    <div class="item">
       <div class="times">
          <div class="time">#4</div>
          <div class="date"><?php $file1 = fopen("./notice/notices/7.txt", "r"); $a=fgets($file1); echo $a; fclose($file1);?></div>
          <div class="time"><?php $file1 = fopen("./notice/notices/7.txt", "r"); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        </div>
        <div class="head"><?php $file1 = fopen("./notice/notices/7.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        <div class="content"><?php $file1 = fopen("./notice/notices/7.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); $a=fread($file1,filesize("./notice/notices/7.txt"));echo $a; fclose($file1);?></div>

    </div>

    <div class="item">
       <div class="times">
          <div class="time">#5</div>
          <div class="date"><?php $file1 = fopen("./notice/notices/6.txt", "r"); $a=fgets($file1); echo $a; fclose($file1);?></div>
          <div class="time"><?php $file1 = fopen("./notice/notices/6.txt", "r"); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        </div>
        <div class="head"><?php $file1 = fopen("./notice/notices/6.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        <div class="content"><?php $file1 = fopen("./notice/notices/6.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); $a=fread($file1,filesize("./notice/notices/6.txt"));echo $a; fclose($file1);?></div>
    </div>

    <div class="item">
       <div class="times">
          <div class="time">#6</div>
          <div class="date"><?php $file1 = fopen("./notice/notices/5.txt", "r"); $a=fgets($file1); echo $a; fclose($file1);?></div>
          <div class="time"><?php $file1 = fopen("./notice/notices/5.txt", "r"); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        </div>
        <div class="head"><?php $file1 = fopen("./notice/notices/5.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        <div class="content"><?php $file1 = fopen("./notice/notices/5.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); $a=fread($file1,filesize("./notice/notices/5.txt"));echo $a; fclose($file1);?></div>
    </div>

    <div class="item">
       <div class="times">
          <div class="time">#7</div>
          <div class="date"><?php $file1 = fopen("./notice/notices/4.txt", "r"); $a=fgets($file1); echo $a; fclose($file1);?></div>
          <div class="time"><?php $file1 = fopen("./notice/notices/4.txt", "r"); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        </div>
        <div class="head"><?php $file1 = fopen("./notice/notices/4.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        <div class="content"><?php $file1 = fopen("./notice/notices/4.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); $a=fread($file1,filesize("./notice/notices/4.txt"));echo $a; fclose($file1);?></div>
    </div>

    <div class="item">
       <div class="times">
          <div class="time">#8</div>
          <div class="date"><?php $file1 = fopen("./notice/notices/3.txt", "r"); $a=fgets($file1); echo $a; fclose($file1);?></div>
          <div class="time"><?php $file1 = fopen("./notice/notices/3.txt", "r"); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        </div>
        <div class="head"><?php $file1 = fopen("./notice/notices/3.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        <div class="content"><?php $file1 = fopen("./notice/notices/3.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); $a=fread($file1,filesize("./notice/notices/3.txt"));echo $a; fclose($file1);?></div>
    </div>

    <div class="item">

       <div class="times">
          <div class="time">#9</div>
          <div class="date"><?php $file1 = fopen("./notice/notices/2.txt", "r"); $a=fgets($file1); echo $a; fclose($file1);?></div>
          <div class="time"><?php $file1 = fopen("./notice/notices/2.txt", "r"); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        </div>
        <div class="head"><?php $file1 = fopen("./notice/notices/2.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        <div class="content"><?php $file1 = fopen("./notice/notices/2.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); $a=fread($file1,filesize("./notice/notices/2.txt")); echo $a; fclose($file1);?></div>
    </div>

    <div class="item">
       <div class="times">
          <div class="time">#10</div>
          <div class="date"><?php $file1 = fopen("./notice/notices/1.txt", "r"); $a=fgets($file1); echo $a; fclose($file1);?></div>
          <div class="time"><?php $file1 = fopen("./notice/notices/1.txt", "r"); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        </div>
        <div class="head"><?php $file1 = fopen("./notice/notices/1.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); echo $a; fclose($file1);?></div>
        <div class="content"><?php $file1 = fopen("./notice/notices/1.txt", "r"); $a=fgets($file1); $a=fgets($file1); $a=fgets($file1); $a=fread($file1,filesize("./notice/notices/1.txt")); echo $a; fclose($file1);?></div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
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

</body>

</html>
