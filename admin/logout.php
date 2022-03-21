<?php

include("/home/jkhanna1/data/data.php");

include("../includes/connect.php");

session_start();
session_destroy();
unset($_SESSION['username']);
    header('location:login.php');
 ?>

 
<?php include("../includes/footer.php"); ?>

<?php


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo "$username $password";

    if ( $username == $valid_user && password_verify($password, $encrypted_pass)) {

        // echo "its all good";

        session_start();
        $_SESSION['bhjvbdjhnbdjvbn=jagriti'] = session_id();    
        $_SESSION['username'] = $username;  
        header("Location:../welcome.php");
    }
    else {
        $message = "Invalid login. Please try again!";
    }


}


include("../includes/header1.php");

?>
 

<main>
    <h2>Please log in.</h2>
    <form class="login" action="" method="POST">
        <div class="login-noflex">
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
        </div>        
  
        <input type="submit" value="Login!" name="login">  
        
        <?php 
            if($message) {
                echo "<p class='msg-bad'>$message</p>";;
            }
        ?>
    </form>
</main>

<?php include("../includes/footer.php"); ?>