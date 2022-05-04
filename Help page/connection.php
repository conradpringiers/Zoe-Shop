<?php
    $user = 'root';
    $pass = 'root';

    $name =  $_REQUEST['name'];
    $telephone = $_REQUEST['telephone'];
    $subject =  $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $email = $_REQUEST['email'];
    echo $name;
    echo $telephone;
    echo $subject;
    echo $message;
    echo $email;
    /*
    try {
        $connection = new PDO('mysql:host=localhost;port=3308;dbname=zoe', $user, $pass);
        $query = "INSERT INTO client ( mail, address, postalcode, town, name, firstname) VALUES ('hf', 't', '8975', 'ghguy', 'fh', 'hsr')";
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

*/
?>
