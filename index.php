
<?php include("header.php") ?>		

 </div>
</div>
<!-- close main container -->



<?php
// loading xml files to populate program dropdown list
$xmlProgDoc = new DOMDocument(); 
$xmlProgDoc->load( 'course_programs.xml' ); 
$xmlprogram = $xmlProgDoc->getElementsByTagName( "program" ); 
$program_xpath = new DOMXPath( $xmlProgDoc );


// ------------ courseterms.xml
$xmlDoc = new DOMDocument(); 
$xmlDoc->load( 'courseterms.xml' ); 
$xml = $xmlDoc->getElementsByTagName( "course" ); 
$coursesterms_xpath = new DOMXPath( $xmlDoc );

// ------------ course_prerequisite.xml
$xmlPrereqDoc = new DOMDocument(); 
$xmlPrereqDoc->load( 'course_prerequisite.xml' ); 
$prereq_xpath = new DOMXPath( $xmlPrereqDoc );

// ------------ course_antiequisite.xml
$xmlAntireqDoc = new DOMDocument(); 
$xmlAntireqDoc->load( 'course_antirequisite.xml' ); 
$antireq_xpath = new DOMXPath( $xmlAntireqDoc );

?>


<script>
// ----  change url to the new program (reload webpage)
function changeProgram()
{
	var e = document.getElementById("idprogram");
	var strProgram = e.options[e.selectedIndex].value;
	window.location.href = "index.php?program=" +strProgram;
	 
}
</script>


<?php 
// check if the program has been changed from dropdown menu
$program="";
if (isset($_GET['program']))
{
	$program = $_GET['program'];
}

?>
 <div class="container ">
     

	 
<h3>Computer Science Automated Undergraduate Course Advice System</h3>




<form method="post" action="clips.php" class="form-horizontal">
	<input type="hidden" name="txtcmd" />
	<!-- form -->
	 <div class="form-group">
		<label for="inputEmail3" class="col-sm-3 control-label">Select Program
		
						   <a href="#" data-toggle="tooltip" title="Select the Computer Science program that you are enrolled in."><span style="font-size:16px;" class="glyphicon glyphicon-question-sign" aria-hidden="true"> </span></a>

		</label>
		<div class="col-sm-5">
					  
			<select id="idprogram" name="program" onchange="changeProgram()" class="form-control">
				 <option value="">---Select Program---</option>
				<?php foreach( $xmlprogram as $programNode ) { ?>
				  <option

				 <?php
					if ($program==$programNode->getAttribute('name'))
					{
						echo " selected='selected' ";
					}
				 ?>
				  value="<?php echo $programNode->getAttribute('name');?>"><?php echo $programNode->getAttribute('name');?></option>
				<?php } ?>
			</select>

		</div>
	  </div>
	 
	<?php if ($program!=""){?> 
	  <div class="form-group">
		<label for="inputEmail3" class="col-sm-3 control-label">Select courses completed (if any)
		
			<a href="#" data-toggle="tooltip" title="Make sure you select any completed courses from any year level including math courses."><span style="font-size:16px;" class="glyphicon glyphicon-question-sign" aria-hidden="true"> </span></a>

		</label>

		<div class="col-sm-5">
			
		
		  <?php showAllCoursesCheckbox($program);?>
		
		</div>
	  </div>
	  <?php }?>
	  
	  
	  
	  	 <div class="form-group">
		<label for="inputEmail3" class="col-sm-3 control-label">Select Term
					<a href="#" data-toggle="tooltip" title="Select the term for which you want to get advice on course selection."><span style="font-size:16px;" class="glyphicon glyphicon-question-sign" aria-hidden="true"> </span></a>

		</label>
		<div class="col-sm-5">
					  
				<div>
					<label>
						<input type="radio" name="term" value="f" checked="checked"></input> Fall
					</label>
				</div>
				
				<div>
					<label>
						<input type="radio" name="term" value="w" ></input> Winter
					</label>
				</div>
				<div>
					<label>
						<input type="radio" name="term" value="s" ></input> Intersession/Summer
					</label>
				</div>
		  <hr />
		</div>
	  </div>
	  
	  	 <div class="form-group">
		<label for="inputEmail3" class="col-sm-3 control-label"></label>
		<div class="col-sm-5">
					  
				<input type="submit" class="btn btn-primary btn-lg" value="Get Advice!">
		</div>
	  </div>
	  
	  
	<!-- form ends-->
	
	<br />
	
</form>


        </div>




<?php 

function sort_trees($t1, $t2) {
	// sort by course #  not department ex 60-100 will be 100
	$t1exp = explode("-",$t1['id']);
	$t2exp = explode("-",$t2['id']);
	
	return strcmp($t1exp[1], $t2exp[1]);
}
// ================= MAKE CHECKBOX FOR ALL COURSES IN THIS PROGRAM
function showAllCoursesCheckbox($programname)
{
	global $xml,$xmlDoc,$coursesterms_xpath, $antireq_xpath, $prereq_xpath, $program_xpath;
	$programname = $programname;
	//$sortedCourses = $coursesterms_xpath->sortedXPath('//course', '@id');
	 $sortedCourses = $coursesterms_xpath->query('/courses/course');
	 
	 // ----- new method
		$xmlcourses = simplexml_load_file ('courseterms.xml');
		$sortedCourses = $xmlcourses->xpath('/courses/course');

		
		usort($sortedCourses, 'sort_trees');
		//print_r($sortedCourses);
	
?>
<select id="custom-headers" name="course[]" class="form-control" multiple='multiple'>
	
<?php
	$currLevel=100;
	$i=0;
	foreach( $sortedCourses as $coursenode ) 
	{
		

			// check if program available.
			//$courseID = $coursenode->getAttribute('id'); 
			$courseID =$coursenode->attributes()->id;
			$searchForProgramCourse = $program_xpath->query( '//program[@name="'.$programname.'"]//course[@id="'.$courseID.'"]' );
			$i++;
			if ($searchForProgramCourse->length<=0)
			{
				
				// this course is not found for this program, continue to next course.
				continue;
			}
			
			// --- check course level
			$checkLevel= explode("-",$courseID);
			if ($checkLevel[1]>$currLevel || $i==1)
			{
				// program level changed
				//echo "<div class='form-control'><label>Year " . ($currLevel/100) . " Courses </label></div>";
				if ($i>1) {echo "</optgroup>";}
				echo "<optgroup label='Year " . ($currLevel/100) . " Courses '>";
				
				$currLevel= $currLevel+100;
			}
			// ----- MAKE CHECKBOX
			?>
			
				
				  <option value="<?php echo $courseID;?>"><?php echo $courseID?></option>
			
		
			
			<?php
			
			

	} // end of courses loop
	echo "</optgroup>";
	?>
		</select>
	<?php
} // end of generateProgramRules

?>


<script>
// bootstrap plugin to generate two listview
$('#custom-headers').multiSelect({

  selectableHeader: "<div class='custom-header'>Available Courses</div><input type='text' class='form-control' autocomplete='on' placeholder='Ex \"60-100\"'>",
  selectionHeader: "<div class='custom-header'>Completed Courses</div><input type='text' class='form-control' autocomplete='off' placeholder='Ex \"60-100\"'>",
  afterInit: function(ms){
    var that = this,
        $selectableSearch = that.$selectableUl.prev(),
        $selectionSearch = that.$selectionUl.prev(),
        selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
        selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
    .on('keydown', function(e){
      if (e.which === 40){
        that.$selectableUl.focus();
        return false;
      }
    });

    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
    .on('keydown', function(e){
      if (e.which == 40){
        that.$selectionUl.focus();
        return false;
      }
    });
  },
  afterSelect: function(){
    this.qs1.cache();
    this.qs2.cache();
  },
  afterDeselect: function(){
    this.qs1.cache();
    this.qs2.cache();
  }
});
</script>
<script>
// prepare all tool tips
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'right'
    });
});
</script>





<!-- reopen main container -->
 <div class="container maincont ">
  <div class="leftcont col-md-12" role="main">

<?php include("footer.php") ?>	
