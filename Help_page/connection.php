    <?php
    $user = 'root';
    $pass = 'root';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    );
    $First_name =  $_REQUEST['First_name'];
    $Second_name = $_REQUEST['Second_name'];
    $Email =  $_REQUEST['Email'];
    $Telephone = $_REQUEST['Telephone'];
    $Subject = $_REQUEST['Subject'];
    $Message = $_REQUEST['Message'];
    
    try {
        $connection = new PDO('mysql:host=localhost;dbname=zoe;port=8889', $user, $pass, $options);
        $query = "INSERT INTO `client` (`First_name`, `Second_name`, `Email`, `Telephone`, `Subject`, `Message`) VALUES (:First_name, :Second_name, :Email, :Telephone, :Subject, :Message)";
        
        $statement = $connection->prepare($query);
        $statement->bindValue(':First_name', $First_name);
        $statement->bindValue(':Second_name', $Second_name);
        $statement->bindValue(':Email', $Email);
        $statement->bindValue(':Telephone', $Telephone);
        $statement->bindValue(':Subject', $Subject);
        $statement->bindValue(':Message', $Message);
        $statement->execute();
        if($statement){
            echo "New record created successfully";
        }
    
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
?>
