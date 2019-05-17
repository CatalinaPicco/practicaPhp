<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicios</title>
  </head>
  <body>
    <h1>Ejercicios</h1>

    <h4>Tabla del 2</h4>
    <!-- 1. Mostrar la tabla de multiplicar del 2 utilizando un for. -->
    <?php
      for ($i=1; $i <= 10; $i++) {
        echo "2 * $i = " . $i * 2;
        echo "<br>";
      }
    ?>

    <h4>Bucle</h4>
    <!-- 2. Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente). -->
    <?php
      $a =100;
      while ($a >= 85) {
        echo "$a <br>";
        $a--;
      }
    ?>

    <h4>Contador</h4>
    <!-- 3. Un bucle while que a partir de una variable $contador que toma valores de 1 a 5, muestre
    por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10. -->
    <?php
    $contador = 1;
    while ($contador <= 5) {
      echo $contador + $contador . "<br>";
      $contador++;
    }
    ?>

    <h4>Tirar la moneda</h4>
    <!-- 4. Utilizando un while haremos un programa que tire una moneda (seleccionará un número
    al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar,
    debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara. -->
    <?php
    $moneda = [0,1];
    $tiros = 0;
    $caras = 0;

    // while ($caras <= 5) {
    //   shuffle($moneda);
    //   if ($moneda[1] == 1) {
    //     $caras++;
    //   }
    //   $tiros++;
    // }

    while ($caras < 5) {
      $moneda = rand(0,1);
      if ($moneda == 1) {
        $caras++;
      }
      $tiros++;
    }


    echo "Tiros: $tiros para $caras caras";
    ?>

    <h4>Nombres en pantalla</h4>
    <!-- 5. Definir un array con 5 strings que sean nombres. Recorrer este array para imprimir cada
    uno de los nombres en pantalla.
    a. Resolver este problema con un for.
    b. Resolver este problema con while.
    c. Resolver este problema con un do/while.
    d. Resolver este problema con un foreach. -->
    <?php
    $nombres = ["mafalda", "juliana", "alberto", "juan", "alex"];

    foreach ($nombres as $unNombre) {
      echo "$unNombre <br>";
    }

    echo "<hr>";

    for ($i=0; $i < count($nombres) ; $i++) {
      echo "$nombres[$i] <br>";
    }

      echo "<hr>";

    $i = 0;
    while ($i < count($nombres)) {
      echo "$nombres[$i] <br>";
      $i++;
    }

      echo "<hr>";

    $i = 0;
    do {
      echo "$nombres[$i] <br>";
      $i++;
    } while ($i < count($nombres));

    ?>

    <h4>Aleatorios</h4>
    <!-- 6. Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir
    todos los números. La ejecución debe terminarse si alguno de los números encontrados es
    un 5 (Se debe imprimir “Se encontró un 5!”) -->
    <?php
    $numerosArray = [1,2,3,4,5];
    shuffle($numerosArray);
    $i = 0;
    while ($numerosArray[$i] != 5 && $numerosArray[$i] < count($numerosArray) ) {
      echo "$numerosArray[$i] <br>";
      $i++;
      if ($numerosArray[$i]== 5) {
        echo "Se encontró un 5!";
      }
    }
    ?>

    <h4>Pares</h4>
    <!-- 7. Definir un array con 10 números aleatorios entre 0 y 100. Recorrer este array contando
    cuantos números son pares. -->
    <?php
      $numerosArray = [14,25,13,74,15];
      $pares = 0;
      foreach ($numerosArray as $unNumero) {
        if ($unNumero % 2 == 0) {
          $pares++;
        }
      }
      echo "$pares son pares";
    ?>

    <h4>Mascotas</h4>
    <!-- 8. Definir una variable $mascota que sea un array asociativo
    a. En el índice animal debe decir qué animal es.
    b. En el índice edad debe decir la edad.
    c. En el índice altura debe decir la altura.
    d. En el índice nombre debe decir el nombre
    e. Recorrer los valores del array con un foreach imprimiendo (como ejemplo):
    animal: perro
    edad: 5
    altura: 0,60
    nombre: Sonic -->
    <?php
      $mascota = [
        "animal" => "perro",
        "edad" => 5,
        "altura" => "50.2cm",
        "nombre" => "pepi",
      ];

      foreach ($mascota as $key => $value) {
        echo "$key: $value <br>";
      }

    ?>

    <h4>Paises</h4>
    <!-- 9. Partiendo de un archivo con la siguiente variable definida:
    Crear un script que muestre el nombre de la capital y el país desde la variable $ceu. -->
    <?php
      $ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=>
      "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" =>
      "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin",
      "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
      "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino
      Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica
      Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
      "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw");

      $ceu1 = [];
      foreach ($ceu as $pais => $capital) {
        $ceu1[$capital] = $pais;
      }

      var_dump($ceu1);
    ?>

    <h4>Más países</h4>
    <!-- 10. Partiendo de un archivo con la siguiente variable definida:
    Crear un script que muestre el nombre de cada país y sus ciudades desde la variable $ceu
    con el siguiente formato:
    Las ciudades de Argentina son:
    ● Buenos Aires
    ● Córdoba
    ● Santa Fé
    Las ciudades de Brasil son:
    ● Brasilia
    ● Rio de Janeiro
    ● Sao Pablo
    15. A partir del ejercicio anterior:
    ● Agregarle a cada país un dato extra además de sus ciudades llamado
    esAmericano. Este valor debe ser true o false.
    ● Hacer que la impresión anterior no muestre países que no sean Americanos.
    IMPORTANTE: Para que esto funcione de manera prolija deberán crear un array asociativo
    por cada país en donde cada país tendrá los datos de sus ciudades y esAmericano. -->
    <?php
    $ceu = [
      "Argentina" => ["ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"], "esAmericano" => true],
      "Brasil" => ["ciudades" =>["Brasilia", "Rio de Janeiro", "Sao Pablo"], "esAmericano" => true],
      "Colombia" => ["ciudades" =>["Cartagena", "Bogota", "Barranquilla"], "esAmericano" => true],
      "Francia" => ["ciudades" =>["Paris", "Nantes", "Lyon"], "esAmericano" => false],
      "Italia" => ["ciudades" =>["Roma", "Milan", "Venecia"], "esAmericano" => false],
      "Alemania" => ["ciudades" =>["Munich", "Berlin", "Frankfurt"], "esAmericano" => false],
      ];

    foreach ($ceu as $unPais => $info) {
      if ($info["esAmericano"]) {
        echo "Las ciudades de $unPais son <br>";
        echo "<ul>";
        foreach ($info["ciudades"] as $unaCiudad) {
          echo "<li>$unaCiudad</li>";
        }
        echo "</ul>";
      }
    }
    ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </body>
</html>
