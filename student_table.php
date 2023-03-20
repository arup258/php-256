<?php
// $student = array( "Majeed" , "Saleem" , "Noman" , "Qasim" ,"Ali", "Arup","Suman" );

// $marks = array("Ali" => 400, "Javeed" => 600, "Azra" => 500, "Arup" => 700, "Suman" => 547) ;

//  foreach ($student as $name)

// {


// echo  $name . "<br />" ;

// echo $marks['Ali'] .    "<br />";

// echo $marks['Javeed'] . "<br />";

// echo $marks['Azra'] .   "<br />";
// echo $marks['Arup'] .   "<br />";
// echo $marks['Suman'].   "<br />";

// }


// an indexed array
$students = array("mike", "john", "rocky", "scarlett");
// storing array length in a variable
$arrlength=count($students);
// creating for loop
for($i = 0; $i < $arrlength; $i++)
{
  echo $students[$i];
  echo "<br>";
}
 
// marks defined  

$marks =array("35","40","24","35");

$arrlength=count($marks);

for($i=0; $i < $arrlength; $i++)

{
   echo $marks[$i];
   echo"<br>";
}

?>





