<?php
class sinhvien extends Controller {
    public function index() {
        $sv = $this->model("sinhvienModel");
        $data = $sv->getAll();
        $this->view("sinhvienView", ["sinhvien" => $data]);
    }
}
?>