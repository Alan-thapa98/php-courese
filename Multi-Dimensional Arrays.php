<?php

echo "Welcome to multi dimensional arrays in php <br>";

// Creating a 2 dimensional array
$multiDim = array(array(2,5,7,8),
                  array(1,2,3,1),
                  array(4,5,0,1));


// echo var_dump($multiDim);
// echo $multiDim[1][2];

// Printing the contents of a 2 dimensional array

// for ($i=0; $i < count($multiDim); $i++) { 
//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }

for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}







// for more examples

$vehicles = array (
  array("Suzuki",21,12),
  array("Honda",12,9),
  array("BMW",22,1),
  array("Corolla",17,12)
);
echo $vehicles[0][0].": In stock: ".$vehicles[0][1].", sold: ".$vehicles[0][2].".<br>";
echo $vehicles[1][0].": In stock: ".$vehicles[1][1].", sold: ".$vehicles[1][2].".<br>";
echo $vehicles[2][0].": In stock: ".$vehicles.", sold: ".$vehicles[2][2].".<br>";
echo $vehicles[3][0].": In stock: ".$vehicles.", sold: ".$vehicles[3][2].".<br>";

for ($r = 0; $r < 4; $r++) {
  echo "<p><b>Row number $r</b></p>";
  echo "<ul>";
  for ($c = 0; $c < 3; $c++) {
    echo "<li>".$vehicle[$r][$c]."</li>";
  }
  echo "</ul>";
}

?>
