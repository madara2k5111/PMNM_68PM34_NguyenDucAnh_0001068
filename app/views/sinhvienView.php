<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-4">
    <h2>DANH SACH SINH VIEN</h2>
    <form action="/AnhND0001068/public/sinhvien/search" method="POST" class="d-flex mb-3">
        <input type="text" name="keyword" class="form-control me-2" placeholder="Nhap ten hoac ma lop...">
        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th><a href="/AnhND0001068/public/sinhvien/sapxep/id/asc" class="text-white">ID (Sort)</a></th>
                <th><a href="/AnhND0001068/public/sinhvien/sapxep/hoten/asc" class="text-white">Họ tên (Sort)</a></th>
                <th>Mã lớp</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($data["sinhvien"])) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["hoten"]."</td>
                        <td>".$row["malop"]."</td>
                        <td>
                            <a href='/AnhND0001068/public/sinhvien/edit/".$row["id"]."' class='btn btn-sm btn-warning'>Sửa</a>
                            <a href='/AnhND0001068/public/sinhvien/delete/".$row["id"]."' class='btn btn-sm btn-danger' onclick='return confirm(\"Xoa?\")'>Xóa</a>
                        </td>
                    </tr>";
            } ?>
        </tbody>
    </table>

    <?php if(!isset($data['search'])): ?>
        <nav><ul class="pagination">
            <?php for($i = 1; $i <= $data['totalPages']; $i++): ?>
                <li class="page-item"><a class="page-link" href="/AnhND0001068/public/sinhvien/index/<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
        </ul></nav>
    <?php else: ?>
        <a href="/AnhND0001068/public/sinhvien" class="btn btn-secondary">Quay lại danh sách</a>
    <?php endif; ?>
</div>