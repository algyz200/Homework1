<?php  

require_once('vendor/autoload.php');
require('calculateHomeWorkSum1.php'); // sito nepavyko issiaiskint

$colors = new Wujunze\Colors();

echo("calculateHomeWorkSum ");
$object = new Root;
$object2 = $object::calculateHomeWorkSum(3,2.2,'1');
echo $colors->getColoredString($object2, "white", "yellow");
echo "\n";

echo("Nfq\Akademija\NotTyped\calculateHomeWorkSum ");
$object = new Nfq\Akademija\NotTyped\NotTyped;
$object2 = $object::calculateHomeWorkSum(3,2.2,'1');
echo $colors->getColoredString($object2, "white", "green");
echo "\n";

echo("Nfq\Akademija\Soft\calculateHomeWorkSum ");
$object = new Nfq\Akademija\Soft\Soft;
$object2 = $object::calculateHomeWorkSum(3,2.2,'1');
echo $colors->getColoredString($object2, "white", "red");
echo "\n";

echo("Nfq\Akademija\Strict\calculateHomeWorkSum ");
$object = new Nfq\Akademija\Strict\Strict;
$object2 = $object::calculateHomeWorkSum(3,2.2,'1');
echo $colors->getColoredString($object2, "white", "black");
echo "\n";

?>