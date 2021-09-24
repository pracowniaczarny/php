<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = '4k';    //nazwa bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
             $imie = $_GET['im'];
             $nazwisko = $_GET['nazw'];
             $waga = $_GET['waga'];
$query = "Insert into uczen(Imie, Nazwisko, Srednia) values('$imie', '$nazwisko', '$waga')";
$query1 = "SELECT * FROM uczen";
$run =mysqli_query($con,$query) or die(mysqli_error());
$run2 =mysqli_query($con,$query1) or die(mysqli_error());

if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         

if($run2){
    echo "<p>";
    echo "<table border=\"1\"<tr>";
    echo "<td><strong>ID</strong></td>";
    echo "<td><strong>Imie</strong></td>";
    echo "<td><strong>Nazwisko</strong></td>";
    echo "<td><strong>Srednia</strong></td>";
    echo "</tr>";

    while($row=mysqli_fetch_row($run2))
    {
        echo "</tr>";
        echo "<td bgcolor=\"green\">" . $row[0] . "</td>";
        echo "<td bgcolor=\"green\">" . $row[1] . "</td>";
        echo "<td bgcolor=\"green\">" . $row[2] . "</td>";
        echo "<td bgcolor=\"green\">" . $row[3] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    
}
else{
    echo "formularz jest błędny";
}
}

if(isset($_GET['del']))
		 {
             $delid = $_GET['delid'];

$query2 = "DELETE FROM uczen WHERE id = $delid";
$query1 = "SELECT * FROM uczen";
$run2 =mysqli_query($con,$query2) or die(mysqli_error());

if($run2){
    echo "<p>";
    echo "<table border=\"1\"<tr>";
    echo "<td><strong>ID</strong></td>";
    echo "<td><strong>Imie</strong></td>";
    echo "<td><strong>Nazwisko</strong></td>";
    echo "<td><strong>Srednia</strong></td>";
    echo "</tr>";

    while($row=mysqli_fetch_row($run2))
    {
        echo "</tr>";
        echo "<td bgcolor=\"green\">" . $row[0] . "</td>";
        echo "<td bgcolor=\"green\">" . $row[1] . "</td>";
        echo "<td bgcolor=\"green\">" . $row[2] . "</td>";
        echo "<td bgcolor=\"green\">" . $row[3] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    
}

         }


?>

<form action="" method="get">
Imie:<input type="text" name="im"><br>
Nazwisko:<input type="text" name="nazw"><br>
Waga:<input type="text" name="waga"><br>
<input name="sub" type="submit" value="ok">
<br>
Podaj id: <input type="number" name="delid"><br>
<input name="del" type="submit" value="usun">
</form>