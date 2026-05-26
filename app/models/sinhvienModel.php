<?php
class sinhvienModel extends DB {
    public function getAll() {
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $qr);
    }
}
?>