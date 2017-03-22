<html>
<head>
     <title>Ejercicio2</title>
	 <meta charset="utf-8"/>
</head>
<body>
<h1>PROGRAMACION DE APLICACIONES WEB</h1>
<h4>Mostrar en pantalla una tabla de 10 por 10 con los numeros del 1 al 100</h4>
<?php
echo "<table border=1>";
$n=1;
for($n1=1; $n1<=10; $n1++)
{
 echo "<tr>";
 for ($n2=1; $n2<=10; $n2++)
 {
 echo "<td>", $n, "</td>";
 $n=$n+1;
 }
 echo "</tr>";
}
echo "</table>";
?>
<p>NOMBRE DEL ALUMNO:Ana Cristina</P>
<a href="index.php">regresar al menu</a>
    </center>
         <br>
       <center> <img src="img/imagen1.jpg" width="180px" height="180px"/></center>
</body>
</html>