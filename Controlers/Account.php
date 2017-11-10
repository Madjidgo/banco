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
 if(isset($_POST['submit']) && isset($_POST['add']))

 	{
		//Récupérer l'objet par son ID

		$id= $_POST['id'];
		$account =$manager->get($id);

		//Appeler la méthode addmoney et lui passer en argument $_POST["add"]
		$account->addMoney($_POST['add']);
			var_dump($account);
		// Updater l'objet en base de données grace au manager
		$manager->update($account);
}

if(isset($_POST['submit']) && isset($_POST['ss']))

 {
	 if($_POST['ss'] < 0){
	 echo"<strong >"."Vérifier vos infos"."</strong>";
 }
 //Récupérer l'objet par son ID
 else{
	 $id= $_POST['id'];
	 $account =$manager->get($id);

	 //Appeler la méthode addmoney et lui passer en argument $_POST["ss]
	 $account->ssMoney($_POST['ss']);
		 var_dump($account);
	 // Updater l'objet en base de données grace au manager
	 $manager->update($account);
 }
}
 

if(isset($_POST['transfer']))
	{
		$id= $_POST['id'];
			$amount= $_POST['amount'];
			$account1 =$manager->get($id);
			$account1->ssMoney($amount);
			$manager->update($account1);



			$idend= $_POST['idend'];
			$account2 =$manager->get($idend);
			$account2->addMoney($amount);
			$manager->update($account2);


	}
/**
 * { var_description }
 *
 * @var        <type>
 */
$accounts = $manager->getList();




require 'Views/Account.php';
