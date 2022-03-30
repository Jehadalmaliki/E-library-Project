<?php
namespace coding\app\controllers;

use coding\app\models\Useradd;

class Useradds extends Controller{
    function newUseradd(){
        $this->view('new_Useradd');
    }
    function listAll(){
        $Useraddresses=new Useradd();
        $allUseraddressess=$Useraddresses->getAll();
        //print_r($allUseraddressess);

        $this->view('list_Useraddressess',$allUseraddressess);

    }
    public function creat(){
        $Useraddresses=new Useradd();
        $Useraddresses->user_id=$_POST['user_id'];
        $Useraddresses->city_id=$_POST['city_id'];
        $Useraddresses->address=$_POST['address'];
        $Useraddresses->phone=$_POST['phone'];
      
        $Useraddresses->lat=$_POST['lat'];
        $Useraddresses->lng=$_POST['lng'];
  
        $Useraddresses->is_active=isset($_POST['is_active'])?1:0;
      
        if( $Useraddresses->save())
        
        $this->view('feedback',['success'=>'تم ادخال البيانات بنجاح']);
        else 
        $this->view('feedback',['danger'=>'للاسف ! اعد المحاوله']);
    }

}
?>