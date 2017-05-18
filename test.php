<?php
require_once('src/SeederRandomData.php');

use Cyddalupan\SeederRandomData\SeederRandomData as SeederRandomData;

//header
echo "<h2>Random Things Sample</h2>";
//code
$thingSeed = '';
for ($thingw=0; $thingw < rand(1,3); $thingw++) { 
        for ($thin_s=0; $thin_s < rand(1,5); $thin_s++) { 
                $thingSeed =  $thingSeed.SeederRandomData::$SeedThingsArray[
                	rand(0,count(SeederRandomData::$SeedThingsArray)-1)
                ];
        }
        $thingSeed =  $thingSeed.' ';
}
//output
echo $thingSeed;

//header
echo "<h2>Random Food Sample</h2>";
//code
$foodSeed = '';
for ($foodw=0; $foodw < rand(1,4); $foodw++) { 
        for ($foods=0; $foods < rand(1,4); $foods++) { 
                $foodSeed =  $foodSeed.SeederRandomData::$SeedFoodArray[
                	rand(0,count(SeederRandomData::$SeedFoodArray)-1)
                ];
        }
        $foodSeed =  $foodSeed.' ';
}
//output
echo $foodSeed;

#####################################################################

//header
echo "<h2>Random Unit of measurement</h2>";
//code
$UomSeed = SeederRandomData::$SeedUomArray[rand(0,count(SeederRandomData::$SeedUomArray)-1)];
//output
echo $UomSeed;