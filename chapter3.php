<?php
include_once('support.php');


$quest1 = "";
$quest2 = "";
$quest3 = "";
$quest4 = "";
$quest5 = "";

function ch1Questions{

$quest1Ans = "A";
$quest2Ans = "A";
$quest3Ans = "A";
$quest4Ans = "A";
$quest5Ans = "A";
$result = 0;

if(isset($_GET['quest1'])) {
	$quest1 = $_GET['quest1'];
} else {
	$quest1 = "";
}

if(isset($_GET['quest2'])) {
	$quest2 = $_GET['quest2'];
} else {
	$quest2 = "";
}

if(isset($_GET['quest3'])) {
	$quest3 = $_GET['quest3'];
} else {
	$quest3 = "";
}

if(isset($_GET['quest4'])) {
	$quest4 = $_GET['quest4'];
} else {
	$quest4 = "";
}

if(isset($_GET['quest5'])) {
	$quest5 = $_GET['quest5'];
} else {
	$quest5 = "";
}


if($quest1 == 'A'){
	result++;
}
if($quest2 == 'A'){
	result++;
}
if($quest3 == 'A'){
	result++;
}
if($quest4 == 'A'){
	result++;
}
if($quest5 == 'A'){
	result++;
}
return result;
}

$title = "Service Request Confirmation";
$body  = "<h1>".$title."</h1>";
$body .= "<h3>Information Provided:</h3>";
$body .= "<p><em>The answer to question 1 is:</em> " . $quest1Ans . "<br />";
$body .= "You scored a: " . $result . "out of 5";


# Generating final page
echo generatePage($title, $body);	
?>