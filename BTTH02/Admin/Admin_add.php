<?php
    include('../connnect/connect.php');
    if(isset($_POST['add']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if($username == "" ||  $password == ""|| $role ==""){
            echo"Ban chua nhap day du thong tin.Yeu cau nhap day du thong tin";
        }else{
            $sql = "INSERT INTO authentication_authorization(username,password,role) VALUES ('$username','$password','$role')";
            $result = mysqli_query($connect,$sql);
            header( "Location: Admin.php" );
        }
    }
?>
<h1>THÊM</h1>
<form action='' class = "add" method='POST'> 
        <label for="name">Tên Đăng Nhập</label>
        <input type="text" name = "username"><br>
        <label for="email">Mật Khẩu</label>
        <input type="text" name = "password"><br>
        <input type="radio" name="role" id="admin" value="Admin"/>
        <label for="admin">Admin</label>
        <input type="radio" name="role" id="teacher" value="Giáo Viên"/>
        <label for="teacher">Giáo Viên</label>
        <input type="radio" name="role" id="student" value="Sinh Viên"/>
        <label for="student">Sinh Viên</label><br>
        <input type='submit' class="button" name="add" value='Thực Hiện'/><br>
        <?php echo"<a href='javascript: history.go(-1)'>Trở lại</a>"; ?>
<form> 