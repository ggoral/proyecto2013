<!DOCTYPE html>
<html>
  <head>
    <title>Listado de Art&iacute;culos</title>
  </head>
  <body>
    <h1>Listado de Art&iacute;culos</h1>
    <table>
      <tr><th>Fecha</th><th>T&iacute;tulo</th></tr>
    <?php foreach ($articulos as $articulo): ?>
      <tr>
        <td><?php echo $articulo['fecha'] ?></td>
        <td><?php echo $articulo['titulo'] ?></td>
      </tr>
    <?php endforeach; ?>
    </table>
  </body>
</html>
