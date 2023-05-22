<?php
    session_start();
    header('Content-Type: text/html; charset=UTF-8');
    if(isset($_POST['login']))
    {
        //conect
        include('../connect/connect.php');
        //laydata
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $role = addslashes($_POST['role']);

              
        //Kiem tra thong tin dang nhap
        if (!$username || !$password || !$role) {
            echo "Vui lòng nhập đầy đủ tên đăng nhập,mật khẩu và chọn vai trò. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }    
        $sql = "SELECT * FROM authentication_authorization WHERE username='$username' and password='$password' and role = '$role'";
        $result = mysqli_query($connect,$sql);

        if(mysqli_num_rows($result)>0){
            if($role === "Admin"){
                include('../Admin/Admin.php');
                }else if($role === "Giáo Viên"){
                        include('../Lecturer/Lecturer.php');
                        }else if($role === "Sinh Viên"){
                                    include('../Students/Students.php');
                                }
        }else{
            echo "Đăng nhập không thành công.<a href='javascript: history.go(-1)'>Trở lại</a>";
        }
       $connect->close();
    }
?>