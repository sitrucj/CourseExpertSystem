
<?php include("header.php") ?>

 </div>
</div>
<!-- close main container -->


 <div class="container ">

<h3>Computer Science Automated Undergraduate Course Advice System</h3>

<?php

// ------------ course_program.xml
$xmlProgDoc = new DOMDocument();
$xmlProgDoc->load( 'course_programs.xml' );
$xmlprogram = $xmlProgDoc->getElementsByTagName( "program" );
$program_xpath = new DOMXPath( $xmlProgDoc );


// --------------- get user submitted command from the form
$txtcmd="";
if (isset($_POST['txtcmd'])) //checking if user passes commands
{
	// ---------------- READ USER INPUT
	$term = $_POST['term'];
	$program = $_POST['program'];
	echo "<h4><b>Course Sequence</b> for $program</h4>";
	if (isset($_POST['course']))
	{
		$course = $_POST['course'];
	}

	// ----------------
	$txtcmd=$_POST['txtcmd']; // storing commands into php var

	// ------------- open temp file and store user command in it
	$file = 'onlinecmd.clp';
	$txtcmd ="(load advising.clp)\r\n";
	$txtcmd .='(load "rules_'.$program.'.clp")';
	$txtcmd .="\r\n(reset)";
	$txtcmd .="\r\n" . "(assert (cur-term (term ".$term.")))";
	// ---- assert all courses that has been taken
	if (isset($course))
	{
		foreach ($course as $courseitem=>$value) {
			 $txtcmd .= "\r\n" ."(assert (has-taken (course ".$value."))) ";
		}
	}
	$txtcmd .="\r\n" . "(assert (courseCompleted n)))"; // tell advising.clp that we have done course selection.


	$txtcmd .="\r\n(run)";
	//$txtcmd .="\r\n(facts)";


	$txtcmd .="\r\n(close)\r\n(exit)\r\n(exit)\r\n";

	file_put_contents($file, $txtcmd);


	// -------------- call CLIPS to execute command from file (onlinecmd.clp)
	//$doscmd='"C:\Program Files (x86)\CLIPS/CLIPSDOS64.exe"  -f '. $file;
	//$doscmd='"clips/CLIPSDOS.exe"  -f '. $file;
		// $doscmd='/Users/curtis/bin/clips -f '.$file;
		doscmd='/usr/bin/clips -f '.$file;
		$output = shell_exec($doscmd);

	/* FOR DEBUG UNCOMMENT BELOW LINES */
	// echo "<pre>";
	// echo 'doscmd: ',$doscmd,"\n";
	// echo 'output:',$output;
	/* FOR DEBUG UNCOMMENT ABOVE LINES */

	// $splitted=explode("(run)",$output);  					// IMPORTANT on windows
	$splitted=explode("(courseCompleted n)))",$output);		// IMPORTANT on linuxP
	$splitted=explode("CLIPS>",$splitted[1]);
	echo "<pre>" . $splitted[0]."</pre>";


	// ---- program notes
	$searchForProgramCourse = $program_xpath->query( '//program[@name="'.$program.'"]/note' );
	if ($searchForProgramCourse->length>0)
	{
		//echo "<h1>Additional Notes</h1><pre>" . $searchForProgramCourse[0]->nodeValue ."</pre>";
		echo "<h4><b>Additional Notes</b></h4><pre>" . $searchForProgramCourse->item(0)->nodeValue ."</pre>";

	}


}

?>
<a href="javascript:history.back()">Back</a> | <a href="index.php">Start Over</a>
</div>
<!-- reopen main container -->
 <div class="container maincont ">
  <div class="leftcont col-md-12" role="main">

<?php include("footer.php") ?>
