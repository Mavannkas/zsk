<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dołączanie plików</title>
</head>
<body>
    <h3>Początek pliku</h3>
    <?php 
    include './13_1_file.php';
    include_once './3_1_file.php';
    
    require './3_1_file.php';
    require_once './3_1_file.php';//Lepsze! xD


    ?>
    <h3>Koniec pliku</h3>
</body>
</html>