<?php

class telefon_list
{
    public $file=__DIR__.'/list.json';


    public function readList()
    {
        return $list=json_decode( file_get_contents($this->file), true);
    }

    public function addList($arr)
    {
        $arr=json_encode($arr);
        file_put_contents($this->file, $arr);
    }

    public function renderFile(){

        $list=$this->readList();

        require_once __DIR__.'/view.php';
    }

}