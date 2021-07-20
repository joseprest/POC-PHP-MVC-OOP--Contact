<?php

class ContactModel extends Model{


    public function getContacts(){

        $sql = "select * from $this->table";

        $contacts = $this->db->getAll($sql);

        return $contacts;

    }

}