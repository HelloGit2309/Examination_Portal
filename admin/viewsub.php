














/****
<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<!-- <link href="../quiz.css" rel="stylesheet" type="text/css"> -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
include("header.php");
include("../database.php");
{
$sql=mysqli_query($con,"select * from mst_subject");

	echo "<table class='table table-striped'>";
<<<<<<< HEAD
	echo "<tr><th><a class='btn btn-danger' href='subadd.php'>Add Subject</a></th></tr>";
	echo "<tr><th class='text-primary'>ID</th><th class='text-primary'>name</th>
	<th class='text-primary'>Update</th>
	<th class='text-primary'>Delete</th></tR>";

	while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['sub_id'];

	echo "<tr>";
	echo "<td>".$result['sub_id']. "</td>";
	echo "<td>".$result['sub_name']."</td>";
	echo "<td><a href='subupdate.php?sub_id=$id'><span style='color:yellow' class='glyphicon glyphicon-edit'>Update</span></a></td>";
	echo "<td><a href='subdelete.php?sub_id=$id'><span style='color:yellow'  class='glyphicon glyphicon-trash'>Delete</span></a></td>";
=======
	echo "<tr><th><a style='color:orange' class='btn btn-danger' href='subadd.php'>Add Subject</a></th></tr>";
	echo "<tr><th style='color:#6699ff' class='text-primary'>ID</th><th style='color:#6699ff' class='text-primary'>Name</th>
	<th style='color:#6699ff' class='text-primary'>Update</th>
	<th style='color:#6699ff' class='text-primary'>Delete</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['sub_id'];
	
	echo "<tr>";	
	echo "<td  style='color:white'>".$result['sub_id']. "</td>";
	echo "<td style='color:white' >".$result['sub_name']."</td>";
	echo "<td><a style='color:#ff6600' href='subupdate.php?sub_id=$id'><span class='glyphicon glyphicon-edit'>Update</span></a></td>";
	echo "<td><a style='color:#ff6600' href='subdelete.php?sub_id=$id'><span class='glyphicon glyphicon-trash'>Delete</span></a></td>";
>>>>>>> fc26a853142e0feb1c5aff4c15c54ae7c8e36e06
	echo "</tr>";
	}
	echo "</table>";


}
?>
</body>
<<<<<<< HEAD
</html>

  */
=======
</html>
>>>>>>> fc26a853142e0feb1c5aff4c15c54ae7c8e36e06
