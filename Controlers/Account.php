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
	$compte->hydrate($_POST);
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

		if(isset($_POST['name']) && isset($_POST['solde']) && isset($_POST['id']))

		{

			$compte= new Account($_POST);
			$compte->hydrate($_POST);
			$manager->update($compte);
		  header("Location: compte.php");

		}

}

/**
 * { var_description }
 *
 * @var        <type>
 */
$accounts = $manager->getList();




require 'Views/Account.php';
