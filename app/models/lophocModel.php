<?php
class lophocModel extends DB {
    public function getAll() {
        return mysqli_query($this->con, "SELECT * FROM lophoc");
    }
    public function getID($id) {
        return mysqli_query($this->con, "SELECT * FROM lophoc WHERE id=$id");
    }
    public function updateLop($id, $tenlop) {
        return mysqli_query($this->con, "UPDATE lophoc SET tenlop='$tenlop' WHERE id=$id");
    }
    public function deleteLop($id) {
        return mysqli_query($this->con, "DELETE FROM lophoc WHERE id=$id");
    }
}
?>