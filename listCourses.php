<?php

//load course programs
if (file_exists('course_programs.xml')) {
	$coursePrograms = simplexml_load_file('course_programs.xml');

//print courses by program
foreach ($coursePrograms->program as $program)
{
	echo $program['name'], "<br><ul>";
	foreach ($program->course as $course) {
		echo "<li>", $course['id'], "</li>";
	}
	echo "</ul><br>";
	}
}
else
{
	exit('Failed to open course_programs.xml.');
}


?>


