<h2>SUA SINH VIEN</h2>
<?php $row = mysqli_fetch_array($data["sinhvien"]); ?>
<form action="/AnhND0001068/public/sinhvien/update/<?php echo $row['id']; ?>" method="POST">
    Ho ten: <input type="text" name="hoten" value="<?php echo $row['hoten']; ?>"><br><br>
    Ma lop: <input type="text" name="malop" value="<?php echo $row['malop']; ?>"><br><br>
    <button type="submit">Luu lai</button>
</form>