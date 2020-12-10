<?php
require_once('config.php');
?>

<?php
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

    if(isset($_POST)){
        $firstname          = $_POST['firstname'];
        $lastname           = $_POST['lastname'];
        $email              = $_POST['email'];
        $phoneno            = $_POST['phoneno'];
        $password           = sha1($_POST['password']);

        $sql = "INSERT INTO users (firstname, lastname, email, phoneno, password) VALUES('$firstname', '$lastname', '$email', '$phoneno', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Successfully Created";
        }
        else{
            echo "Failed";
        }
        
    }
    else{
        echo 'No Data';
    }
?>