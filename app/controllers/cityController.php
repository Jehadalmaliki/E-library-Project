<?php
namespace coding\app\controllers;

use coding\app\models\City;

class CityController extends Controller{
    function newCity(){
        $this->view('new_city');
    }
    function listAll(){
        $City=new City();
        $allCitys=$City->getAll();
        //print_r($allCitys);

        $this->view('list_Cities',$allCitys);

    }
    public function createCity(){
        $City=new City();
        $City->name=$_POST['name'];
       
        $City->created_by=1;
        $City->is_active=isset($_POST['is_active'])?1:0;
      
        if( $City->save())
        
        $this->view('feedback',['success'=>'تم ادخال البيانات بنجاح']);
        else 
        $this->view('feedback',['danger'=>'للاسف ! اعد المحاوله']);
    }

}
?>