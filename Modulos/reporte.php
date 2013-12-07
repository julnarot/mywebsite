<html>
<body>
<?php
include("configuracion.php");
$query = "SELECT * FROM Vacante ORDER BY id";
$result = mysql_query($query) or die("Error en la instruccion SQL");
if ($row = mysql_fetch_array($result)){
echo "<table border = '1'>";
echo "<tr> ";
echo "<td><b>id</b></td> ";
echo "<td><b>Descripción</b></td> ";
echo "<td><b>Tiempo</b></td> ";
echo "<td><b>Salario</b></td> ";
echo "<td><b>Email</b></td> ";
echo "<td><b>Teléfono</b></td> ";
echo "<td><b>Empresa</b></td> ";
echo "<td><b>Nombre de Vacante</b></td> ";
echo "</tr> ";
do {
echo "<tr> ";
echo "<td>".$row["id"]."</td> ";
echo "<td>".$row["descripcion"]."</td> ";
echo "<td>".$row["tiempo"]."</td> ";
echo "<td>".$row["salario"]."</td> ";
echo "<td>".$row["email"]."</td> ";
echo "<td>".$row["telefono"]."</td> ";
echo "<td>".$row["empresa"]."</td>";
echo "<td>".$row["nombre"]."</td> ";
echo "<td><a href=modificar.php?id=".$row["id"].">Editar</a></td>";
echo "</tr> ";
} while ($row = mysql_fetch_array($result));
echo "</table>";
echo "</table> ";
} else {
echo "'Aún no hay datos que mostrar'";
}
?>
<a href=index.php>Insertar<a>
<a href=borrar.php>Borrar<a>
<a href=aleatorio.php>Mostrar 6 registros aleatoriamente<a>;
</body>
</html>