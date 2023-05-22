<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="../css/style.css"/> 
</head> 
<body> 
    <form action='Login_processing.php' class="login" method='POST'> 
        Tên đăng nhập : <input type='text' name='username'/> 
        Mật khẩu : <input type='password' name='password'/> 
        <input type="radio" name="role" id="admin" value="Admin"/>
        <label for="admin">Admin</label>
        <input type="radio" name="role" id="teacher" value="Giáo Viên"/>
        <label for="teacher">Giáo Viên</label>
        <input type="radio" name="role" id="student" value="Sinh Viên"/>
        <label for="student">Sinh Viên</label>
        <input type='submit' class="button" name="login" value='Đăng Nhập'/> 
        <?= include('Login_processing.php');?>
    <form> 
</body> 
</html>