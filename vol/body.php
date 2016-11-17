<?php
require_once(__DIR__ . '/cbodycalculator.php');


$superMan[] = new BodyCalculator("Мужской", 24, 181, 68, 1.2);
$wonderWomen[] = new BodyCalculator("Женский", 23, 162, 50, 1.38);
?>
<!DOCTYPE html>
<html>
<head>
	<title>BodyCalculator</title>
	<meta charset="utf-8">
</head>	

<body>
	<h1>Результат расчета BodyCalculator</h1>
	
	<h2>superMan</h2>
	<p>Уровень метаболизма: <?= $superMan[0]->metabolicRate() ?></p>
	<p>Дневное количество БЖУ для похудения: <?= $superMan[0]->calculationFPCSlimming() ?></p>
	<p>Количество воды на день, мл: <?= $superMan[0]->dailyWater() ?></p>
	<p>Индекс массы тела BMI: <?= $superMan[0]->indexMassBMI() ?></p>
	<p>Площадь поверхности тела, м кв: <?= $superMan[0]->bodySurfaceArea() ?></p>
	
	<h2>wonderWomen</h2>
	
	<p>Уровень метаболизма: <?= $wonderWomen[0]->metabolicRate() ?></p>
	<p>Дневное количество БЖУ для похудения: <?= $wonderWomen[0]->calculationFPCSlimming() ?></p>
	<p>Количество воды на день, мл: <?= $wonderWomen[0]->dailyWater() ?></p>
	<p>Индекс массы тела BMI: <?= $wonderWomen[0]->indexMassBMI() ?></p>
	<p>Площадь поверхности тела, м кв: <?= $wonderWomen[0]->bodySurfaceArea() ?></p>
</body>
</html>