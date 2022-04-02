<?php
namespace coding\app\controllers;

use coding\app\models\roles;


class rolesController extends Controller{


    function add_role(){
        $this->view('new_roles');
    }
    function editrole(){
        $this->view('edit_roles');
    }

    function listAll(){
        $roles=new roles();
        $allroles=$roles->getAll();

        $this->view('list_role',$allroles);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $role=new roles();
        
        $role->name=$_POST['name'];
        $role->is_active=isset($_POST['is_active'])?1:0;

      
        if($role->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }

    function update(){

    }
    public function remove(){

    }

}
?>

