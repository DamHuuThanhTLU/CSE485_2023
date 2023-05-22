<?php
    include('connect.php');
    $id = $_POST["id"];
    if(isset($_POST['update']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if($username == "" ||  $password == ""|| $role ==""){
            echo"Ban chua nhap day du thong tin.Yeu cau nhap day du thong tin";
        }else{
            $sql = "UPDATE 'authentication_authorization' SET username = '$username',password = '$password',role = '$role' WHERE id = '$id' ";
            $result = mysqli_query($connect,$sql);
            header( "Location: Admin.php" );
        }
    }
?>
<?php
    $sql = "SELECT * FROM authentication_authorization WHERE id ='$id'";
    $result = mysqli_query($connect,$sql);
    $rows = mysqli_fetch_array($result);
?>
<h1>SỬA</h1>
<form action='Admin_update.php?id=<?php echo $id ?>' class = "update" method='POST'> 
        <label for="name">Tên Đăng Nhập</label>
        <input type="text" name = "username" value = "<?php echo $rows['username'];?>"/><br>
        <label for="email">Mật Khẩu</label>
        <input type="text" name = "password" value = "<?php echo $rows['password'];?>"/><br>
        <input type="radio" name="role" id="admin" value = "<?php echo $rows['role'];?>"/>
        <label for="admin">Admin</label>
        <input type="radio" name="role" id="teacher" value = "<?php echo $rows['role'];?>"/>
        <label for="teacher">Giáo Viên</label>
        <input type="radio" name="role" id="student" value = "<?php echo $rows['role'];?>"/>
        <label for="student">Sinh Viên</label><br>
        <input type='submit' class="button" name="update" value = "Thực Hiện" /><br>
        <?php echo"<a href='javascript: history.go(-1)'>Trở lại</a>"; ?>
</form> 