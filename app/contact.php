<?php

include_once 'db.php';

class contact extends db{
    protected $tbl='contact';
    public function add_contact($data){
        $this->setTbl($this->tbl);
        $filds=array_keys($data);
        $_SESSION['inesrt_data'] =   $this->insertData($filds,$data);
    }
    public function list_contact(){
        $this->setTbl($this->tbl);
        $res=$this->selectData('*');
        return $res;
    }

    public function delete_contract($id){
        $this->setTbl($this->tbl);
        return $this->deleteData($id);
    }

}