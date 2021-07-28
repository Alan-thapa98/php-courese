<!-- multidimanctional  arrays -->
<!-- in the is keyvalue give value -->
<!-- in the array you can enter more than on  on value /number/12-->
<?php 
$a=array(
    array(array("i","am","stu1","student"),12,18),
    array("stu2",14,18),
    array("stu3",15,19),
        );



// how to create a loop and 

for ($i=0; $i<3; $i++){
    for($j=0; $j<3; $j++){
        echo $a[$i][$j]."<br>";
    }
}
echo $a[0][0][0];


?>
<!-- end of multidimanctional  arrays -->