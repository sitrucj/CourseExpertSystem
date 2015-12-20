<select class="form-control" name="program">
	<option selected>Choose a program</option>
							<?php //load course programs
							$coursePrograms = simplexml_load_file('course_programs.xml') or die("error: can't load course_programs.xml");
							foreach ($coursePrograms->program as $program) //print courses by program
							{
								echo '<option value="', $program['name'] ,'">', $program['name'], '</option>}';
							}
							?>
						</select>

						<!-- <option value="3">Three</option> -->