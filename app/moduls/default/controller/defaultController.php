<?php

class defaultController extends mainController
{

    public function index()
    {
        $data = [];
        $indexModel=new defaultModel();
        $data['clubs']=$indexModel->clubsModel();
        $this->callLayout("frontend", "main", "default", "index", $data);
    }


}
