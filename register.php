<!DOCTYPE html>
<html>
    <head>
        <title>register/Loginpage</title>
    </head>

    <body>
<?php
session_start();
include 'dbconnect.php';
$username =$_POST['username'];
$email =$_POST['email'];
$password =$_POST['password'];
$phone =$_POST['phone'];

$emailquery = "SELECT * FROM register WHERE email='$email'";
$query = mysqli_query($con, $emailquery);

$emailcount = mysqli_num_rows($query);
if($emailcount > 0){
    echo "<script>alert('Email already Exist...!')</script>";
    
}
else{
    
    

        $insertquery = "INSERT INTO register(username, email, phone) VALUES('$username','$email','$phone')";
        $iquery = mysqli_query($con, $insertquery);
    if($iquery){
        echo "<script>alert('Register Successfull,please Login..')</script>";
        $_SESSION['username'] = $username;?>
        <meta http-equiv="refresh" content="0;URL='reservation-2.php'" />
        <?php
    }
    else{
        echo "<script>alert('Register Unsuccessfull.')</script>";?>
        <meta http-equiv="refresh" content="0;URL='reservation-2.php'" />
        <?php
    }
}

?>

</body>
</html>


