<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <h1>soy $booll</h1>;
    <button onclick=llamarPHP() type="button">click for <span>?</span></button>;
    <!-- https://es.stackoverflow.com/questions/63227/ejecutar-funcion-php-en-el-onclick-de-un-boton -->
    <?php
        $booll=true;
        $camciarBoolean = function() use ($booll){
            if($booll){
                $booll = false;
            }
            else{
                $booll = true;
            }
        };
        $mostrarBoolean = function() use ($booll){
            return $booll;
        }
    ?>
    <script>
        function llamarPHP(){
            <?php echo $mostrarBoolean()?>
        }
    </script>
    
</body>
</html>