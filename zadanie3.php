<doctype html>
<html>
<body>

<?php
$a = $_GET["licz"];
function fib($a){
if($a==1){
    return 1;
}
elseif($a==0){
    return 0;
}
else{
    return fib($a-1)+ fib($-2);
}

}

echo (fib($a));
?>

<from action = "" method = "GET">
        Liczba: <input type = "number" name = "name" />
        <input type = "submit" />
        </from>

</body>
</html>
