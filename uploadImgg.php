<?php 


	$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
	// $targetPath = "photo/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPathtwo = "allcv/photo/".$_FILES['file']['name']; // Target path where file is to be stored
	move_uploaded_file($sourcePath,$targetPathtwo);

	// move_uploaded_file($sourcePath,$targetPath);
		// copy("photo/".$_FILES['file']['name'],"cv/allcv/photo".$_FILES['file']['name']);// Moving Uploaded file

	 // Moving Uploaded file

	echo "<img id='image_preview' class=' ' src='photo/" . $_FILES["file"]["name"] . "' width='133px' style='margin: auto;padding-top: 6px'>";

 ?>