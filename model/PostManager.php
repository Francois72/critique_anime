<?php
namespace model;
require "vendor/autoload.php";
use model\Manager;



class PostManager extends Manager
{
    public function getPosts($start,$postsPerPage)
    {
        try
        {          
            $db = $this -> dbConnect();
            $post =$db->query('SELECT id, image_anime, title, summary, date_creation FROM anime LIMIT '.$start.','.$postsPerPage);     
            return $post;
        }
        catch(Exception $e)
        {
            die('Erreur:'.$e->getMessage());
        }
    }

    public function countPosts()
    {
        try
        {          
            $db = $this -> dbConnect();
            $totalPostsReq = $db -> query('SELECT id FROM anime');
            $totalPosts = $totalPostsReq -> rowCount();        
            return  $totalPosts;
        }
        catch(Exception $e)
        {
            die('Erreur:'.$e->getMessage());
        }
    }







    /*
    public function countPosts()
    {
        try
        {          
            $db = $this -> dbConnect();
            $nbpost =$db->query('SELECT COUNT(*) AS nb_posts FROM anime');            
            $nb_entrees = ($nbpost->fetch())['nb_posts'];
            return $nb_entrees;
        }
        catch(Exception $e)
        {
            die('Erreur:'.$e->getMessage());
        }
    }
    */
}


/*

$post =$db->query('SELECT id, image_anime, title, summary, date_creation FROM anime');


 ceil() // pour arrondi au supérieur
 intval () // pour arrondir à l'inférieur ou renvoi 1 pour un tableau non vide et 0 pour un vide

*/

