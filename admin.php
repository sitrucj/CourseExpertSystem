<?php
	include("auth.php");
	//include('header.php');
?>

<h2>Admin Pannel</h2>
<div class="tabbable">
  <ul class="nav nav-tabs">
    <li><a href="#listCourses" data-toggle="tab">List Courses</a></li>
    <li class="active"><a href="#addCourse" data-toggle="tab">Add Course</a></li>
    <li><a href="#removeCourse" data-toggle="tab">Remove Course</a></li>
    <li><a href="#addProgram" data-toggle="tab">Add Program</a></li>
    <li><a href="#removeProgram" data-toggle="tab">Remove Program</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="listCourses">
      <h3>Course List by Program</h3>
			<?php include './lib/listCourses.php';?>
		</div>
		<div class="active tab-pane" id="addCourse">
			<h3>Add a Course to a Program</h3>
			<form action="./lib/addCourse.php" method="post">
				<div class="form-group row">
					<label for="program" class="col-sm-2 form-control-label">Program</label>
					<div class="col-sm-10">
						<?php include './lib/programBox.php' ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="course" class="col-sm-2 form-control-label">Course</label>
					<div class="col-sm-10">
						<input class="form-control" id="course" name="course" placeholder="Course Number">
					</div>
				</div>
				<div class="form-group row">
					<label for="prereq" class="col-sm-2 form-control-label">Prerequisite</label>
					<div class="col-sm-10">
						<input class="form-control" id="prereq" name="prereq" placeholder="Prerequisites: 60-123 or 60-234, 60-345">
					</div>
				</div>
				<div class="form-group row">
					<label for="antireq" class="col-sm-2 form-control-label">Antirequisite</label>
					<div class="col-sm-10">
						<input class="form-control" id="antireq" name="antireq" placeholder="Antirequisites: 60-123 or 60-234, 60-345">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3">Semesters</label>
					<label class="checkbox-inline col-sm-3">
						<input type="checkbox" name="f"> Fall
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" name="w"> Winter
					</label>
					<label class="checkbox-inline col-sm-4">
						<input type="checkbox" name="s"> Spring/Intersession
					</label>
				</div>
				<div class="form-group row">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Add Course</button>
					</div>
				</div>
			</form>
		</div>
		<div class="tab-pane" id="removeCourse">
			<h3>Remove Course from a Program</h3>
			<form action="./lib/removeCourse.php" method="post">
				<div class="form-group row">
					<label for="program" class="col-sm-2 form-control-label">Program</label>
					<div class="col-sm-10">
						<?php include './lib/programBox.php' ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="course" class="col-sm-2 form-control-label">Course</label>
					<div class="col-sm-10">
						<input class="form-control" id="course" name="course" placeholder="Course Number">
					</div>
				</div>
				<div class="form-group row">
					<label for="removeAll" class="col-sm-2 form-control-label">Remove All Related</label>
					<div class="col-sm-10"><input id="removeAll" type="checkbox" name="removeAll"> Remove all related prerequisites and antirequisites</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Remove Course</button>
					</div>
				</div>
			</form>
		</div>
		<div class="tab-pane" id="addProgram">
			<h3>Add Program</h3>
			<form action="./lib/addProgram.php" method="post">
				<div class="form-group row">
					<label for="program" class="col-sm-2 form-control-label">Program</label>
					<div class="col-sm-10">
						<input class="form-control" id="program" name="program" placeholder="Program Title: Computer Science General">
					</div>
				</div>
				<div class="form-group row">
					<label for="courses" class="col-sm-2 form-control-label">Courses</label>
					<div class="col-sm-10">
						<input class="form-control" id="courses" name="courses" placeholder="Course Numbers: ##-###, ##-###, ##-### ect.">
					</div>
				</div>
				<div class="form-group row">
					<label for="notes" class="col-sm-2 form-control-label">Notes</label>
					<div class="col-sm-10">
  					<textarea class="form-control" rows="5" id="notes" name="notes"></textarea>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Add Program</button>
					</div>
				</div>
			</form>
		</div>
		<div class="tab-pane" id="removeProgram">
			<h3>Remove Program</h3>
			<form action="./lib/removeProgram.php" method="post">
				<div class="form-group row">
					<label for="program" class="col-sm-2 form-control-label">Program</label>
					<div class="col-sm-10">
						<?php include './lib/programBox.php' ?>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Remove Program</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<?php include("footer.php") ?>