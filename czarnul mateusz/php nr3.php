<!doctype html>
<html>
<body>


<?php  
$a = $_GET['licz'];
function fib($a){
    if($a==1){
        return 1;

    }

    elseif($a==0){
        return 0;
    }
 

else{
    return fib($a-1) + fib($a-2);
}

}

echo (fib($a));
?>
 
 <form action = "" method = "GET">
         Podaj liczbę: <input type = "number" name = "licz" />
         <input type = "submit" />

 </body>
 </html>