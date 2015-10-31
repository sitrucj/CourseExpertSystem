<?php include("header.php") ?>

<h2>Admin Pannel</h3>
<h3>add a course</h2>
<form action="" method="post">
Course: <input type="text" name="course"><br>
Prerequsite: <input type="text" name="prereq"><br>
Antirequsite: <input type="text" name="antireq"><br>
<input type="submit">
</form>
<br>

<h3>Course List by Program</h3>
<?php include 'addCourse.php'; ?>

<?php include("footer.php") ?>