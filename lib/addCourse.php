
<!-- AddCourse is the code to add the the course, it's pre and anti requsites to a specific program.
	From the form: Array ( [program] => name [course] => num [prereq] => num [antireq] => num [f] => on [w] => on [s] => on ) -->

<?php
	print_r($_POST);
	echo '<a href="/" >Home</a>';

$ProgramsXML = simplexml_load_file('../course_programs.xml') or die("error: can't load course_programs.xml");
$AntireqXML= simplexml_load_file("../course_antirequisite.xml") or die("error: can't load antireq xml");
$PrereqXML= simplexml_load_file("../course_prerequisite.xml") or die("error: can't load prereq xml");
$TermsXML= simplexml_load_file("../courseterms.xml") or die("error: can't load terms xml");


//add course to program XML
$exists = False;
$i = 0;
foreach ($ProgramsXML->program as $program) // search for correct program
{
	if ((string)$program['name'] ==  $_POST['program']) {
		foreach ($program->course as $course) {
			if ((string)$course['id'] == $_POST['course']) {
				$exists = True;
				break;
			}
		}
		break;
	}
	$i += 1;
}
if (!$exists) {
	$newCourse = $ProgramsXML->program[$i]->addChild('course');
	$newCourse->addAttribute('id', $_POST['course']);
	$ProgramsXML->asXML('../course_programs.xml');
}


//add prereqs

//add antireqs

//add terms
$exists = False;
foreach ($TermsXML->course as $course) { // check if course exists
	if ((string)$course['id'] == $_POST['course']) {
		$exists = true;
		break;
	}
}

if (!$exists) {
	$newEntry = $TermsXML->addChild('course');
	$newEntry->addAttribute('id', $_POST['course']);
	if ($_POST['f']) {
		$newEntry->addChild('term', f);
	}
	if ($_POST['w']) {
		$newEntry->addChild('term', w);
	}
	if ($_POST['s']) {
		$newEntry->addChild('term', s);
	}
	$TermsXML->asXML('../courseterms.xml'); //save
	unlink($exists);
}


?>