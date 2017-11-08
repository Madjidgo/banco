<?php
/**
 * [autoloader description]
 * @param  [type] $class [description]
 * @return [type]        [description]
 */
function autoloader($class){
  require 'Modeles/entities/'.$class.'.php';
}
spl_autoload_register( 'autoloader');

require 'Controlers/Account.php';
