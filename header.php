<!DOCTYPE html>
<html>
<head runat="server">
    <title>Student Advisory System</title>
    <!-- Bootstrap -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
	<link href="css/jquery.dataTables.css" rel="stylesheet" />
	<!-- multiselect js -->
	<script src="js/jquery.multi-select.js"></script>
	<script src="js/jquery.quicksearch.js"></script>
	 <link href="css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  <script src="js/listgroup.js"></script>

	<!-- Live Reload -->
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</head>
<body>


        <!--- top div  -->



    <nav class="topnav">
	  <!-- logo -->
	  <div class="container topnavlogo">
		<a href="http://uwindsor.ca"> <img src="images/logo.png" /> </a>
	  </div>
	  <!-- menu -->
	  <div  class="topnavlinks">
		  <div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>

				  </button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">

				</div><!--/.nav-collapse -->
		  </div>
	  </div>

    </nav>



        <!--- top ends  -->
        <div class="clear"></div>


        <!-- main container -->
        <div class="container maincont ">


            <div class="leftcont col-md-12" role="main">
                <div id="ajaxloadingdiv" class="ajaxloadingdiv" ></div>
