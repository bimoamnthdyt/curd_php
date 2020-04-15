<?php
    try {
        $con = new PDO("mysql:host=localhost;dbname=tugas_pwpb2","root","");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>