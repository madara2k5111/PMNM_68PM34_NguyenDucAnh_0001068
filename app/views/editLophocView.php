<h2>SUA LOP HOC</h2>
<?php $row = mysqli_fetch_array($data["lophoc"]); ?>
<form action="/AnhND0001068/public/lophoc/update/<?php echo $row['id']; ?>" method="POST">
    Ten lop: <input type="text" name="tenlop" value="<?php echo $row['tenlop']; ?>">
    <button type="submit">Luu</button>
</form>