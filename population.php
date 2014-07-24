<html>
<?php
$city = $_GET['city'];
?>
<h1>Welcome to Population Data Online!</h1>
<?
$cities = array(
	'Philadelphia' => 1526006, 
	'New York City' => 8405837, 
	'Los Angeles' => 3862839, 
	'Atlanta' => 450000, 
	'Detroit' => 700000,
	'San Diego' => 1338000, 
);

if (!$city || !isset($cities[$city])) {
	print 'Please add a valid city name to your URL. Try <a href="population.php?city=Philadelphia">Philadelphia</a>.';
} else {
	print '<p>The population of <strong>' . $city . '</strong> is <strong>' . $cities[$city] . '</strong></p>';
}
?>

<h1>Or select from the following:</h1>

<ul style="List-style-type: circle;">
<?php 
foreach ($cities as $name => $population) {
	print '<li>what about <a href ="population.php?city='. $name . '">' . $name . '</a>?</li>'; 
}
?>
</ul>
</html>
