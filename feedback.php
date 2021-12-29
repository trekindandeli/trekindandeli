<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>

    <body>
<?php
include 'dbconnect.php';
session_start();
if(!isset($_SESSION['email'])){
    echo "You are logged out,Login again...";
    header('location: reservation-2.php');
}else {
    
   $uname = $_POST['uname'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
    
    
        $insertquery = "INSERT INTO feedback(uname, email, subject, message) VALUES ('$uname','$email','$subject','$message')";
        $iquery = mysqli_query($con, $insertquery);
            if($iquery){
                echo "<script>alert('Thank You for your feedback...')</script>";?>
                <meta http-equiv="refresh" content=";URL='index.php'" />
                <?php
            }
            else{
                echo "<script>alert('Something went wrong..!')</script>";?>
                <meta http-equiv="refresh" content=";URL='contact.php'" />
                <?php
            }
}

?>

</body>
</html>


