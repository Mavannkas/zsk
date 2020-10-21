<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // PHP code to demonstrate Bitwise Operator. 
// Bitwise AND 
$First = 5; 
$second = 3; 
$answer = $First & $second; 


  
print_r("Bitwise & of 5 and 3 is $answer"); 


  
print_r("\n"); 


  
// Bitwise OR 
$answer = $First | $second; 
print_r("Bitwise | of 5 and 3 is $answer"); 


  
print_r("\n"); 


  
// Bitwise XOR 
$answer = $First ^ $second; 
print_r("Bitwise ^ of 5 and 3 is $answer"); 


  
print_r("\n"); 


  
// Bitwise NOT 
$answer = ~$First; 
print_r("Bitwise ~ of 5 is $answer"); 


  
print_r("\n"); 


  
// Bitwise Left shift 
$second = 1; 
$answer = $First << $second; 
print_r("5 << 1 will be $answer"); 


  
print_r("\n"); 


  
// Bitwise Right shift 
$answer = $First >> $second; 
print_r("5 >> 1 will be $answer"); 


  
print_r("\n");
    ?>
</body>
</html>