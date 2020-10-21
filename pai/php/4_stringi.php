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

    // usuwanie białych znaków
  $name = "Anna";
  $name1 = "  Anna ";
  echo strlen($name); //4
  echo strlen($name1); //7
  
  echo strlen(rtrim($name1)); //6
  echo strlen(ltrim($name1)); //5
  echo strlen(trim($name1)); //4
  
// przeszukiwanie ciągów znaków
  $address = "Poznań ul. Szwajcarska 1, tel. (61) 123-45-67";
  $search = strstr($address, "tel");
  echo $search,'<br>'; //tel. (61) 123-45-67
  
  $address = "Poznań ul. Szwajcarska 1, tel. (61) 123-45-67";
  $search = strstr($address, "tel", true);
  echo $search,'<br>'; //Poznań ul. Szwajcarska 1,
  
  $address = "Poznań ul. Szwajcarska 1, tel. (61) 123-45-67";
  $search = stristr($address, "Tel");
  echo $search,'<br>'; //tel. (61) 123-45-67
  echo strstr('zsk@gmail.com', '@'),'<br>'; //@gmail.com
  echo strstr('zsk@gmail.com', 64),'<br>'; //@gmail.com
  $name = 'Janusz';
  echo substr($name, 2); //nusz
  echo substr($name, 2, 2); //nu
  echo substr(strstr('zsk@gmail.com', '@'), 1);
// przetwarzanie ciągów znaków
  $replace = str_replace("%name%" , " Anna ", "Masz na imię: %name%");
  echo $replace,'<br>';
  $login = "bączek";
  echo strlen($login); //7
  echo mb_strlen($login); //6
  echo "<hr>Login: $login<br>";
  $censure = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
  $replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');
  $correctLogin = str_replace($censure, $replace, $login);
  echo "Poprawny login: $correctLogin";
    ?>
</body>
</html>