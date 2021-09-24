<!doctype html>
<html>
<body>

<?php

$login = $_POST['login'];
$pass = $_POST['pass'];

$tab_log = ['generał','jw','jw2','jw3','jw4'];
$tab_pass = ['wróg elitarny','wróg','wróg2','wróg3','wróg4'];

if($login == "jw" && $pass=='wróg'){
echo "wojna";

}

else{

    echo "wygrana";
}
?>

<form action = "" method = "POST">
         Login: <input type = "text" name = "login" />

         <form action = "" method = "POST">
         Hasło: <input type = "text" name = "pass" />

         <input type = "submit" />
         




</body>
</html>