
<!-- Array ( [program] => name [course] => num [prereq] => num [antireq] => num [f] => on [w] => on [s] => on ) -->

<?php
	print_r($_POST);
	echo '<a href="/" >Home</a>';

$ProgramsXML = simplexml_load_file('../course_programs.xml') or die("error: can't load course_programs.xml");
$AntireqXML= simplexml_load_file("../course_antirequisite.xml") or die("error: can't load antireq xml");
$PrereqXML= simplexml_load_file("../course_prerequisite.xml") or die("error: can't load prereq xml");
$TermsXML= simplexml_load_file("../courseterms.xml") or die("error: can't load terms xml");


//add course to program
$i = 0;

foreach ($ProgramsXML->program as $program) // search for correct program
{
	if ((string)$program['name'] ==  $_POST['program']) {
	break;
	}
	$i += 1;
}
$newCourse = $ProgramsXML->program[$i]->addChild('course');
$newCourse->addAttribute('id', $_POST['course']);

print_r($newCourse);
print_r($ProgramsXML);
$ProgramsXML->asXML('../course_programs.xml');

//add prereqs

//add antireqs

//add terms

?>

<!--
$movies = new SimpleXMLElement($xmlstr);

$character = $movies->movie[0]->characters->addChild('character');
$character->addChild('name', 'Mr. Parser');
$character->addChild('actor', 'John Doe');

$rating = $movies->movie[0]->addChild('rating', 'PG');
$rating->addAttribute('type', 'mpaa');

echo $movies->asXML();
-->