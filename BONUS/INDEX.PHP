<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $variabileProva='titolo di prova al interno di PHP';
    $variabileEsterna=' contenuto estento al "BOX" PHP ';
    $nome=$_GET['nome'];
    //['nome'] indica il nome della variabile da inserire nella quesri string!! /link! sembra molto il v-model di vue.
    //mentre $nome= è la variabile da stampare poi in HTML
    $nome2=$_GET['nome'];

    
    echo '<div>';
    echo '<h1> ';
    echo $variabileProva;
    echo '</h1>';
    echo '</div>';

    ?>
    <h1>esterno a PHP!!!</h1>
    <P>
    <?php echo $variabileEsterna ?>
    </P>
    <h1>mi chiamo <?php echo $nome ?></h1>

    <!-- esempio di vmodel -->
    <input type="text"<?php $nome2=$_GET[''];?>>
    <h1>mi chiamo <?php echo $nome2 ?></h1>


</body>
</html>