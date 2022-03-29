<?php
namespace coding\app\controllers;

use coding\app\models\User;

class UsersController extends Controller{

    function newUser(){
        $this->view('new_user');
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
        $user=new User();
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=md5($_POST['password']);
        $user->is_active=isset($_POST['is_active'])?1:0;
        $user->role_id=1;
        $user->save();
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




}
?>