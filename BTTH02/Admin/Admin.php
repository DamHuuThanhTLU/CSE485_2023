<?php
 include('../connect/connect.php');
?>
<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
</head> 
<body> 
    <h1 Align = "center">Admin</h1><br>
    <h3>Tài Khoản Đăng Nhập</h3>
    <table border = 1>
        <tr>
            <th>id</th>
            <th>Tên Đăng Nhập</th>
            <th>Mật Khẩu</th>
            <th>Vai Trò</th>
            <th>
                <a href=".\Admin_add.php">THÊM</a>
            </th>
        </tr>
        <?php
            $sql = "SELECT * FROM authentication_authorization";
            $result = mysqli_query($connect,$sql);
            while($rows = mysqli_fetch_array($result)){
        ?>

        <tr>
        <td><?php echo $rows["id"];?></td>
        <td><?php echo $rows["username"];?></td>
        <td><?php echo $rows["password"];?></td>
        <td><?php echo $rows["role"];?></td>
        <td><a href="Admin_update.php">SỬA</a>|<a href="Admin_delete">XÓA</a></td>
        </tr>
        <?php } ?>
    </table><br>
    <h3>Khóa Học</h3>
    <table border = 1>
        <tr>
            <th>id</th>
            <th>Mã Khóa Học</th>
            <th>Tiêu Đề</th>
            <th>Mô Tả</th>
            <th>
                <a href="course_add.php">THÊM</a>
            </th>
        </tr>
        <?php
            $sql = "SELECT * FROM courses";
            $result = mysqli_query($connect,$sql);
            while($rows = mysqli_fetch_array($result)){
        ?>

        <tr>
        <td><?php echo $rows["id"];?></td>
        <td><?php echo $rows["course_code"];?></td>
        <td><?php echo $rows["title"];?></td>
        <td><?php echo $rows["description"];?></td>
        <td><a href="">SỬA</a>|<a href="">XÓA</a></td>
        </tr>
        
        <?php } ?>
    </Table>
    <?php echo"<a href='javascript: history.go(-1)'>Trở lại</a>"; ?>
</body> 
</html>