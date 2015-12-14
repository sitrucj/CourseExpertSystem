<?php
//  Array ( [program] => Bachelor of Computer Science (General) [course] => 60-257 )
echo '<a href="/" >Home</a> <h5>POST:</h5>';
print_r($_POST);
echo '</br>------------------------		</br>';

$ProgramsXML = simplexml_load_file('../course_programs.xml') or die("Error: can't load programs file");

// list($element) = $doc->xpath('/*/seg[@id="A12"]');
list($element) = $ProgramsXML->xpath('/*/program[@name="Bachelor of Computer Science (General)"]/course[@id="60-257"]');
print_r($element);


?>