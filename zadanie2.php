<doctype html>
<html>
<body>

<?php 
     $pobierz = $_GET['name'];
     for($i=1; $1<$pobierz; $i++) {

        $liczba = rand(0,100);
        if($liczba%2==0) {
        echo $liczba;
        echo "<br>";
        }
     }

?>
<html>
    <body>

    <from action = "" method = "GET">
        Liczba: <input type = "number" name = "name" />
        <input type = "submit" />
        </from>

    </body>
</html>


    </body>
</html>

