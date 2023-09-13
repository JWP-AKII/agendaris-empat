<?php
include('koneksi.php');

if (isset($_POST['simpan'])) {
    $nama = $_POST['username'];
    $jabatan = $_POST['jabatan'];
    $password = sha1($_POST['password']);

    $sql = "UPDATE user SET username='$nama', password ='$password',jabatan = '$jabatan' WHERE id='$id'";

    $data = mysqli_query($conn, $sql);
    
    if ($data == TRUE) {
        header('location: index.php');
    }else{
        echo "gagal".mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <h1>edit data</h1>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id=$id";
    $data = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($data);
    ?>

    <form action="edit.php?id= <?php echo $id?>" method="post">
        <label for="username">nama</label>
        <input type="text" name="username" value="<?php echo $result['username'];?>">
        <br>
        <label for="jabatan">jabatan</label>
        <input type="text" name="jabatan" value="<?php echo $result['jabatan'];?>">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" value="<?php echo $result['password'];?>">
        <br>
        <button type="submit" name="simpan">simpan perubahan</button>
    </form>
</body>
</html>