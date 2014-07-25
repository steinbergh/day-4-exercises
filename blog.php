<!DOCTYPE html>
<html>
<head>

</head>
	<body>
		<h1>Welcome to Blog.com!</h1>
		<h4><i>the home of the worlds hottest blogs!</i></h4>
		<br />
	<?php 
	$connection = mysql_connect('127.0.0.1', 'root', '');
	mysql_select_db('day-4-exercises');

	if (!$connection) {	
    die('Unable to connect: ' . mysql_errno());
    }

    if ($connection) {
    $result = mysql_query('SELECT title, author, body FROM articles');
	}

	while ($row = mysql_fetch_array($result)) {
		print '<article>';
    	print '<h2><i>' . $row['title'] . '</i></h2>';
   		print 'by, ' . $row['author'];
    	print '<p>' . $row['body'] . '</p>';
		print '</articles>';
    }


	mysql_close($connection);
	?>
	</body>
</html>
