<html>
<head>
     <title>Ejercicio3</title>
	 <meta charset="utf-8"/>
</head>
<body>
<h1>PROGRAMACION DE APLICACIONES WEB</h1>
<h4>Mostrar en pantalla una tabla de 1 por 10</h4>
<?php
//al codigo deberas agregar una tabla para que la lista sea visualizada
echo "<table border=1>";
echo "<h2>BUCLE WHILE</h2><br>";

for ($i=0; $i<10;$i++)// este es el bucle,mientras se cumpla la condicion
{
    echo "<tr>";
echo "<td>"."linea".$i."<br>"."</td>";// se ejecuta esta sentencia,es decir 10 veces
}
   echo   "</tr>";
   echo "</table>";  
?>
<p>NOMBRE DEL ALUMNO:Ana Cristina</P>
<a href="index.php">regresar a menu</a>
    </center>
         <br>
       <center> <img src="img/imagen2.jpg" width="180px" height="180px"/></center>
</body>
</html>