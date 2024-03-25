<?php
/**
 * Plugin Name: Php Practise
 */
//str reples
$str="(b)an(g)lades{h}";
$title=['(',')','{','}'];
$title2=['<span style="color:red;">','</span>','<span style="color:green; font-size:30px;">','</span>'];
echo str_replace($title,$title2,$str);

echo"<br>";

$lorm="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
echo str_replace("Lorem","<span style='color:red;'>Lorem</span>",$lorm);

echo"<br>";
//Define

define("raju","Bangladesh is beautiful country");
echo raju;

echo"<br>";
//pi Math
echo(pi());
echo"<br>";
//str lenth & word count
$lenth="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
echo strlen($lenth);
echo"<br>";

echo str_word_count($lenth);
echo"<br>";

//Cast to String
 $stng=25;
 $stng =(string) $stng;
 var_dump( $stng);
 echo"<br>";
//If else

$text=50;
$text2=59;
if($text!==$text2){
    echo "you are the best";
}elseif($text>$text2){
    echo "great";
}else{
    echo "you are bad";
}

 echo"<br>";
 //switch case
 $text3=98;
 $text4=99;
 switch( $text3){
   case $text3:
    echo "you are the best";
    break;
    case  $text4 :
    echo "great";   
    break;
    default:
    echo "you are bad";
 }
 echo"<br>";

 //Function
 function myMessage() {
    echo "Hello world!";
  }
  myMessage();
  echo"<br>";

//  Funstion calclutor with switch
function practiseMath($type,$a,$b){
    switch ($type){
        case "sum":
            echo $a+$b;
            break;
        case "sub":
            echo $a-$b;
             break;
        case "mul":
            echo $a*$b;
            break;
        case "divi":
            echo $a/$b;
            break;
        case "pi":
             echo pi();
            break;
        case "rand":
            echo rand();
            break;
        default: echo "This math is End";
    }
}
practiseMath('divi','10','5');

echo"<br>";

//  Funstion calclutor with If Else

function mycal($type, $x, $y){
    if($type = "add"){
        echo $x + $y ;
    }elseif($type = "sub"){
        echo $x-$y;
    }elseif($type="mul"){
        echo $x*$y;
    }elseif($type="divi"){
        echo $x/$y;
    }else{
        echo "this is end";
    }
}
mycal("add",20, 10);
mycal("sub",20, 10);
mycal("mul",20, 10);
mycal("divi",20, 10);

echo"<br>";

//while loop

$t=1;
while($t <= 10){
    echo "This is Rajendronath $t <br>";
    $t++;
}
echo"<br>";

$l=10;
while($l < 80){
    echo $l;
    $l +=4;
}
echo"<br>";

$raj=1;
while ($raj < 6) {
    if ($raj == 3) break;
    echo $raj;
    $raj++;
  }
echo"<br>";

$kk=1;
while($kk<10){
    if($kk == 7) continue;
    echo $kk;
    $kk++;
}

echo"<br>";

$nur=0;
while($nur<100){
    $nur +=10;
    echo "$nur <br>";
}
echo"<br>";

//while loop calender

$day=1;
$month=9;
$year=2024;
while(checkdate($month,$day,$year)){
    echo "$day-$month-$year <br>";
    $day ++;
}


exit;
