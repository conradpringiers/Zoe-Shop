    <?php
    $user = 'root';
    $pass = 'root';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    );
    $name =  $_REQUEST['name'];
    $telephone = $_REQUEST['telephone'];
    $subject =  $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $email = $_REQUEST['email'];
    
    try {
        $connection = new PDO('mysql:host=localhost;dbname=zoe;port=3308zer', $user, $pass, $options);
        $query = "INSERT INTO `client` (`mail`, `address`, `postalcode`, `town`, `name`, `firstname`) VALUES (:mail, :address, :postalcode, :town, :name, :firstname)";
        $statement = $connection->prepare($query);
        $statement->bindValue(':mail', $email);
        $statement->bindValue(':address', $subject);
        $statement->bindValue(':postalcode', $telephone);
        $statement->bindValue(':town', $message);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':firstname', $name);
        $statement->execute();
        if($statement){
            echo "New record created successfully";
        }
    
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
?>
