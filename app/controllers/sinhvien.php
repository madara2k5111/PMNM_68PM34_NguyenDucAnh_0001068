<?php
class sinhvien extends Controller {
    public function index($page = 1) {
        $limit = 5; $offset = ($page - 1) * $limit;
        $sv = $this->model("sinhvienModel");
        $data = $sv->getPaging($limit, $offset);
        $total = $sv->countAll();
        $totalPages = ceil($total / $limit);
        $this->view("sinhvienView", ["sinhvien" => $data, "currentPage" => $page, "totalPages" => $totalPages]);
    }
    public function search() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $key = $_POST['keyword'];
            $sv = $this->model("sinhvienModel");
            $this->view("sinhvienView", ["sinhvien" => $sv->search($key), "search" => true]);
        }
    }
    public function edit($id) { $sv = $this->model("sinhvienModel"); $this->view("editSinhvienView", ["sinhvien" => $sv->getID($id)]); }
    public function update($id) { if ($_SERVER['REQUEST_METHOD'] == 'POST') { $this->model("sinhvienModel")->updateSV($id, $_POST['hoten'], $_POST['malop']); header('Location: /AnhND0001068/public/sinhvien'); } }
    public function delete($id) { $this->model("sinhvienModel")->deleteSV($id); header('Location: /AnhND0001068/public/sinhvien'); }
}
public function sapxep($col, $type) {
        $sv = $this->model("sinhvienModel");
        $this->view("sinhvienView", ["sinhvien" => $sv->sort($col, $type), "search" => true]);
    }
?>