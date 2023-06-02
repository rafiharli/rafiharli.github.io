<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
</head>
<body>

    <?php
    if(isset($_SESSION['user'])){
        echo "<p>Selamat Datang ".$_SESSION['user']."</p>";
    } else{
        header("Location: login.php?login=false");
    }
    ?>
    </br>
    <a href="logout.php"> Log Out </a>

</body>
</html>