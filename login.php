<!DOCTYPE html>
<html>
<head>

<title>Login Page</title>

</head>
<body>

    <?php
    if (isset($_GET['login'])){
        if ($_GET['login']=="false") {
            echo "Login terlebih dahulu";
        }
        if ($_GET['login']=="logout"){
            echo "Anda telah logout, silahkan login kembali";
        }
    }
    ?>

<form action="login_aksi.php" method="post">
    E-mail : <input type="email" name="email">
    Password : <input type="password" name="password">
    <input type="submit" value="login">
</form>

</body>
</html>