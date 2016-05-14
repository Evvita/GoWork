<?PHP
require_once('Kolo.class.php'); 
require_once('Silnik.class.php'); 
require_once('Auta.class.php'); 

$silnik = new Silnik("Diesel",120);
$silnik->wlaczony = "Brrrum";
echo $silnik->wlaczony;
echo "<br />";
$silnik_ele = new Silnik("Elektryczny", 100);

$mojeAuto = new Auta($silnik);
echo $mojeAuto->getPrzebieg();
echo "<br />";
$mojeAuto->setJedz(244);
echo $mojeAuto->getPrzebieg();
echo "<br />";
?>