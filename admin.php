<?php include("header.php") ?>

<h3>Admin Pannel</h3>
<h2>add a course</h2>
<form action="addCourse.php" method="post">
Course: <input type="text" name="course"><br>
Prerequsite: <input type="text" name="prereq"><br>
Antirequsite: <input type="text" name="antireq"><br>
<input type="submit">
</form>


<?php include("footer.php") ?>