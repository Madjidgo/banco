<?php
 try
     {
       $db = new PDO('mysql:host=localhost;dbname=Bank;charset=utf8', 'root', 'root');
   }

   catch (Exception $e)

   {

       die('Error : ' . $e->getMessage());

   }
