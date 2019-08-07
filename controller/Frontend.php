<?php
namespace controller; // la class Frontend est dans le namespace controller
require "vendor/autoload.php";
use model\PostManager; //je vais utiliser la class PostManager du namespace model
class Frontend{	
	static function viewHomePage()
	{		

		/*pagination*/
		
		$postsPerPage = 2;
		$totalPosts = new PostManager(); 
		$totalPosts = $totalPosts->countPosts();

		$totalPages = ceil($totalPosts/$postsPerPage);

		if (isset($_GET['page']) AND !empty($_GET['page'])) {
			$_GET['page'] = intval($_GET['page']);
			$currentPage = $_GET['page'];
		} else {
			$currentPage = 1;
		}

		$start = ($currentPage-1)*$postsPerPage;
		
		$posts = new PostManager(); 
		$post = $posts->getPosts($start,$postsPerPage); 

		/*
		for ($i=1;$i<=$totalPages;$i++) {		
			if ($i == $currentPage) {
				echo $i.' ';
			}
			else {
				echo '<a href="index.php?page='.$i.'">'.$i.'</a> ';
			}
		}*/
	


		require('view/frontend/HomePage.php');
	}	
}
