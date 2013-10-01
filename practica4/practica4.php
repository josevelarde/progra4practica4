<!DOCTYPE html>
 <html>
 <head>

 <h1> PRACTICA DE PAISES</h1>
 
 </head>
 <body>
<?php
$paises=array();

$paises["México"]=array("Guadalajara", "Baja California", "Durango", "Chihuahua", "Monterrey");

$paises["Estados Unidos"]=array("Washington", "New York", "Texas", "Los Angeles", "Dakota");

$paises["Brasil"]=array("Brasilia", "Rio de Janeiro", "Sao Paulo", "Porto Alegre", "Copacabana");

$paises["Inglaterra"]=array("Londres", "Chelsea", "Manchester", "Liverpool", "Oxford");

$paises["Japón"]=array("Tokio", "Osaka", "Hirosima", "Nagazaki", "Yokohama");

$paises["Canadá"]=array("Ottawa", "Victoria", "Gander", "Brandon", "Montereal");

$paises["China"]=array("Shanghái", "Pekín", "Cantón", "Tianjin", "Hong Kong");

$paises["Egipto"]=array("El Cairo", "Lúxor", "Alejandría", "Asuán", "Sharm el-Sheij");

$paises["España"]=array("Toledo", "Barcelona", "Santiago de Compostela", "Valencia", "Cartagena");

$paises["Italia"]=array("Roma", "Milán", "Nápoles", "Turin", "Génova");



echo "<ul id=jaja>";
foreach ($paises as $pais => $ciudades) {
echo "<li id=es>".$pais."<ul>";
foreach ($ciudades as $ciudad) {
echo "<li>".$ciudad."</li>";

}
echo "</ul></li>";
}
?>

</body>
</html>
