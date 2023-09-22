<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TYPE_DATA-FLOAT</title>
</head>
<body>
    <?php
        $x = 8 - 6.4; 
        $y = 1.6;
        var_dump($x == $y); // no es verdad

        #   PHP piensa que 1.6 (proveniente de una diferencia) no es igual a 1.6. Para que funcione, use round()

        var_dump(round($x, 2) == round($y, 2)); // esto es cierto

        #Esto sucede probablemente porque $x no es realmente 1.6, sino 1.599999... y var_dump te lo muestra como 1.6.
    ?>
</body>
</html>