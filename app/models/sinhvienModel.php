<?php
class sinhvienModel extends DB {
    public function getPaging($limit, $offset) {
        return mysqli_query($this->con, "SELECT * FROM sinhvien LIMIT $limit OFFSET $offset");
    }
    public function countAll() {
        $result = mysqli_query($this->con, "SELECT COUNT(*) as total FROM sinhvien");
        $row = mysqli_fetch_assoc($result);
        return $row['total'];
    }
    public function getID($id) {
        return mysqli_query($this->con, "SELECT * FROM sinhvien WHERE id=$id");
    }
    public function updateSV($id, $hoten, $malop) {
        return mysqli_query($this->con, "UPDATE sinhvien SET hoten='$hoten', malop='$malop' WHERE id=$id");
    }
    public function deleteSV($id) {
        return mysqli_query($this->con, "DELETE FROM sinhvien WHERE id=$id");
    }
    public function search($key) {
        $qr = "SELECT * FROM sinhvien WHERE id LIKE '%$key%' OR hoten LIKE '%$key%' OR malop LIKE '%$key%'";
        return mysqli_query($this->con, $qr);
    }
}
public function sort($col, $type) {
        return mysqli_query($this->con, "SELECT * FROM sinhvien ORDER BY $col $type");
    }
?>