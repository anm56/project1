<?php
//Class to load classes it finds the file when the progrm starts to fail for calling a missing class
class Manage
{
public static function autoload($class)
{
include upload . '.php';
}
}
//Program to upload form
class uploadform
{
public function  upload()
{
echo '<form action="upload.php" method="post" enctype="multipart/form-data">';
echo 'Select file to upload';
echo '<br>';
echo '<br>';
echo '<input type="file" name="file" id="file">';
echo '<input type="submit" value="submit" name="submit">';
echo '</form>';
}
}
$obj= new uploadform();
$obj-> upload();
?>
