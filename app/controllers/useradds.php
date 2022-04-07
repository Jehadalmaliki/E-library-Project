<?php
namespace coding\app\controllers;

use coding\app\models\Useradd;
use coding\app\models\City;
use coding\app\models\User;

class Useradds extends Controller{
    function newUseradd(){
        $users=new User();
        $allusers =$users->getAll();

        $cities=new City();
        $allcities=$cities->getAll();

        $data=[
            "users" =>$allusers,
            "cities"=> $allcities
        ];
        $this->view('new_Useradd',$data);
    }
    function listAll(){
        $Useraddresses=new Useradd();
        $allUseraddressess=$Useraddresses->getAll();
        //print_r($allUseraddressess);

        $this->view('list_Useraddressess',$allUseraddressess);

    }
    public function creat(){
        $Useraddresses=new Useradd();
        $Useraddresses->user_id=$_POST['users'];
        $Useraddresses->city_id=$_POST['cities'];
        $Useraddresses->address=$_POST['address'];
        $Useraddresses->phone=$_POST['phone'];
        $Useraddresses->lng=$_POST['lng'];
        $Useraddresses->lat=$_POST['lat'];
        $Useraddresses->is_active=isset($_POST['is_active'])?1:0;
      
        if( $Useraddresses->save())
        
        $this->view('feedback',['success'=>'تم ادخال البيانات بنجاح']);
        else 
        $this->view('feedback',['danger'=>'للاسف ! اعد المحاوله']);
    }

}
?>