<?php
namespace coding\app\controllers;

use coding\app\models\User_payment_method;
use coding\app\models\User;
use coding\app\models\payements;

class user_pay_MethController extends Controller{
 
    function add_user_payment(){
        $users=new User();
        $allusers=$users->getAll();

        $payements=new Payements();
        $allpayements=$payements->getAll();

        $data=["users" => $allusers,
        "payements" =>$allpayements
                ];
        $this->view('new_user_payment',$data);
    }
    function edituser_payment(){
        $this->view('edit_user_payment');
    }

    
    // $user_payment_methodname=$this->con->real_escape_string($_POST['user_payment_method']);
    function listAll(){
        $user_payments=new User_payment_method();
        $alluser_payments=$user_payments->getAll();

        $this->view('list-user_payment',$alluser_payments);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $user_payment_method=new User_payment_method();

      
        $user_payment_method->user_id=$_POST['users'];
        $user_payment_method->payement_id=$_POST['payements'];
        $user_payment_method->is_active=isset($_POST['is_active'])?1:0;


        if($user_payment_method->save())
        
        $this->view('feedback',['success'=>'تم ادخال البيانات بنجاح']);
        else 
        $this->view('feedback',['danger'=>'للاسف ! اعد المحاوله']);


    }
    function update(){

    }
    public function remove(){

    }



}
?>