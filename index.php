<!DOCTYPE html>

<?php
require "vendor/autoload.php";


use controller\Frontend;
use controller\Backend;


try {
	
	if (isset($_GET['action']))
	{
		if ($_GET['action'] == 'upload')
		{	
			$t1 = new Backend();
			$t1->upload();
			
			$t1 = new Frontend();		
			$t1->viewHomePage();			
		}

		



	}

	else		
	{		
		$t1 = new Frontend();
		$t1->viewHomePage(); 
	}
}

catch(Exception $e) 
{ 
    echo 'Erreur : ' . $e->getMessage();
}
