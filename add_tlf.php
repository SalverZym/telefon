<?php

require_once __DIR__.'/telefon_list.php';

class add_tlf extends telefon_list
{

    public function add()
    {
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $list=$this->readList();
            $list[$_POST["name"]]=$_POST["tel"];
            $this->addList($list);

        }

        $this->renderFile();
    }

}