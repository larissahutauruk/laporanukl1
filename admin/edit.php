<?php
    include '../koneksi.php';

    if(!isset($_GET['id'])){
        header('Location: index.php');
    }
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user=$id");
    while($user_data = mysqli_fetch_array($result))
    {
        $username = $user_data['username'];
        $password = $user_data['password'];
        $level = $user_data['level'];
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editstyle.css">
    <title>Edit data</title>
</head>
<body>
<form action="editproses.php" method="post">
        <div>
            <label>Username</label> <br>
            <input name="username" type="text" value="<?php echo $username;?>">
        </div>  
        <div>
            <label>Password</label> <br>
            <input name="password" type="text" value="<?php echo $password;?>">
        </div>
        <div>
            <label>Level</label>
            <input type="text" name="level" value="<?php echo $level;?>">
        </div>
        <div>
            <input type="hidden" name="id_user" value=<?php echo $_GET['id'];?>>
            <input type="submit" name="Simpan" value="Simpan">
        </div>
    </form>
    </html>