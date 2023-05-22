<?php
    include('connect.php');
    if(isset($_POST['add']))
    {
        $MKH = $_POST['MKH'];
        $TD = $_POST['TD'];
        $MT = $_POST['MT'];

        if($MKH == "" ||  $TD == ""|| $MT ==""){
            echo"Ban chua nhap day du thong tin.Yeu cau nhap day du thong tin";
        }else{
            $sql = "INSERT INTO courses(course_code,title,description) VALUES ('$MKH','$TD','$MT')";
            $result = mysqli_query($connect,$sql);
            header( "Location: Admin.php" );
        }
    }
?>
<h1>THÊM</h1>
<form action='' class = "add" method='POST'> 
        <label for="MKH">Mã Khóa Học</label>
        <input type="text" name = "MKH"><br>
        <label for="TD">Tiêu Đề</label>
        <input type="text" name = "TD"><br>
        <label for="MT">Mô Tả</label>
        <input type="text" name = "MT"><br>
        <input type='submit' class="button" name="add" value='Thực Hiện'/><br>
        <?php echo"<a href='javascript: history.go(-1)'>Trở lại</a>"; ?>
<form> 