<?php

require 'Modeles/entities/ConnectBdd.php';

$manager = new AccountManager($db);


/**
 * { item_description }
 */
if(isset($_POST["submitAdd"])){

if(isset($_POST['name']) && isset($_POST['solde']))
{

	$compte= new Account($_POST);
;
	$manager->add($compte);

	header('Location: index.php');
}
}
/**
 * { item_description }
 */
if (isset($_POST['delete']))
{
	$delete = $_POST['id'];
  $manager->delete($delete);
  header ("Location: index.php");
}

/**
 * { item_description }
 */
 if(isset($_POST['submit']))

 	{

		var_dump($_POST);
		//Récupérer l'objet par son ID

		//Appeler la méthode addmoney et lui passer en argument $_POST["add"]

		// Updater l'objet en base de données grace au manager
}

/**
 * { var_description }
 *
 * @var        <type>
 */
$accounts = $manager->getList();




require 'Views/Account.php';
