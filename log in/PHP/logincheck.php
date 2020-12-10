<?php
require_once('config.php');
?>

<?php
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

if(isset($_POST)){

    $email              = $_POST['email'];
    $password           = sha1($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='" . $email . "'
    limit 1";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        
            // echo "Welcome "  . $row["firstname"]. " " . $row["lastname"] . $row["password"]. ' new ' . $password;
            if($row["password"]==$password){
                echo "Welcome "  . $row["firstname"]. " " . $row["lastname"];
            }
            else{
                echo "Invalid Password" ;
            }
        }
    }
    else {
        echo "No User Found ! Sign Up"; //Throw an error on failure
    }

}

?>