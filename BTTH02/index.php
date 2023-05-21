<?php include 'header.php'; ?>
<main class="container-fluid mt-3" style="margin-bottom: 5%;">
    <h3 class="text-left text-uppercase mb-3 text-primary fw-bold fs-2 text-danger">DANH SACH </h3>
    <div class="row">
        
                <div class="col-sm-3">

                    <table data-toggle="table" border =1>
                        <thead>
                            <tbody>
                               <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>birth_date</th>
                               </tr>
                            </tbody>
                        </thead>   
                
                
                            <?php
        // Ket noi db
        $conn = mysqli_connect('localhost', 'root', '', 'btth2');
        if (!$conn) {
            die('Kết nối tới Server lỗi');
        }
        // Truy van
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);
        // Xu li ket qua tra ve
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                
                    <thead>
                        <tbody>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['birth_date']; ?></td>
                                
                            </tr>
                        </tbody>
                       
                    </thead>
                </div>

        <?php
            }
        }
        ?>
    </div>
</main>
<?php include 'footer.php'; ?>