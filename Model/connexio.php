<?php
# Alberto González Benítez, 2n DAW, Pràctica 04 - Inici d'usuaris i registre de sessions
function connectarBD($db_host = "localhost", $db_usuari = "root", $db_password = "", $db_nom = "pt04_alberto_gonzalez")
{
    try {
        $DB = new PDO("mysql:host=$db_host; dbname=$db_nom;charset=utf8", $db_usuari, $db_password);
        return $DB;
    } catch (PDOException $e) {
        echo "Error al conectarse a la base de dades: " . $e->getMessage();
        die();
    }
}
?>
