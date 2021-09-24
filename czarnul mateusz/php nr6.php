<form action=""method="POST">
Początek :  <input type = "number" name = "1">
Koniec : <input type = "number" name = "2">
Liczba losowań :  <input type = "number" name = "3">
<input type='submit' name='z'>
</form>
<br>


<?php
if(isset($_POST['z']))
{
$pocz=$_POST["1"];
$kon=$_POST["2"];
$los=$_POST["3"];

$losowanie=rand($pocz,$kon);
for($i=0; $i<$los; $i++){
    $losowanie=rand($pocz,$kon);
    echo $losowanie;
    echo "<br>";
}
}

?>