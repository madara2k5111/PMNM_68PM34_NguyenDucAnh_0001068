<?php
class lophoc extends Controller {
    public function index() {
        $lop = $this->model("lophocModel");
        $this->view("lophocView", ["lophoc" => $lop->getAll()]);
    }
    public function edit($id) {
        $lop = $this->model("lophocModel");
        $this->view("editLophocView", ["lophoc" => $lop->getID($id)]);
    }
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model("lophocModel")->updateLop($id, $_POST['tenlop']);
            header('Location: /AnhND0001068/public/lophoc');
        }
    }
    public function delete($id) {
        $this->model("lophocModel")->deleteLop($id);
        header('Location: /AnhND0001068/public/lophoc');
    }
}
?>