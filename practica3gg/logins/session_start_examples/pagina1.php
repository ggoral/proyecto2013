<?php
// pagina1.php

session_start();

echo 'Bienvenido a la p&aacute;gina #1';

$_SESSION['color']  = 'verde';
$_SESSION['animal'] = 'gato';
$_SESSION['time']   = time();

// Trabajar si la cookie de sesión fue aceptada
echo '<br /><a href="pagina2.php">p&aacute;gina 2</a>';

// O quizás pasar el id de sesión, si fuera necesario
echo '<br /><a href="pagina2.php?' . SID . '">p&aacute;gina 2</a>';
?>
