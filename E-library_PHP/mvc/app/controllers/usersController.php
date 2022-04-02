<?php
namespace coding\app\controllers;

use coding\app\models\User;
use coding\app\models\roles;

class UsersController extends Controller{

    function newUser(){
        $roles=new roles();
        $allroles=$roles->getAll();

        $this->view('new_user',  $allroles);
    }

        public function show(){
            $this->view('');

    }
    function listAll(){
        $user=new User();
        $allusers=$user->getAll();
        //print_r($allusers);

        $this->view('list_users',$allusers);

    }

    public function saveUser(){

        //print_r($_POST);
        print_r($_POST);
        print_r($_FILES);
        $user=new User();
        
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=md5($_POST['password']);
        $user->is_active=$_POST['is_active'];
        $user->role_id=$_POST['roles'];
        if($user->save())
        $this->view('feedback',['success'=>'تم ادخال البيانات بنجاح']);
        else 
        $this->view('feedback',['danger'=>'للاسف ! اعد المحاوله']);
    }

    public function register(){
        $this->view("new");
    }

    public function delete(){
        
    }
    function editUser(){
        $this->view('edit_user');
    }





}
?>