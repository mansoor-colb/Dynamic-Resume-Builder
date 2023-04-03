<?php 
function userName()
{	
	$con = new mysqli('localhost','root','','cv');
	$array = $con->query("select * from users where id = '$_SESSION[userId]' ");
	$row = $array->fetch_assoc();
	return $row['name'];
}
function user()
{	
	$con = new mysqli('localhost','root','','cv');
	$array = $con->query("select * from users where id = '$_SESSION[userId]' ");
	$row = $array->fetch_assoc();
	return $row['username'];
}
function pass()
{	
	$con = new mysqli('localhost','root','','cv');
	$array = $con->query("select * from users where id = '$_SESSION[userId]' ");
	$row = $array->fetch_assoc();
	return $row['password'];
}


function savedCv()
{
	$con = new mysqli('localhost','root','','cv');
	$array = $con->query("select * from allCv where userId = '$_SESSION[userId]' ");
	if ($array->num_rows > 0) 
	{
		while ($row = $array->fetch_assoc())
		{
			echo "<thread><tr class='center'>";
			echo "<td>$row[cvName]</td>";
			echo "<td>$row[date]</td>";
			echo "<td>
					<a href='download.php?file=$row[cvFileName]' data-file='{$row["cvFileName"]}' data-name='{$row["cvName"]}' id='download-button'><button class='btn btn-primary small btn-sm'>Download</button></a>
					<a href='deleteCV.php?file=$row[cvFileName]'><button class='btn btn-danger small btn-sm'>Delete</button></a>";
					if($row["theme"]=="theme1"){
			echo	"<a href='edittheme1.php?file=$row[cvFileName]' data-file='{$row["cvFileName"]}' data-theme='{$row["theme"]}'id='edit-resume'><button class='btn btn-primary  btn-sm'>Edit</button></a>";
		}
		           else{
			echo	"<a href='edittheme2.php?file=$row[cvFileName]'data-file='{$row["cvFileName"]}' data-theme='{$row["theme"]}'id='edit-resume'><button class='btn btn-primary  btn-sm'>Edit</button></a>";

					}
			echo	"</td>";
			echo "</tr></thread>";
		}	
	}
	else
	{
		echo "<thread><tr>";
		echo "<th colspan='3' class='center'><h3>You have not saved any cv yet</h3></th>";
		echo "</tr></thread>";
	}
}

function deleteCv($filename)
{
	$con = new mysqli('localhost','root','','cv');
	$array = $con->query("delete from allCv where cvFileName = '$filename' ");
	echo $con->error;
}

 ?>