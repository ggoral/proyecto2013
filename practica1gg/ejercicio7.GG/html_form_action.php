<!DOCTYPE html>
<HTML>
 <HEAD>
   <meta http­equiv="content­type" content="text/html;charset=utf-8" />
   <TITLE>Formularios</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <?php
       $metodo=$_SERVER['REQUEST_METHOD'];
       $cad_consulta=$_SERVER['QUERY_STRING'];
       echo "<H2>Formularios: método $metodo</H2>";
       echo "<I>Query String</I>: $cad_consulta <HR>";
       foreach ($_REQUEST as $clave => $valor)
            echo "<I>$clave</I> = $valor <BR>";
       echo "<HR><BR><HR>";
       echo "<PRE><A HREF='javascript:history.go(-1)'>volver</A></PRE>";
     ?>
   </CENTER>
 </BODY>
</HTML>
