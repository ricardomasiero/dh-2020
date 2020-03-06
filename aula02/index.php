<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula  02</title>
</head>
<body>
<h1>Loops e Funções</h1>
    <p> For Utilizzando incremento </p>
    <?php 
    for ($i=1; $i < 11; $i++) { 
        echo  $i . "<br>";
    }
    
    ?>
<br>
<p> For Utilizando decremento </p>
<?php 
    for ($i=10; $i > 0; $i--) { 
        echo  $i . "<br>";
    }
    
    ?>
    <hr>    
    <p> While Utilizando Incremento</p>
<?php 
    $i = 1;
    While($i <= 10) {
        echo $i . "<br>";
        $i++;
        
    }
?>
<hr>
<br>
<p> While Utilizando decremento</p>
<?php 
$i = 10;
While ($i > 0) {
    echo $i . "<br>";
    $i--;
    
}
?>
<hr>
<p>Do While Utilizando Incremento </p>

<?php 
$i = 1;
do {
    echo $i . "<br>";
    $i++;
} while ($i <=10);
?>
<hr>
<p>Do While Utilizando Decremento </p>

<?php 
$i = 10;
do {
    echo $i . "<br>";
    $i--;
} while ($i > 0);
?>
<hr>

<p> Exemplos com Percorrendo Arrays com Loops</p>
<p> For percorrendo Array</p>

<?php
//Array de animais que será utilizado para exemplos
//onde iremos percorrer array
$animais = ["Gato","Cachorro","Girafa","Elefante","Leão"];

    $resultado = count($animais);
    echo $resultado;
    # code...
    ?>
<hr>

<?php
//Array de animais que será utilizado para exemplos
//onde iremos percorrer array
$animais = ["Gato","Cachorro","Girafa","Elefante","Leão"];
for ($i=0; $i < count($animais) ; $i++) { 
    echo $animais[$i] . "<br>";

}
    ?> 
<hr>
<p> While percorrendo array</p>
<?php
$animais = ["Gato","Cachorro","Girafa","Elefante","Leão"];
$i=0;
while ($i < count($animais)) {
    echo $animais[$i] . "<br>";
    $i++;
}

?>

<hr>
<p> DO While percorrendo array</p>
<?php
$i = 0;
$animais = ["Gato","Cachorro","Girafa","Elefante","Leão"];
do {    
    echo $animais[$i] . "<br>";
    $i++;
} while ($i < count($animais));
?>

<hr>

<p> FOREACH percorrendo array</p>

<?php
foreach($animais as $animal) {
    echo $animal . "<br>";
}
?>

<hr>

<p>Foreach percorrendo array assossiativo</p>

<?php
$user = [
"nome" => "Marcelão",
"email" => "mdiament@digitalhouse.com",
"telefone" => "(11) 96596-5995"
];
foreach ($user as $key => $value) {
    echo $key ." ". $value . "<br>";
}


?>

<hr>
<p> FUNCTION que retorna tabuada de um número </p>
<?php function tabuada($numero){
    $resultado =0;
    $i = 0;
for ($i=1; $i < 11; $i++) { 
    $resultado = $numero * $i;
    
}
}
tabuada(10);
?>
</body>
</html>