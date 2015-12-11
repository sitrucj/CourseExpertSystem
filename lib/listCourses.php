<?php

//load course programs
	$coursePrograms = simplexml_load_file('course_programs.xml') or die("error: can't load course_programs.xml");
//print courses by program
	foreach ($coursePrograms->program as $program)
	{
		echo $program['name'], "<br><ul>";
		foreach ($program->course as $course) {
			echo "<li>", $course['id'], "</li>";
		}
		echo "</ul><br>";
	}
?>


