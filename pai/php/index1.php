<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo PHP_VERSION,"<br>";

    //porównanie 
    $x=1;
    $y=1.0;
    if ($x==$y){
        echo '$x jest równa $y';
    }
    else{
        
        echo '$x nie jest równa $y';
    }
    echo '<br>';
    if ($x===$y){
        echo '$x jest równa $y';
    }
    else{
        
        echo '$x nie jest równa $y';
    }
    echo '<br>';
    echo gettype($x),"<br>";
    echo gettype($y),"<br>";
    
    $x=10;
    $y=1;
    echo $x <=> $y,'<br><hr>';

    $x=1;
    $x=$x++;
    echo $x; //1
    $x=++$x;
    echo $x; //2
    $y=$x++;
    echo $x; //3
    echo $y; //2
    $y=++$x*2-1;
    echo $x; //4
    echo $y; //7


    //operatory rzutowania
    //bool,int,float,string,array,object,unset
    $test1='123abc45';
    $test2=0;
    $test3=20;
    
    echo 'Typ danych $test1: ',gettype($test1),"<br>";
    $test1=(int)($test1);
    echo $test1,"<br>";
    echo 'Typ danych $test1: ',gettype($test1),"<br>";
    
    echo 'Typ danych $test2: ',gettype($test2),"<br>";
    $test2=(bool)($test2);
    echo $test2,"<br>";
    echo 'Typ danych $test2: ',gettype($test2),"<br>";
    
    echo 'Typ danych $test3: ',gettype($test3),"<br>";
    $test3=(float)($test3);
    echo $test3,"<br>";
    echo 'Typ danych $test2: ',gettype($test3),"<br>";
    
    //rozmiar intiger
    //kontrola typu zmiennych
    //is_int(), is_float(), is_string(), is_bool(), is_null()

    $x=1;
    echo "<hr>",is_int($x),'<br>';
    $w;
    echo @gettype($w);
    echo <<<koniec

    
koniec;
?>
</body>
</html>