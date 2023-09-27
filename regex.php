<?php
// decimal with positive and niggative
$input = "1.0000";
$regex = "/^(\+|-)?(0|[1-9]+\d*)\.\d+$/";

if(preg_match($regex, $input)) {
    echo "goods decimal";
} else {
    echo "bads decimal";
}

echo "<br>";

// validate email add

$input = "donnquinto@outlook.com";
$regex = "/^([\w\.]+)@([a-z-]+)\.([a-z]{2,})$/i";

if(preg_match($regex, $input)) {
    echo "goods email";
} else {
    echo "bads email";
}
?>