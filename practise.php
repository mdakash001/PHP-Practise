<?php
/**
 * Plugin Name: Php Practise
 */
function practiseMath($a,$b,$type){
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
practiseMath('10','5','rand');

echo"<br>";

function myCal($number1, $number2, $operators){
    if( $operators == "+" ){
        return $number1 + $number2;
    }elseif( $operators == "-" ){
        return $number1 - $number2;
    }elseif( $operators == "*" ){
        return $number1 * $number2;
    }elseif( $operators == "/" ){
        return $number1 / $number2;
    }elseif( $operators == "%" ){
        return $number1 % $number2;
    }elseif( $operators == "pi"){
        return pi();
    }elseif( $operators == "abs" ){
        return abs( $number1 );
    }elseif( $operators == "sqrt" ){
        return sqrt( $number1 );
    }elseif( $operators == "round" ){
        return round( $number2 );
    }elseif( $operators == "rand" ){
        return rand( $number1, $number2 );
    }else{
        echo "all is well";
    }
}
$add = myCal( 20 , 10, "+");
$sub = myCal( 20 , 10, "+");
$multi = myCal( 20 , 10, "*");
$divi = myCal( 20 , 10, "/");
$modulus = myCal( 20 , 10, "%");
$pi = myCal( "" , "", "pi");
$abs = myCal( -100 , "", "abs");
$sqrt = myCal( 49 , "", "sqrt");
$round = myCal( "" , 60.5, "round");
$rand = myCal( 20, 10, "rand");

echo "Add: ". $add. "<br>";
echo "Sub: ". $sub. "<br>";
echo "Multi: ". $multi. "<br>";
echo "Divi: ". $divi. "<br>";
echo "Modulus: ". $modulus. "<br>";
echo "PI: ". $pi. "<br>";
echo "Abs: ". $abs. "<br>";
echo "Sqrt: ". $sqrt. "<br>";
echo "Round: ". $round. "<br>";
echo "Rand: ". $rand. "<br>";





exit;
