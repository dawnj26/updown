<?php

if (!isset($_FILES["myFile"])) {
    die("There is no file to upload!");
}

function fileExtension($s)
{
    $n = strrpos($s, ".");

    if ($n === false)
        return "";
    else
        return substr($s, $n);
}


$filepath = $_FILES["myFile"]["tmp_name"];
$filesize = filesize($filepath);
// $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
// $filetype = finfo_file($fileinfo, $filepath);
$anotherName = $_FILES["myFile"]["name"];


if ($filesize === 0) {
    die("The file is empty");
}

$filename = basename($filepath);
$targetDirectory = __DIR__ . "/uploads";

$newFilePath = $targetDirectory . "/" . $anotherName;

if (!copy($filepath, $newFilePath)) {
    die("Cannot move file!");
}

unlink($filepath);

echo "File uploaded successfully!";

header("Refresh:1;URL=index.php");

?>