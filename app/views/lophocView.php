<h2>DANH SACH LOP HOC</h2>
<table border="1" width="100%">
    <tr><th>ID</th><th>Ten lop</th><th>Hanh dong</th></tr>
    <?php while($row = mysqli_fetch_array($data["lophoc"])) {
        echo "<tr><td>".$row['id']."</td><td>".$row['tenlop']."</td>
        <td><a href='/AnhND0001068/public/lophoc/edit/".$row['id']."'>Sua</a> | 
        <a href='/AnhND0001068/public/lophoc/delete/".$row['id']."'>Xoa</a></td></tr>";
    } ?>
</table>