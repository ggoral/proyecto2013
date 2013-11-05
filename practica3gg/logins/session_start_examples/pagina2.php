<?php
// pagina2.php

session_start();

echo 'Bienvenido a la p&aacute;gina #2<br />';

echo $_SESSION['color'];  // verde
echo $_SESSION['animal']; // gato
echo date('Y m d H:i:s', $_SESSION['time']);

// Puede querer usar SID aquí, como hicimos en pagina1.php
echo '<br /><a href="pagina1.php">p&aacute;gina 1</a>';
?>
