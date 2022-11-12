<?php $currentDirectory = "C:/Users/serin/Desktop/Code/";
    $uploadDirectory = "uploads/";

   // $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed 

    $fileName = $_FILES['avatar']['name'];
    $fileSize = $_FILES['avatar']['size'];
    $fileTmpName  = $_FILES['avatar']['tmp_name'];
    $fileType = $_FILES['avatar']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName); 

    $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

    $fileExtensionsAllowed2 = ['pdf']; // These will be the only file extensions allowed 

    $fileName2 = $_FILES['pdf']['name'];
    $fileSize2 = $_FILES['pdf']['size'];
    $fileTmpName2  = $_FILES['pdf']['tmp_name'];
    $fileType2 = $_FILES['pdf']['type'];
    $fileExtension2 = strtolower(end(explode('.',$fileName2)));

    $uploadPath2 = $currentDirectory . $uploadDirectory . basename($fileName2); 

    $didUpload2 = move_uploaded_file($fileTmpName2, $uploadPath2);

    //   if (! in_array($fileExtension,$fileExtensionsAllowed)) {
    //     $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    //   }

    //   if ($fileSize > 4000000) {
    //     $errors[] = "File exceeds maximum size (4MB)";
    //   }

    //   if (empty($errors)) {
    //     $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

    //     if ($didUpload) {
    //       echo "The file " . basename($fileName) . " has been uploaded";
    //     } else {
    //       echo "An error occurred. Please contact the administrator.";
    //     }
    //   } else {
    //     foreach ($errors as $error) {
    //       echo $error . "These are the errors" . "\n";
    //     }
    //   }
?>