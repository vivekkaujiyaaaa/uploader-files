<?php

if (!empty($_FILES)) {

	if (!is_dir('uploads')) {
		mkdir('uploads', 0777);
	}
     
    $tempFile = $_FILES['file']['tmp_name'];
    $targetFile = $_FILES['file']['name'];
    move_uploaded_file($tempFile,'uploads/'.$targetFile);
    
}

?> 