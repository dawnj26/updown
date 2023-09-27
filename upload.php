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
$fileinfo = finfo_open(FILEINFO_MIME_TYPE);
$filetype = finfo_file($fileinfo, $filepath);



if ($filesize === 0) {
    die("The file is empty");
}

$filename = basename($filepath);
$dir = "/home/dawn/Documents/xampp/htdocs/updown";
$targetDirectory = $dir . "/uploads";

echo $filename . "<br>";

$newFilePath = $targetDirectory . "/" . $filename . fileExtension($_FILES["myFile"]["name"]);
echo $newFilePath;
if (!copy($filepath, $newFilePath)) {
    die("Cannot move file!");
}

unlink($filepath);

echo "File uploaded successfully!";

?>