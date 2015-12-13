<?php
//$xml=simplexml_load_file("courseterms.xml");


// load xml files and store in variables
// ------------ course_program.xml
$xmlProgDoc = new DOMDocument();
$xmlProgDoc->load( 'course_programs.xml' );
$xmlprogram = $xmlProgDoc->getElementsByTagName( "program" );
$program_xpath = new DOMXPath( $xmlProgDoc );


// ------------ courseterms.xml
$xmlDoc = new DOMDocument();
$xmlDoc->load( 'courseterms.xml' );
$xml = $xmlDoc->getElementsByTagName( "course" );

// ------------ course_prerequisite.xml
$xmlPrereqDoc = new DOMDocument();
$xmlPrereqDoc->load( 'course_prerequisite.xml' );
$prereq_xpath = new DOMXPath( $xmlPrereqDoc );

// ------------ course_antiequisite.xml
$xmlAntireqDoc = new DOMDocument();
$xmlAntireqDoc->load( 'course_antirequisite.xml' );
$antireq_xpath = new DOMXPath( $xmlAntireqDoc );

/*
THIS PHP FILE WILL GENERATE CLIPS COURSES RULES FOR EACH PROGRAM ex: rules_Applied Computing.clp
1. will loop through course_programs.xml
2. will get all courseterms.xml
3. all prereq from course_prerequisite.xml
4. all anti requisite from course_antiequisite.xml

*/
// loop thru all programs
foreach( $xmlprogram as $programNode )
{

	generateProgramRules($programNode);
}
// generate rules for each program and create a file for it
function generateProgramRules($programNode)
{
	global $xml, $antireq_xpath, $prereq_xpath, $program_xpath; // use previous variables
	$programname = $programNode->getAttribute('name'); // get program name from object programnode
	//echo $programname ;
	$clipsrule ="; #################### THIS FILE WAS GENERATE BY build.php #################### \n";

	// -- for each courseterms
	foreach( $xml as $coursenode )
	{
			// check if program available.
			$courseID = $coursenode->getAttribute('id');
			// matching course ids
			$searchForProgramCourse = $program_xpath->query( '//program[@name="'.$programname.'"]//course[@id="'.$courseID.'"]' );
			//print_r($searchForProgramCourse->length);
			if ($searchForProgramCourse->length<=0)
			{
				// this course is not found for this program, continue to next course.
				continue;
			}

			// display course id
			//echo $courseID;
			// build for clips

			$termsConditions="";
			$termsPrereq="";
			$termsAntireq="";


			// ---------------- GENERATE PREREQ RULES for this course
			// ---- get prereq if any
			$prereqNode = $prereq_xpath->query( '//course[@id="'.$courseID.'"]' );
			if (!is_null($prereqNode))
			{
				//print_r($prereqNode[0]);
				//$prereq = $prereqNode[0]->getElementsByTagName( "prereq" );
				// loop through prereq courses
				$termsPrereq="";
				foreach( $prereqNode as $req )
				{
					$termsPrereq.="(or ";
					// loop through each <or>
					$prereqor = $req->getElementsByTagName( "or" );
					foreach( $prereqor as $orreq )
					{
						//echo $orreq->nodeValue;
						$termsPrereq.="\t (has-taken (course ".$orreq->nodeValue.")) \n";
					}
					$termsPrereq.=")\n";


				}
				//echo $termsPrereq;
				//break;
			}
			// ---------------- GENERATE PREREQ RULES for this course END


			// ---------------- GENERATE ANTI REQ RULES for this course
			// ---- get prereq if any
			$prereqNode = $antireq_xpath->query( '//course[@id="'.$courseID.'"]' );
			if (!is_null($prereqNode))
			{
				// print_r($prereqNode);
				//$prereq = $prereqNode[0]->getElementsByTagName( "antireq" );
				// loop through antireq courses
				$termsAntireq="";
				foreach( $prereqNode as $req )
				{
					$termsAntireq.="(not (or ";
					// loop through each <or>
					$prereqor = $req->getElementsByTagName( "or" );
					foreach( $prereqor as $orreq )
					{
						//echo $orreq->nodeValue;
						$termsAntireq.="\t (has-taken (course ".$orreq->nodeValue.")) \n";
					}
					$termsAntireq.="))\n";


				}
				//echo $termsPrereq;
				//break;
			}
			// ---------------- GENERATE ANTI REQ RULES for this course END


			// ---------------- GENERATE TERMS RULES for this course
			$terms = $coursenode->getElementsByTagName( "term" );
			if ($terms->length>0)
			{
				$termsConditions="(or";
				foreach( $terms as $term )
				{
					//echo $term->nodeValue;
					//echo "<br />";
					$termsConditions.="\t(cur-term (term ".$term->nodeValue.")) \n";
				}
				$termsConditions .=")";
			}
			// ---------------- GENERATE TERMS RULES for this course END

			// output generated rules for each course
			$clipsrule .="; #################### AUTOGEN RULE FOR COURSE " . $courseID."\n";
			$clipsrule .=' (defrule can-take-'.$courseID . ' "Eligible for '.$courseID.'?"';
			$clipsrule .="\n ;------- conditions for terms \n" . $termsConditions;
			$clipsrule .="\n ;------- conditions for prerequisite \n" . $termsPrereq;
			$clipsrule .="\n;------- conditions for anti requisite\n" . $termsAntireq;
			$clipsrule .="\n".' (not (black-list (course '.$courseID.')))';
			$clipsrule .="\n".' (not (has-taken (course '.$courseID.')))';
			$clipsrule .="\n".' => ';
			$clipsrule .="\n".' (assert (can-take (course '.$courseID.')))) ';


			$clipsrule .= "\n\n";

			//print_r($coursenode);
			//break;

	} // loop ended for each course

	// save rules

	$file = 'rules_' . $programname .".clp";
	file_put_contents($file, $clipsrule);
	echo "<br />New Rules file generated for <b>". $file."</b>", PHP_EOL;

	//echo $clipsrule;

} // end of generateProgramRules





?>