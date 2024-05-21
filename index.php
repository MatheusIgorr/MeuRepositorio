<?php
define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte: <br>";
echo $numero."<br>";
?>
<?php
$x = 5; //Ambito global

function meuTeste () {
    echo "<p>A variavel x dentro da função é: $x</p><br>";
    }
    //Ambito local
         meuTeste ();
    echo "<p>A variavel x dentro da função é: $x</p><br>";
   
?>

<?php
$x = 5;
$y = 10;
function numero(){
    global $x, $y;
    $y= $x + $y;
    }
numero();
echo $y;
?>

<?php
//ambito estatico
function teste(){
        static $x = 0;
        echo $x;
        $x++;
    }
echo "<br>";
echo "<br>";
teste();
echo "<br>";
teste();
echo "<br>";
teste();

?>
<?php
echo "<br>Geovane da Costa";
print "<br>Geovane da Costa<br><br>";
?>
<?php
$x = 5;
var_dump($x);
echo "<br>";
?>
<?php
$x = 'Minha string';
$y = "Minha string 2!";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
?>
<?php
$x = 3.14;
var_dump($x);
echo "<br>";
?>
<?php
$x = true;
var_dump($x);
echo "<br>";
?>
<?php
$cars =array("BMW","BYD","AUDI");
var_dump($cars);
echo "<br>";
?>
<?php
$x="Meu Teste";
echo "<br>";
echo substr($x, 3);
?>
 <?php
//<----*Caracteres de escape*---->
 //\' Single Quote
 //\" Double Quote 
 //\$ PhP variables
 //\n New Line
 //\r Carriage Return
 //\t Tab
 //\f Form Feed
 //\ooo Octal Valve
 //\xhh Hex Value
 
$x="Somos os chamados \"Viking\"do norte";
echo $x;
echo"<br>";
?> 

<?PhP
$a=5;
$b=5.34;
$c="25";
var_dump($a);
echo"<br>";
var_dump($b);
echo"<br>";
var_dump($c);
echo"<br>";
var_dump($y);
echo"<br>";
?>
<?PHP
//verifique se o tipo de uma variavel é inteiro
$x=5985;
var_dump(is_int($x));
echo"<br>";
//verificar novamente
$x=3.14;
var_dump(is_int($x));
echo"<br>";
$x=10.123;
var_dump(is_float($x));
echo"<br>";
$x=1.9e411;
var_dump(is_infinite($x));
echo"<br>";
?>


<?PHP
echo"<br>";
$a=25.232;
$b=5489;
$c=12.5e896;
$y="Meu teste";
var_dump(is_string($a));
echo"<br>";
var_dump(is_string($b));
echo"<br>";
var_dump(is_string($c));
echo"<br>";
var_dump(is_string($y));
?>

<?PHP
echo"<br>";
//Converter Float
echo"<br>";
$x=777.45075;
$int_cast=(int)$x;
echo $int_cast;
?>