<?php

require_once __DIR__.'/telefon_list.php';

class delete_tlf extends telefon_list
{

    public function delete($name_user){

        $list=$this->readList();

        if(array_key_exists($name_user, $list)) {
            unset($list[$name_user]);
            $this->addList($list);

        }

        $this->renderFile();
    }
}