<?php
    $user = 'root';
    $pass = 'root';
        $connection = new PDO('mysql:host=localhost;port=3308;dbname=zoe', $user, $pass);
        $query = "SELECT * FROM client";
    $result = $connection->query($query);
    while($data=$result->fetch(PDO::FETCH_ASSOC)){
        echo " client id: ";
        echo $data['client_id'];
        echo " mail ";
        echo $data['mail'];
        echo $data['address'];
        echo $data['postalcode'];
        echo $data['town'];
        echo $data['name'];
        echo $data['firstname'];
    }

    ?>
