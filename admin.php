<?php
	//include("auth.php");
	include('header.php');
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
			<form>
				<div class="form-group row">
					<label for="program" class="col-sm-2 form-control-label">Program</label>
					<div class="col-sm-10">
						<select class="form-control">
						<option selected>Choose a program</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="course" class="col-sm-2 form-control-label">Course</label>
					<div class="col-sm-10">
						<input class="form-control" id="course" placeholder="Course Number">
					</div>
				</div>
				<div class="form-group row">
					<label for="Prereq" class="col-sm-2 form-control-label">Prerequisite</label>
					<div class="col-sm-10">
						<input class="form-control" id="Prereq" placeholder="Prerequisites: 60-123 or 60-234, 60-345">
					</div>
				</div>
				<div class="form-group row">
					<label for="Antireq" class="col-sm-2 form-control-label">Antirequisite</label>
					<div class="col-sm-10">
						<input class="form-control" id="Antireq" placeholder="Antirequisites: 60-123 or 60-234, 60-345">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3">Semesters</label>
					<label class="checkbox-inline col-sm-3">
						<input type="checkbox" id="inlineCheckbox1" value="f"> Fall
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" id="inlineCheckbox2" value="w"> Winter
					</label>
					<label class="checkbox-inline col-sm-4">
						<input type="checkbox" id="inlineCheckbox3" value="s"> Spring/Intersession
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
			<form>
				<div class="form-group row">
					<label for="program" class="col-sm-2 form-control-label">Program</label>
					<div class="col-sm-10">
						<select class="form-control">
							<option selected>Choose a program</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="course" class="col-sm-2 form-control-label">Course</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="course" placeholder="Course Number: ##-###">
					</div>
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
			<form>
				<div class="form-group row">
					<label for="program" class="col-sm-2 form-control-label">Program</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="program" placeholder="Program Title: Computer Science General">
					</div>
				</div>
				<div class="form-group row">
					<label for="courses" class="col-sm-2 form-control-label">Courses</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="course" placeholder="Course Numbers: ##-###, ##-###, ##-### ect.">
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
			<form>
				<div class="form-group row">
					<label for="program" class="col-sm-2 form-control-label">Program</label>
					<div class="col-sm-10">
						<select class="form-control">
							<option selected>Choose a program</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
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