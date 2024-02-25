
<?php
        include '../koneksi.php';

        if (isset($_POST['Simpan'])) {
            $id=$_POST['id_user'];
            $username= $_POST['username'];
            $password= $_POST['password'];
            $level= $_POST['level'];
            var_dump($id);

            include_once '../koneksi.php';
            $result = mysqli_query($mysqli,"UPDATE user SET username='$username', password='$password', level='$level' WHERE id_user=$id");
            header('Location: index.php');       
        }
        ?>