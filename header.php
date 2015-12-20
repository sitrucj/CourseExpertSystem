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
			  <ul class="nav navbar-nav">
				<li ><a href="index.php">Home</a></li>
				<li ><a href="http://www1.uwindsor.ca/cs/" target="_blank">CS Homepage</a></li>
				<li ><a href="http://web4.uwindsor.ca/units/registrar/calendars/undergraduate/cur.nsf/982f0e5f06b5c9a285256d6e006cff78/40a4d00a28a9d3e685257362006c8367!OpenDocument" target="_blank">CS Programs</a></li>
				<li ><a href="http://web4.uwindsor.ca/units/registrar/calendars/undergraduate/cur.nsf/Search+Main/FB6695172A9A1BA385257364004A8752?OpenDocument" target="_blank">CS Courses</a></li>
				<li><a href="/admin.php">Admin Pannel</a></li>
				</ul>


				<ul class="nav navbar-nav pull-right">
					<li><a href=""></a></li>
				</ul>

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
