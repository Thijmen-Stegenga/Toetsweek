<?php
    function Databaseconnect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "toetsweek3";

    //<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        return $conn;
        }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }   
} 

        function Catagories(){
        $conn = DatabaseConnect();
        $query = $conn->prepare("SELECT * FROM catagories");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

        function Furniture(){
        $conn = DatabaseConnect();
        $query = $conn->prepare("SELECT * FROM furniture");
        $query->execute();
        $result = $query->fetchAll();
        return $furniture;
        }



