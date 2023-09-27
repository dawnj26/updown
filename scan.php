<?php

// Define the directory path you want to scan
$directory = 'uploads/';

// Use scandir to get a list of filenames in the directory
$files = scandir($directory);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download</title>
</head>

<body>
    <h1>Files</h1>
    <ul>
        <?php

        foreach ($files as $file) {
            // Exclude "." and ".." entries
            if ($file != "." && $file != "..") {
                echo "<li><a href='download.php?dir=$directory" . $file . PHP_EOL . "'>$file</a></li>";
            }
        }
        ?>
    </ul>
</body>

</html>