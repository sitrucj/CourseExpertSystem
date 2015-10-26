<?php

//load course programs
if (file_exists('course_programs.xml')) {
	$coursePrograms = simplexml_load_file('course_programs.xml');

	foreach ($coursePrograms->program as $program) {
		echo $program['name'], "<br><ul>";
		foreach ($program->course as $course) {
			echo "<li>", $course['id'], "</li>";
		}
	echo "</ul><br>";
	}
} else {
	exit('Failed to open course_programs.xml.');
}

/* For each <character> node, we echo a separate <name>. */
foreach ($movies->movie->characters->character as $character) {
   echo $character->name, ' played by ', $character->actor, PHP_EOL;
}

?>


