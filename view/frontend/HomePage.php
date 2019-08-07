<?php
require "vendor/autoload.php";

?>
<!doctype>
<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta description="Site de critique d'animes">
<link rel="stylesheet" href="./public/css/style.css"/>
</head>
	
	<body>

	<header>

	<div>
		<h1>Critique Anime</h1>
	</div>

	<nav>
		<ul>
			<li><a href="#">Accueil<a></li>
			<li><a href="#">Lorem Sum<a></li>
			<li><a href="#">Lorem Sum<a></li>
			<li><a href="#">Lorem Sum<a></li>			
		</ul>
	</nav>

	



	</header>

	<main>
		

	
	
	<?php
	
	/*use \PDO;*/

	/*var_dump($post);*/
	while ($data = $post->fetch())
	{
		/*var_dump($data);*/

		echo '<br>';
		echo '<div class=img-anime><img src="./ressources/'.$data['image_anime'].'"></div>';
		
		echo '<br>';
		echo '<strong>'.$data['title'].'</strong>';
		echo '<br>';
		echo '<p>'.$data['summary'].'</p>';
		echo '<br>';
	}
	$post->closeCursor();
	
	?>



	<?php
	if (isset($_POST['user'])) {
	echo '<img src="./public/images/avatars/'.$_POST['user'].'-ava.jpg">';
	}
	?>

	<form action="index.php?action=upload" method="post" enctype="multipart/form-data">
		<input type="textfile" name="user" value="" placeholder="pseudo" required />
		<input type="file" name="userfile" />
		<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
		<input type="submit" value="Send File" />
	</form>

	<div class="paging">
	<?php
	for ($i=1;$i<=$totalPages;$i++) {		
		if ($i == $currentPage) {
			echo $i.' ';
		}
		else {
			echo '<a href="index.php?page='.$i.'">'.$i.'</a> ';
		}
	}
	?>
	</div>

	</main>

	
	</body>
	
</html>
