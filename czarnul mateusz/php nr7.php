<?php

$link = mysql_connect("localhost","4k")
or die ("Could not connect");

mysql_select_db("bazaosob")
or die ("Could not select database");

$query = "SELECT * FROM uczen";
$result = mysq;_query($query)
or die ("Query failed");

while ($row = mysql_fetch_array($result))(
    echo "<TR><TD>" .$row["imie"].
    "</TD><TD>" .$row["nazwisko"].
    "</TD></TR>\n".
)

mysql_free_result($result);
mysql_close($link);

?>