<?php
//assign to variable
$first_name = $_POST["fullname"];
$first_last = $_POST["first_last"];
$email = $_POST["email"];
$password = $_POST["password"];
$date = $_POST["date"];
$yearLvl = $_POST["year-level"];

//echo "checkbox". ($_POST["year-level"]);

//echo to browser
echo "firt name: ".$first_name . "<br>";
echo "first last: ".$first_last ."<br>";
echo "email: ".$email ."<br>";
echo "password: ".$password ."<br>";
echo "date: ".$date ."<br>";
echo "year-level: ".$yearLvl."<br>";
?>