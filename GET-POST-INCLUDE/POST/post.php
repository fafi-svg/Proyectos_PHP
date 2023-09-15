<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form action="post.php" method="post">
            <div class="input__name">
                <label for="name">NOMBRE</label>
                <input id="name" type="text" name="nombre">
            </div>
            <div class="input__email">
                <label for="email">EMAIL</label>
                <input id="email" type="email" name="email">
            </div>
            <div class="input__submit">
                <input type="submit" value="submit">
            </div>
        </form> 
        Hola: <?php 
         if(isset($_POST["nombre"])){
            echo $_POST['nombre'];
         }else{
           echo "no hay nada";
         }
        ?><br>
        
        Tu correo es: <?php 
         isset($_POST['email'])? print $_POST['email'] : "no hay nada";
        ?>
</body>
</html>