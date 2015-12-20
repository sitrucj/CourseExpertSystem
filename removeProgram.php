<?php
include('header.php');
if ($_POST['program'] == "Choose a program") {
	die('Choose a program to remove');
}
$ProgramsXML = simplexml_load_file('course_programs.xml') or die("error: can't load course_programs.xml");
$path = '/*/program[@name="'.$_POST['program'].'"]';
if (!empty($ProgramsXML->xpath($path)[0]->{0})){
	unset($ProgramsXML->xpath($path)[0]->{0});
	$ProgramsXML->asXML('course_programs.xml') or die('something went wrong when saving');
	echo $_POST['program'].' removed.';
} else echo "Could not find the program ".$_POST['program'];
?>