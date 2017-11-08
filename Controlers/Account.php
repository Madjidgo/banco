<?php

require 'Modeles/entities/ConnectBdd.php';

$manager = new AccountManager($db);


if(isset($_POST['submitAdd'])){
if(isset($_POST['name']) && isset($_POST['solde']))
{
	$compte= new Account($_POST);
	$manager->add($compte);

	header('Location: index.php');
}
}

else if (isset($_POST['delete']))
{
	$delete = $_POST['id'];
  $manager->delete($delete);
  header ("Location: index.php");
}

 else if(isset($_POST['submit'])){
if(isset($_POST['name']) && isset($_POST['solde']) && isset($_POST['id']))
{

	$compte= new Account($_POST);
	$manager->update($compte);
	header ("Location: index.php");

}
}


$accounts = $manager->getList();


require 'Views/Account.php';
