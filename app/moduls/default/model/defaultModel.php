<?php
class defaultModel extends mainModel {

    public function indexModel() {
        $sql=$this->db->read("settings");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }



    public function blogsModel() {
        $sql=$this->db->read("blogs",
            [
                "columns_name" => "blogs_must",
                "columns_sort" => "DESC"
            ]);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function clubsModel() {
        $sql=$this->db->read("clubs");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }







}
