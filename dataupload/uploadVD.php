<?php
$target_dir = "VDuploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  // all okay so far.
} else {
  $$uploadOk = 0;
  echo "<p>No file </p>";
}
// Check if file already exists
if ( ($uploadOk == 1) && file_exists($target_file) ) {
    echo "Sorry, file already exists (".$target_file.").";
    $uploadOk = 0;
}
// Check file size
if ( ($uploadOk == 1) && ($_FILES["fileToUpload"]["size"] > 500000) ) {
    echo "<p>Sorry, your file is too large.</p>";
    $uploadOk = 0;
}
// Allow certain file formats
if( ($uploadOk == 1) && ($imageFileType != "txt" ) ) {
    echo "Sorry, only txt files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<p>Sorry, your file was not uploaded.</p>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
