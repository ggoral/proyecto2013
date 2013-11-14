<?php 

require_once("Twig/Autoloader.php");
Twig_Autoloader::register();

$templateDir="./templates";
$loader = new Twig_Loader_Filesystem($templateDir);
$twig = new Twig_Environment($loader);
            
$template = $twig->loadTemplate("plantilla-6-hijo.twig");

$template->display(array('titulo' => "Listado de alumnos",
						'lista' => array("juan", "roberto")
));

?>




