<?php
namespace model;
require "vendor/autoload.php";



class Manager
{
	protected function dbConnect()
	{
	    try
	    {
			$db = new \PDO('mysql:host=localhost;dbname=critiqueanime;charset=utf8','root','',array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));	       
	        return $db;
	    }
	    catch(Exception $e)
	    {
	        die('Erreur:'.$e->getMessage());
	    }
	}
}
