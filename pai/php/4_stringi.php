<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stringi</title>
</head>
<body>
    <?php 
    $text=<<<T
    ZSK - Zespół
    Szkół
    Kominikacji<br>
T;
    echo $text;
    echo nl2br($text);

    $janusz='jANUsz';
    echo $janusz,'<br>';

    //zamiana na małe litery
    echo strtolower($janusz),'<br>';
    echo strtoupper($janusz),'<br>';

    //zmiana pierwszej lit na dużą
    $nowak="nowaK janusZ";
    echo ucfirst($nowak),'<br>';
    
    
    //zmiana pierwszej każdego słowa lit na dużą
    echo ucwords($nowak),'<br>';

    //txt  na samym początku aby działało
    $name=<<<T
janusz<br>
T;

    echo ucfirst($name),'<hr>';
$lorem=<<<LOREM
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium praesentium, dolorum ipsa explicabo dignissimos excepturi alias nemo, ea quaerat inventore, unde maxime harum fugit magnam voluptas incidunt. Odit, iusto enim!
    Iure quasi explicabo eum numquam, modi minus illo porro ut quibusdam nesciunt, cum ratione laudantium eos culpa quis commodi officiis placeat error vero hic! Porro corporis accusamus minus saepe a.
    Necessitatibus exercitationem dolorem magni corrupti illum animi nulla quisquam labore nam qui sit, inventore alias iusto libero quam sed possimus odio perferendis impedit tempore tenetur et odit! Reiciendis, eveniet maxime.
   
LOREM;

    echo $lorem,'<hr>';

    //ograniczanie ilości znaków w liniii
    echo wordwrap($lorem, 1, '<hr>');
    
    //czyszczenie bufora
    ob_clean();
   // var_dump($lorem);

    //stałe
    define("STALA","ABBA");
    echo STALA;

    $a = "2ab23c";
$b = 12;
$c = $a * $b;
var_dump($c);
    ?>
</body>
</html>