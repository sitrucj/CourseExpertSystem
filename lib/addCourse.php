
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
	unset($exists);
	unset($newCourse);
}


//add prereqs
// string as "course( or course)+, course" where course is dd-ddd

$exists = False;
$course = "/\d{2}-\d{3}/"; //individual course regex
$or = "/\d{2}-\d{3}( or \d{2}-\d{3})+/"; // two or more courses with or regex
$comma = "/[,]+/";	// split on comma regex

// if course is already in file exit
foreach ($PrereqXML->course as $key) {
	if ((string)$key['id'] == $_POST['course']){
		$exists = True;
		break;
	}
}

if (!$exists){
	$newCourse = $PrereqXML->addChild('course');
	$newCourse->addAttribute('id', $_POST['course']);

	$matches = preg_split($comma, $_POST['prereq']);
	foreach ($matches as $match) {
		if(!empty(preg_match($or, $match, $arrayMatch))){
			preg_match_all($course, $arrayMatch[0], $courses);
			$newCourse->addChild('prereq');
			foreach ($courses[0] as $key) {
				$newCourse->prereq->addChild('or', $key);
			}
		} elseif (!empty(preg_match($course, $match, $arr))) {
			$newCourse->addChild('prereq');
			$newCourse->addChild('or', $arr[0]);
		}
	}
	$PrereqXML->asXML("../course_prerequisite.xml");
	unset($exists);
}

//add antireqs
$exists = False;


// if course is already in file exit
foreach ($AntireqXML->course as $key) {
	if ((string)$key['id'] == $_POST['course']){
		$exists = True;
		break;
	}
}

if (!$exists){
	$newCourse = $AntireqXML->addChild('course');
	$newCourse->addAttribute('id', $_POST['course']);

	$matches = preg_split($comma, $_POST['antireq']);
	foreach ($matches as $match) {
		if(!empty(preg_match($or, $match, $arrayMatch))){
			preg_match_all($course, $arrayMatch[0], $courses);
			$newCourse->addChild('antireq');
			foreach ($courses[0] as $key) {
				$newCourse->antireq->addChild('or', $key);
			}
		} elseif (!empty(preg_match($course, $match, $arr))) {
			$newCourse->addChild('antireq');
			$newCourse->addChild('or', $arr[0]);
		}
	}
	$AntireqXML->asXML("../course_antirequisite.xml") or die('error saving');
	unset($exists);
}

// add terms
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
	unset($exists);
}


?>