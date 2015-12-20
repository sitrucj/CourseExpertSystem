<?php
// echo '<a href="/" >Home</a><br>';
// print_r($_POST);
// echo '<br>';
include('header.php');
$ProgramsXML = simplexml_load_file('../course_programs.xml') or die("error: can't load course_programs.xml");
$path = '/*/program[@name="'.$_POST[program].'"]';
unset($ProgramsXML->xpath($path)[0]->{0});
$ProgramsXML->asXML('../course_programs.xml');
?>