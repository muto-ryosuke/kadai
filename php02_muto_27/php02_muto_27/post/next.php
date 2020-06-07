<?php

$name = $_POST["name"];
$password = $_POST["password"];
$checkbox = $_POST["checkbox"];
$radio = $_POST["radio"];
$file = $_POST["file"];
$hidden = $_POST["hidden"];
$reset = $_POST["reset"];
$image = $_POST["image"];
$textarea = $_POST["textarea"];

echo "<p>".$name."</p>";
echo "<p>".$password."</p>";
echo "<p>".$checkbox."</p>";
echo "<p>".$radio."</p>";
echo "<p>".$file."</p>";
echo "<p>".$hidden."</p>";
echo "<p>".$reset."</p>";
echo "<p>".$image."</p>";
echo "<p>".$textarea."</p>";


?>