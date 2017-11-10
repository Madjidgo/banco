<?php
require 'Views/Template/header.php';
require 'Modeles/entities/ConnectBdd.php';
require 'Modeles/entities/AccountManager.php';
require 'Modeles/entities/Account.php';
$manager = new AccountManager($db);

$account1 =$manager->get($_GET['id']);

require 'Views/update.php';
require 'Views/Template/footer.php';
