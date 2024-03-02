<?php  
print "Hi </br>"; //my return value na 1, inagamit pag return ng return 
echo "Hello world</br>"; // walang return, mas mabilis

//constants
//constants means di na pwede baguhin, global sya in php script
//to use contants use the key define(label)
define("Master", "Mark Jastine", true); //true means it is incase-sensitive
//Master is the variable
//Mark Jastine is the variable value

echo Master;

//creating php variable
$var1 = "hello </br>";
$var_num1 = 34;
$var_num2 = 45;
$var_sum = $var_num1 + $var_num2;
echo $var1;
echo $var_sum;

//data types
//to know what kind of data type
var_dump($var_sum);

$text = "this is text"; //string
$number = 45;   //int
$float = 90.0;  //float
$boolean = true;    //boolean
$array = array("Saging","Mansanas",45, 69.5);   //array

//pwede rin maglagay ng variable sa loob ng array
//ex
$array1 = array($text,$number,$float,$boolean,$array);  
//var_dump($array1)


//concatenation we use . (dot)
echo $text. " ".$number. "</br>";
//to know the lenght of a certain variable
//inabiling yong character including space(s)
echo strlen($number);

//to get the position
 echo strpos($text, "text");
echo "";
 //PHP operators
 $num1 = 260;
 $num2 = 290;

 echo "The sum of two number is ". $num1 + $num2. "</br>";
 echo $num1 - $num2. "</br>";
 echo $num1 * $num2. "</br>";
 echo $num1 / $num2. "</br>";
 echo $num1 % $num2. "</br>";
 $x;
 $y;

//if statement
if($num1 === $num2){ // === means identical
    echo 'True';
}else{
    echo 'False';
}

if($x= 45 == $y=45){
    echo "true";
}else{
    echo 'false';
}
echo "<br>";
//switch statement
$mango="yellow";

switch($mango){
    case 'yellow':
        echo 'Hinog na';
        break;
    case 'green':
        echo 'Hilaw pa';
        break;
    case 'black':
        echo 'bulok na';
        break;
    default:
        echo "Wala sa agapamilian";
}
echo "<br>";
//loop
//4 types of loop: while loop, do-while loop, for loop, foreach loop
$x = 1;
while ($x <= 10){
    echo "Count to: ". $x . "<br>";
    $x++;
}

//irurun nya muna yong do bago while
do{
    echo "bilang na to ay ".$x. "<br>";
    $x++;
}while($x <= 10);

//note: the diff between while is loopp agad unlike sa do-while na agawin muna yong do bago loop

for($i = 2; $i <= 5; $i++){
    echo "Run " . $i. "<br>";
}

//foreach is design for array
$data_types = array("santol","manga",90,"chanak");
foreach($data_types as $values){
    echo $values ."<br>";
}
?>