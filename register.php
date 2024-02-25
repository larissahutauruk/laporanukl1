<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styleregister.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Register</h1><br>
        <form class="form" action="register.php" method="post">
            <input type="text" name="Username" placeholder="Username" required>
            <input type="password" name="Password" placeholder="Password" required>
            <input type="text" name="Level" placeholder="Level" required>
            <button class="button" type="submit" name="Submit">Simpan</button>

            <?php
            if(isset($_POST['Submit'])) {
                $username= $_POST['Username'];
                $password= $_POST['Password'];
                $level= $_POST['Level'];
                
                include_once("koneksi.php");

                $result= mysqli_query($mysqli,"INSERT INTO user(username, password, level) VALUES('$username','$password','$level')");

                header("location:index.php");
            }
            ?>
        </form>

<div class="login-link">
            <p>Sudah punya akun? <a href="login.php">Login disini!</a></p>
        </div>
    </div>
</body>
</html>