<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>

    <body>
    <?php
    session_start();
    include('dbconnect.php');
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    
        $query = "SELECT * FROM register WHERE email='".$email."' limit 1";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['email'] = $_POST['email'];?>
            <meta http-equiv="refresh" content="0;URL='index.php'" />

            <?php
        }
        else{
            echo "<script>alert('Login Unsuccessfull..! Please sign in again')</script>";?>
                <meta http-equiv="refresh" content="0;URL='reservation-2.php'" />
            <?php
        }
    }
?>
    
</body>
</html>



