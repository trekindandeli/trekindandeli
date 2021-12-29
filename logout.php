<?php
    session_start();
    session_unset();
    session_destroy();
    
    echo "<script>alert('you are logged out..)</script>";?>
    <meta http-equiv="refresh" content="0;URL='index.html'" />
    <?php}

?>