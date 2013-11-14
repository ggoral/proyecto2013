<?php 
require_once("Twig/Autoloader.php");
Twig_Autoloader::register();

$templateDir="./templates";

$loader = new Twig_Loader_Filesystem($templateDir);

$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate("plantilla-1.twig");

$template->display(array('nombre' => 'Gonzalo!',
						             'lista' => array("1","2",3,3,1983, 6,"Gonzalo"),
                         'footer' => 'El pie de pagina',
));

?>




