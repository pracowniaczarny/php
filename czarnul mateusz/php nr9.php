<form action=""method="POST">
Podaj liczbę  : <input type = "number" name = "1">

<input type = "submit" name="x">

</form>
<br>

<?php
if(isset($_POST['x']))
{

    $LOS=$_POST["1"];

$losowanie=rand(0,100);
for($i=1; $i<=$LOS; $i++){
    $losowanie=rand(1,100);
     if($losowanie%3==0){
        
    echo $losowanie;
    echo "<br>";
     }

    
}
}

?>