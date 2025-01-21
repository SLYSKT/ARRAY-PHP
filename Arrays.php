<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Ejercicio 1 //
    echo "<b>Ejercicio 1</b> <br>";
    $counter = 1;
    $persona = array(
        //declaramos un array donde se va guardar datos
        "Nombre" => "Sara ",
        "Apellido" => "Martinez ",
        "Edad" => 23,
        "Ciudad" => "Barcelona ",
        "DNI" => "Q78789960 ",
        "Telefono" => 632789587,
    );

    foreach ($persona as $clave) {
        echo "Dato º $counter : $clave <br>";//aqui solo queremos muestrar los valores sin la clave que define o asociado con el valor.
        //en este caso, dentro del echo solo primimos los valores por ejemplo Sara,Martines, etc..
        $counter++;
    }
    echo "<br>";
    //*****************************************************************************************************************//
    
    // Ejercicio 2 //
    echo "<br> <b>Ejercicio 2</b> <br>";

    foreach ($persona as $clave => $valor) {
        echo "$clave: $valor<br>";
        // caso contrario al ejercicio uno, queremos muestrar todo la informacion 
        //del arrays es decir la clave y el valor de clave, no hace falta crear de nuevo el arrays ya que lo tenemos
        //solo lo tenemos que llamar con echo. 
    }
    echo "<br>";
    //*****************************************************************************************************************//
    
    // Ejercicio 3 //
    echo "<br> <b>Ejercicio 3</b> <br>";

    $counter2=1;

    $persona["Edad"] = 24;
    //Aqui hacemos un simple cambio valor de la clave Edad//
    
    foreach ($persona as $clave) {
        echo "Dato º $counter2 :$clave<br>";  //aqui de nuevo solamente quiero muestrar los valores. 
        $counter2++;
    }
    echo "<br>";
    //*****************************************************************************************************************//
    
    // Ejercicio 4 //  
    
    echo "<br> <b>Ejercicio 4</b> <br>";

    unset($persona["Ciudad"]);// esta funcion nos permite eliminar un contenido de un array
    
    var_dump($persona);//esta funtion muestra de manera detallado las variables, su tipo y valor de cada.
    echo "<br>";
    //*****************************************************************************************************************//
    
    // Ejercicio 5//   
    echo "<br> <b>Ejercicio 5</b> <br>";

    $letters = "a,b,c,d,e,f";
    $letters = explode(",", $letters);

    for ($i = count($letters) - 1; $i >= 0; $i--) {
        echo "Letter: " . ($i + 1) . " => " . $letters[$i] . "<br>";

    }
    echo "<br>";
    //*****************************************************************************************************************//
    // Ejercicio 6// 
    echo "<br> <b>Ejercicio 6</b> <br>";

    echo "Notas de los estudiantes: ";
    $notas = array(
        "Miguel" => 5,
        "Luis" => 7,
        "Marta" => 10,
        "Isabel" => 8,
        "Aitor" => 4,
        "Pepe" => 1
    );
    //lo mismo de antes. un array associativo.
    
    foreach ($notas as $clave => $valor) {
        echo "$clave: $valor ";
    } //// imprimo por pantalla primero tal y como esta el aray.
    
    echo "<br>";

    arsort($notas);
    // esta funcion lo he buscado en Wschool, lo que hace es ordenar de mayor a menor.
    // y lo pongo antes de el foreach si no, no va funcionar. 
    foreach ($notas as $clave => $valor) {
        echo "$clave: $valor ";

    }
    echo "<br>";
    //*****************************************************************************************************************//
    // Ejercicio 7// 

    //Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los 
    //nombres de los alumnos cuya nota esté por encima de la media//

    echo "<br> <b>Ejercicio 7</b> <br>";
 
    $suma = array_sum($notas);
    $media= $suma/count ($notas);
    $media_format = number_format($media, 2,'.');
    $total=0;

    echo"la media de las notas es $media_format";

    echo "<br>";

/* Ejercicio 8 //
Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y 
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del 
array. (1 punto)

*/

echo "<br> <b> Ejercicio 8 </b> </br>";

$nota_max = max($notas);
$mejor_alumno = array_search($nota_max, $notas);


echo"la nota mas alta es: $nota_max del alumno $mejor_alumno.";

    ?>

</body>

</html>