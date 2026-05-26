<h1>DANH SÁCH SINH VIÊN</h1>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($data["sinhvien"])) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["hoten"]."</td></tr>";
    }
    ?>
</table>
<br>
<a href="/AnhND0001068/public/home">Quay lại Trang Chủ</a>