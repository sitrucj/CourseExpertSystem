<?php
//Array ( [program] => "Program name" [courses] =>"List of courses" [notes] => "nottes" )
include('header.php');
if (empty($_POST['program']))
	die("Must enter a program name ");
	elseif (empty($_POST['courses'])) {
		die('please enter courses');
	}
// Load Programs xml
$ProgramsXML = simplexml_load_file('course_programs.xml') or die("error: can't load course_programs.xml");
$path = '/*/program[@name="'.$_POST['program'].'"]';
if (empty($ProgramsXML->xpath($path))){ // do not duplicate programs
	$newProgram = $ProgramsXML->addChild('program');
	$newProgram->addAttribute('name', (string)$_POST['program']);
	$regexCommaSpace = "/[, ]+/";
	$matches = preg_split($regexCommaSpace, $_POST['courses']);
	foreach ($matches as $match) {
		$newProgram->addChild("course")->addAttribute('id', $match);
	}
	$newProgram->addChild('note', $_POST['notes']);
	$ProgramsXML->asXML('course_programs.xml') or die("Changes Failed"); // Save changes
	echo "<br>saved ", $_POST['program'];
} else echo "<br>", $_POST['program']," already exists";




?>