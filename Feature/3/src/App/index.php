<?php
require_once('Point.php');
require_once('Vector.php');
#require_once('Point.php');

$T1 = new \App\Point();

$T1->x = rand(0, 10);
$T1->y = rand(0, 10);
echo "Координата х точки: " . $T1->x . "\n";
echo "Координата y точки: " . $T1->y . "\n";
$V1 = new \App\Vector();
$V2 = new \App\Vector();
$V3 = new \App\Vector();
$V1->x = rand(0, 15);
$V1->y = rand(0, 15);
$V3->x = $V1->y*(-1);
$V3->y = $V1->x;

echo "Координаты вектора V1 (" . $V1->x .", ". $V1->y . ")\n";
echo "Координаты вектора V2 (" . $V2->x .", ". $V2->y . ")\n";
echo "Координаты вектора V3 (" . $V3->x .", ". $V3->y . ")\n";

echo "Длина вектора V1: " . $V1->Length() . "\n";
echo "Длина вектора V2: " . $V2->Length() . "\n";
echo "Длина вектора V3: " . $V3->Length() . "\n";

if ($V1->IsNormal($V3)==1)
    echo "Вектор V1 перпендикулярен вектору V2" . "\n";
else echo "Вектор V1  не перпендикулярен вектору V2" . "\n";

$T1->ChangeByVector($V1);
echo "Координаты точки Т1 (" . $T1->x .", ". $T1->y . ")\n";
