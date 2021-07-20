<?php

class IndexController extends Controller{

    
    public function indexAction(){
        
        $contactModel = new ContactModel("contacts");
        
        $contacts = $contactModel->getContacts();

        $total = $contactModel->total();
        
        // Load View template
        
        include  CURR_VIEW_PATH . "index.html";
        
    }
    public function addAction(){
        include  CURR_VIEW_PATH . "add.html";
    }
    public function insertAction() {
        $contactModel = new ContactModel('contacts');
        $new = $contactModel->insert($_REQUEST);
        $contacts = $contactModel->getContacts();

        $this->redirect("/");
        
    }
    public function editAction(){
        $id = $_REQUEST['id'];
        $contactModel = new ContactModel('contacts');
        $contact = $contactModel->selectByPk($id);
        include  CURR_VIEW_PATH . "edit.html";
    }
    public function updateAction() {
        $contactModel = new ContactModel('contacts');
        $updated = $contactModel->update($_REQUEST);
        $contacts = $contactModel->getContacts();

        $this->redirect("/");
    }

    public function deleteAction() {
        $contactModel = new ContactModel('contacts');
        $removed = $contactModel->delete($_REQUEST['id']);
        $contacts = $contactModel->getContacts();
        $this->redirect("/");

    }


}