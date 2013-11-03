<!DOCTYPE html>
<html>
  <head>
    <title>Listado de Usuarios</title>
  </head>
  <body>
    <h1>Listado de Usuarios</h1>
    <table>
      <tr><th>Usuario</th><th>Pass</th></tr>
    <?php foreach ($usuarios as $usuario): ?>
      <tr>
        <td><?php echo $usuario['user'] ?></td>
        <td><?php echo $usuario['pass'] ?></td>
      </tr>
    <?php endforeach; ?>
    </table>
  </body>
</html>
