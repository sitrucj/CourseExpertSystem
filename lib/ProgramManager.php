<?php
class Program
{
	public string $name;
	public $courses = array();

	function addCourse($course) {
		if (!in_array($course, $courses, true)) { //third opttion on in_array is set to true for strict search
			$courses[] = $course;
		}
	}

	function removeCourse($courseToDelete) {
		$i = 0;
		foreach ($courses as $i => $course) {
			if (courseToDelete->id == $course->id) {
				unset(courses[$i]); // remove the course
			}
		}
	}

} // end class Program

class Course
{
	public $id;
	public $prereq = array();
	public $antireq = array();
	public boolean $fall = False;
	public boolean $winter = False;
	public boolean $spring = False;

	public function __construct() {
		$a = func_get_args();
		$i = func_num_args();
		if (method_exists($this,$f='__construct'.$i)) {
			call_user_func_array(array($this,$f),$a);
		}
	}

	public __construct6($id, $prereq, $antireq, $fall, $winter, $spring) {
		$this->id = $id;
		$this->prereq = $prereq;
		$this->antireq = $antireq;
		$this->fall = $fall;
		$this->winter = $winter;
		$this->spring = $spring;
	}
} // end class Course



 ?>