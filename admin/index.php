<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
    <h1>Selamat Datang di Halaman Admin!</h1>
    <table border='0'>
        <tr>
            <th>Id_user</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Edit / Delete.</th>
        </tr>
    <?php
    session_start();
    include '../koneksi.php';
    $query_mysqli = mysqli_query($mysqli, "SELECT * FROM user") or die(mysqli_error());
    $nomor= 1;
    while($data = mysqli_fetch_array($query_mysqli)) {
        ?>
        <tr>
            <td><?php echo $data['id_user']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['level']; ?></td>
            <td class="edit"><a href='edit.php?id=<?php echo $data['id_user'];?>'>Edit</a>
            <td class="delete"><a href='delete.php?id=<?php echo $data['id_user'];?>'>Delete</a>
        </tr>
        <?php } ?>
    </tr>
    </table>
</body>
</html>