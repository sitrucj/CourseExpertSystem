<?php include("auth.php") ?>

<!-- <ul class="list-group">
    <li class="list-group-item active">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
</ul> -->

<h2>Admin Pannel</h2>

<h3>add a course</h3>

<form action="" method="post">
Course: <input type="text" name="course"><br>
Prerequsite: <input type="text" name="prereq"><br>
Antirequsite: <input type="text" name="antireq"><br>
<input type="submit">
</form>

<br>

<h3>Course List by Program</h3>
<?php include 'listCourses.php'; ?>

<?php include("footer.php") ?>