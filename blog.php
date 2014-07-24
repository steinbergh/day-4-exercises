<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="blog.css">
</head>
	<body>
		<h1>Welcome to Blog.com!</h1>
		<h4><i>the home of the worlds hottest blogs!</i></h4>
		<br />
	<?php 
	$articles = array(
		$article1 = new stdClass(),
		$article2 = new stdClass(),
		$article3 = new stdClass(),
	);
	
	$article1->title = '10 tips to dominate Kim Kardashian\'s Holllywood';
	$article1->author = 'by, Joshua Herren';
	$article1->body = 'Echo Park yr semiotics bicycle rights Odd Future. Distillery occaecat PBR chia lo-fi ethical
	sustainable stumptown tempor culpa, ea mumblecore Shoreditch voluptate non. Godard High Life irure skateboard
	consequat. Drinking vinegar chillwave pour-over, cray banjo fugiat direct trade PBR&B. Skateboard fashion axe Bushwick
	cred, flannel narwhal leggings ethical viral Kickstarter pickled. Chillwave kitsch literally, biodiesel raw denim
	synth Brooklyn squid Tonx before they sold out Intelligentsia ex chia meggings. Twee ugh laborum, irure ex shabby
	chic next level...';

	$article2->title = 'Board Games: What they dont want you to know.';
	$article2->author = 'by, Jason Oscar';
	$article2->body = 'Gentrify commodo irure actually, freegan consectetur Thundercats synth beard. Viral Helvetica 
	Brooklyn, Echo Park normcore deep v Williamsburg. Swag selvage labore, fanny pack nostrud flexitarian delectus. 
	Sed eu ea, Tumblr sunt do adipisicing normcore. VHS whatever Schlitz fingerstache twee hashtag photo booth.
	Thundercats Carles id, direct trade small batch Williamsburg jean shorts American Apparel polaroid culpa Neutra Marfa 
	kogi. Exercitation viral forage consequat, ethical pickled commodo...';

	$article3->title = 'I Love Music Let Me Tell You Why.';
	$article3->author = 'by, Marc Snitzer';
	$article3->body = 'Hoodie bitters shabby chic, chambray ea Carles drinking vinegar sustainable roof party synth. 
	Stumptown Brooklyn consequat mixtape, ugh fanny pack you probably haven\'t heard of them. Mumblecore pickled esse
	typewriter squid. Keytar excepteur aesthetic roof party skateboard. Magna cupidatat eiusmod food truck, squid whatever
	excepteur kogi put a bird on it selvage Pinterest tofu. Ex letterpress wayfarers, nisi Tonx culpa put a bird on it next
	level. Chambray hashtag freegan, sint craft beer eu deserunt roof party aute...';


	foreach ($articles as $article) {
		print '<article>';
		print '<h2>' . $article->title . '</h2>'; 
		print '<h4><i>' . $article->author . '</i></h4>'; 
		print '<p>' . $article->body . '</p><br />';
		print '</article>';
	}
	
	
	
	
	
	?>
	</body>
</html>
