<?php


$r = $_GET['red']/255;
$g = $_GET['green']/255;
$b = $_GET['blue']/255;
$rel1 = $_GET['r1'];

if (isset($_GET["red"])){
exec('echo 22=' .escapeshellarg($r). '  > /dev/pi-blaster');
exec('echo 17=' .escapeshellarg($g). '  > /dev/pi-blaster');
exec('echo 18=' .escapeshellarg($b). '  > /dev/pi-blaster');
}
if(isset($_GET["r1"]))
{
exec('gpio mode 29 out');
exec('gpio write 29 ' .escapeshellarg($rel1). ' ');
}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>K.V.Udit - Room Control</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
 <link rel="stylesheet" type="text/css" href="spectrum/spectrum.css">
     <script type="text/javascript" src="spectrum/docs/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="spectrum/spectrum.js"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div class = "bgimage"></div>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Raspberry-Pi  </span>Dashboard
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Lighting</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Appliance Control</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Settings</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row-fluid">
                    <div class="col-md-8 col-md-offset-2">
					
					 <h1><span class="light">Room </span>Control</h1>
                        <p class="intro-text"><br></p>
						 <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="#about" class="btn btn-default btn-lg page-scroll"><i class="glyphicon glyphicon-sunglasses"></i> <span class="network-name">Lighting</span></a>
                    </li>
                    <li>
                        <a href="#download" class="btn btn-default btn-lg page-scroll"><i class="glyphicon glyphicon-off"></i> <span class="network-name">Appliance Control</span></a>
                    </li>
                    <li>
                        <a href="#contact" class="btn btn-default btn-lg page-scroll"><i class="glyphicon glyphicon-cog"></i> <span class="network-name">Settings</span></a>
                    </li>
                </ul>
						
						
						
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row-fluid">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Lighting</h2>
				<input type='text' id="full" />
				<br>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div >
                    <h2>Appliance Control</h2>
					<div>
					<!--start buttons-->
					
<div class="row-fluid settings">
<div class = "col-sm-2 col-xs-6 col-md-2  ">
		<div class="row-fluid">
          <div class="question">
          </div>
          <div class="switch">
            <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-1" data-on="Monitor" data-off="Monitor"></label>
          </div>
        </div>
	</div>		
	<div class = "col-sm-2 col-xs-6 col-md-2  ">	
	<div class="row-fluid">
          <div class="question">
         </div>
          <div class="switch">
            <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-2" data-on="ON" data-off="OFF"></label>
          </div>
        </div>
				</div>
				
				<div class = "col-sm-2 col-xs-6 col-md-2  ">	
				<div class="row-fluid">
          <div class="question">
         </div>
          <div class="switch">
            <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-3" data-on="ON" data-off="OFF"></label>
          </div>
        </div>
				</div>
				
				<div class = "col-sm-2 col-xs-6 col-md-2  ">	
				<div class="row-fluid">
          <div class="question">
         </div>
          <div class="switch">
            <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-4" data-on="ON" data-off="OFF"></label>
          </div>
        </div>
				</div>
				
					<div class = "col-sm-2 col-xs-6 col-md-2  ">	
				<div class="row-fluid">
          <div class="question">
         </div>
          <div class="switch">
            <input id="cmn-toggle-5" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-5" data-on="ON" data-off="OFF"></label>
          </div>
        </div>
				</div>
				
					<div class = "col-sm-2 col-xs-6 col-md-2  ">	
				<div class="row-fluid">
          <div class="question">
         </div>
          <div class="switch">
            <input id="cmn-toggle-6" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-6" data-on="ON" data-off="OFF"></label>
          </div>
        </div>
				</div>
				<div class = "col-sm-2 col-xs-6 col-md-2  ">
		<div class="row-fluid">
          <div class="question">
          </div>
          <div class="switch">
            <input id="cmn-toggle-7" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-7" data-on="ON" data-off="OFF"></label>
          </div>
        </div>
	</div>	
	<div class = "col-sm-2 col-xs-6 col-md-2  ">
		<div class="row-fluid">
          <div class="question">
          </div>
          <div class="switch">
            <input id="cmn-toggle-8" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-8" data-on="ON" data-off="OFF"></label>
          </div>
        </div>
	</div>	
	<div class = "col-sm-2 col-xs-6 col-md-2  ">
		<div class="row-fluid">
          <div class="question">
          </div>
          <div class="switch">
            <input id="cmn-toggle-9" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-9" data-on="ON" data-off="OFF"></label>
          </div>
        </div>
	</div>	
	<div class = "col-sm-2 col-xs-6 col-md-2  ">
		<div class="row-fluid">
          <div class="question">
          </div>
          <div class="switch">
            <input id="cmn-toggle-10" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-10" data-on="ON" data-off="OFF"></label>
          </div>
        </div>
	</div>	
	<div class = "col-sm-2 col-xs-6 col-md-2  ">
		<div class="row-fluid">
          <div class="question">
          </div>
          <div class="switch">
            <input id="cmn-toggle-11" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-11" data-on="ON" data-off="OFF"></label>
          </div>
        </div>
	</div>	
	<div class = "col-sm-2 col-xs-6 col-md-2  ">
		<div class="row-fluid">
          <div class="question">
          </div>
          <div class="switch">
            <input id="cmn-toggle-12" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-12" data-on="ON" data-off="OFF"></label>
          </div>
        </div>
	</div>	
	
</div>				
					
					
					
					
				<!--End-->	
				</div>
					
					
                       <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row-fluid">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Settings</h2>
                <p>asd</p>
                <p><a href="mailto:feedback@startbootstrap.com">asd</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; K.V.Udit</p>
        </div>
    </footer>

   

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

	
	
</body>

</html>
