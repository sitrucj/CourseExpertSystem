<?php
//  Array ( [program] => Bachelor of Computer Science (General) [course] => 60-257 )
echo '<a href="/" >Home</a> <h5>POST:</h5>';
print_r($_POST);
echo '</br>------------------------		</br>';

$ProgramsXML = simplexml_load_file('../course_programs.xml') or die("Error: can't load programs file");
$xpath = '/*/program[@name="'.$_POST['program'].'"]/course[@id="'.$_POST['course'].'"]';
unset($ProgramsXML->xpath($xpath)[0]->{0});
$ProgramsXML->asXML('../course_programs.xml');
?>