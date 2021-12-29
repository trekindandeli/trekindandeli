<?php
    session_start();
    
?>  
<!DOCTYPE html>
<html>
    <head></head>

    <body>
<?php
include 'dbconnect.php';

$arrival = $_POST['arrival'];
$departure = $_POST['departure'];
$guest = $_POST['guest'];
$adult = $_POST['adult'];
$children = $_POST['children'];
$infant = $_POST['infant'];

if(isset($_SESSION['email'])){

    $insertquery = "INSERT INTO booking(arrival, departure, guest, adult, children, infant) VALUES('$arrival', '$departure', '$guest', '$adult', '$children', '$infant')";
    $iquery = mysqli_query($con, $insertquery);
    if($iquery){
        
        echo "<script>alert('Guest information booked,Now Chose your package..')</script>";
        ?>
        <meta http-equiv="refresh" content="0;URL='index.php'" />
        <?php
    }
    else{
        echo "<script>alert('Booking Failed...')</script>";?>
        <meta http-equiv="refresh" content="0;URL='index.php'" />
        <?php
    }
}
else {
    echo "<script>alert('You have to sign in first to book...')</script>";?>
    <meta http-equiv="refresh" content="0;URL='reservation-2.php'"/>
    <?php
}
    

?>

</body>
</html>