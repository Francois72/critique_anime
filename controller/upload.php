<?php
require "vendor/autoload.php";
$uploaddir = 'D:/wamp64/www/tests/critique_anime/public/images/avatars/';
$namefile = $_POST['user'].'-ava.jpg';
$uploadfile = $uploaddir . basename($namefile); /*chemin où est téléchargé l'image: $uploadfile;*/ 

/*echo '<pre>';                ????*/
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    /*echo "File is valid, and was successfully uploaded.\n";*/


} else {
    echo "Possible file upload attack!\n";
}
/*
echo 'Here is some more debugging info:';
print_r($_FILES);
*/
/*print "</pre>";               ????*/
?>