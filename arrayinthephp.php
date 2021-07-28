<!-- <?php 
//$a=array(10,20,30,40,50,60,70,80,90,100);
//$len=count($a);

//for ($i=0; $i<=$len-1; $i++)
//{
 //   echo $a[$i]+"<br>";
//}


?> -->

<!-- ascoiative arrays -->
<!-- in the is keyvalue give value -->
<!-- in the array you can enter only on value /number/12-->
<?php 
$a=array("person1"=>"26","person2"=>"40","person3"=>"54","person4"=>"12");
foreach ($a as $age => $age_value) {
	echo $age . ":" . $age_value. "<br>";
}

?>
<!-- end of ascoiative arrays -->


<!-- multidimanctional  arrays -->
<!-- in the is keyvalue give value -->
<!-- in the array you can enter more than on  on value /number/12-->
<?php 
$a=array(
    array("stu1",12,18),
    array("stu2",14,18),
    array("stu3",15,19),
        );



// how to create a loop and 

for ($i=0; $i<3; $i++){
    for($j=0; $j<3; $j++){
        echo $a[$i][$j]."<br>";
    }
}


?>
<!-- end of multidimanctional  arrays -->

