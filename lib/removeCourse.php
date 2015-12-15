<?php
//  Array ( [program] => Bachelor of Computer Science (General) [course] => 60-257 ) [removeAll] => on )
echo '<a href="/" >Home</a> <h5>POST:</h5>';
print_r($_POST);
echo '</br>------------------------		</br>';

if ($_POST['removeAll']) { // section removes all the related data for the course being removed.
	$ProgramsXML = simplexml_load_file('../course_programs.xml') or die("error: can't load course_programs.xml");
	$AntireqXML = simplexml_load_file("../course_antirequisite.xml") or die("error: can't load antireq xml");
	$PrereqXML = simplexml_load_file("../course_prerequisite.xml") or die("error: can't load prereq xml");
	$TermsXML = simplexml_load_file("../courseterms.xml") or die("error: can't load terms xml");
	$reqxpath = '/*/course[@id="'.$_POST['course'].'"]';  // path in anti and prereq xml files to delete
	// Antireq
	unset($AntireqXML->xpath($reqxpath)[0]->{0});
	$AntireqXML->asXML("../course_antirequisite.xml");
	// Prereq
	unset($PrereqXML->xpath($reqxpath)[0]->{0});
	$PrereqXML->asXML("../course_prerequisite.xml");
	// terms
	unset($TermsXML->xpath($reqxpath)[0]->{0});
	$TermsXML->asXML("../courseterms.xml");

	// Remove course from all programs
	$programxpath = '/*/*/course[@id="'.$_POST['course'].'"]';
	echo $programxpath."</br>";
	$toRemoveList = $ProgramsXML->xpath($programxpath);
	foreach ($toRemoveList as $remove) {
		unset($remove[0]->{0});
		echo "</br>";
	}
	$ProgramsXML->asXML('../course_programs.xml');


} else { // just remove it individually from the single program
	$xpath = '/*/program[@name="'.$_POST['program'].'"]/course[@id="'.$_POST['course'].'"]'; // path to delte in programs.xml
	unset($ProgramsXML->xpath($xpath)[0]->{0});
	$ProgramsXML->asXML('../course_programs.xml');
}


?>