<?php

//load course programs
if (file_exists('course_programs.xml')) {
	$coursePrograms = simplexml_load_file('course_programs.xml');
	echo $coursePrograms->program[0]->course['id'];
} else {
	exit('Failed to open course_programs.xml.');
}



?>