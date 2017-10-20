<?php
//program for uploading and saving the file in the destination
$target_dir = "upload/"; //The directory where files would be stored
$target_file = $target_dir . basename($_FILES["file"]["name"]); //path of the file to be uploaded
$uploadOk = 1;
$csvFileType = pathinfo($target_file,PATHINFO_EXTENSION); //Extension of the file
//Check whether the file is uploaded or not
if ($uploadOk == 0) //Error counter
{
echo "Sorry, your file was not uploaded.";
} 
else 
{
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
{
echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
} 
else 
{
echo "Sorry, there was an error uploading your file.";
}
}
header('Location: display.php?filename='.($_FILES["file"]["name"])); //Sends raw HTTP information to the user 
exit;
?>
