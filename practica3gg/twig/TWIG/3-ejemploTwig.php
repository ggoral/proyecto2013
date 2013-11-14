<?php 

require_once("Twig/Autoloader.php");
Twig_Autoloader::register();

$templateDir="./templates";
$loader = new Twig_Loader_Filesystem($templateDir);
$twig = new Twig_Environment($loader);
            
$template = $twig->loadTemplate("plantilla-3.twig");

$template->display(array('nombre' => 'chicos ',
						'arreglo' => array("uno", "dos", "tres")
));

?>




