<?php

//Racine du site
define('RACINE', dirname(__FILE__).'/');
//Librairie
define('LIB', dirname(__FILE__).'/lib/');
//Bibliothèque que de classe
define('BIBLI', dirname(__FILE__).'/lib/bibli/');
//Javascript
define('JS', dirname(__FILE__).'/vendor/js/');


require_once(LIB.'mysql.conf.php');
require_once(BIBLI.'Membre.class.php');
require_once(BIBLI.'MembreManager.class.php');

session_start();

if (isset($_SESSION['membre']))
{
    $membre = $_SESSION['membre'];
}

?>
