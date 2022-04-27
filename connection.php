<?php
    $user = 'root';
    $pass = 'root';
        $connection = new PDO('mysql:host=localhost;port=3308;dbname=zoe', $user, $pass);
        $query = "INSERT INTO `client` (`client_id`, `mail`, `address`, `postalcode`, `town`, `name`, `firstname`) VALUES ( 'hf', 't', '8975', 'ghguy', 'fh', 'hsr')";
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->exec($sql)


    ?>
