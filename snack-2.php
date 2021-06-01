<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php

$name = "";
$mail = "";
$age = "";

if(key_exists("name", $_GET)){
   $name = $_GET["name"]
}

if(key_exists("name", $_GET)){
   $name = $_GET["mail"]
}

if(key_exists("name", $_GET)){
   $name = $_GET["age"]
}

$result = true;

if(strlen($name) < 3) {
   $result = false;
}

if(!strpos($mail, "@")) {
   $result = false;
}

if(strpos($mail, ".", strpos($mail, "@"))){
   $result = false;
}

if(!is_int($age)) {
   $result = false;
}

   $res = "Accesso negato";
   if ( strlen($name) > 2 && strpos($mail, ".") && strpos($mail, "@") && filter_var($age, FILTER_VALIDATE_INT)) {
      $result = "Accesso riuscito";
   }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Access</title>
   </head>
   <body>
      <h1><?php echo $res ?></h1>
   </body>
</html>