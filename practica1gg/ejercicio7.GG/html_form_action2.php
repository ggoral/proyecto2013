<!DOCTYPE html>
<HTML>
 <HEAD>
   <meta http­equiv="content­type" content="text/html;charset=iso-8859-1" />
   <TITLE>Formularios</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <?php 
       $metodo=$_SERVER['REQUEST_METHOD']; 
       $cad_consulta=$_SERVER['QUERY_STRING'];
     ?>
     <h2> Formularios: M&eacute;todo2 <?php echo $metodo; ?></h2>
     <I> Query String </I>: <?php echo $cad_consulta; ?>
     <BR>
     <?php foreach ($_REQUEST as $clave => $valor) { ?>
     <I><?php echo $clave ?> </I> = <?php echo $valor ?> <BR>
     <?php }?>
     <HR><BR><HR>
     <PRE><A HREF='javascript:history.go(-1)'>volver</A></PRE>
   </CENTER>
 </BODY>
</HTML>
