<?php
//serper
include 'assets/konek.php';
if(!empty($_SESSION['username'])){
    header("Location: ./bagianuser/homepageuser.php");
}
error_reporting(0);
session_start();
//akhir serper

//logic
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM data_user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: bagianuser/homepageuser.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
//akhir logic
?>

<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="box.svg" type="image/x-icon">
    <title>Log In</title>
</head>
    <body>
        <div class="alert alert-warning" role="alert">
            <?php echo $_SESSION['error']?>
        <div class="loginbox">
            <h1>Log In</h1>
            <form action="" method="post">
                <label>Username</label>
                <input type="text" name= "username" placeholder="username"required>
                <label>Password</label>
                <input type="Password" name="password" placeholder="Password" required>
                <button type="submit" name="submit" value="Login">Log In</button>
                <br><br>
                <p class="login-register-text"><a href="assets/register.php">Don't have account? Click here!</a></p>
            </form>
        </div>
    </body>
</html>