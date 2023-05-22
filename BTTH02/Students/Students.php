<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="css/students_style.css"/> 
</head> 
<body> 
    <h1 Align = "center">Sinh Viên</h1>
<table border = 1>
        <tr>
            <th>id</th>
            <th>Mã khóa học</th>
            <th>Tiêu Đề</th>
            <th>Mô Tả</th>
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
        </tr>
        
        <?php }?>
    </table>
    <?php echo"<a href='javascript: history.go(-1)'>Trở lại</a>"; ?>
</body> 
</html>